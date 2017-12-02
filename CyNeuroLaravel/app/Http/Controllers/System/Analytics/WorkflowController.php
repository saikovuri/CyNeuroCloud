<?php

namespace App\Http\Controllers\System\Analytics;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Current_injection;
use Redirect;
use ZipArchive;
use DB;
use Exception;

class WorkflowController extends Controller
{


    private $backend_url;
    private $backend_password;
    private $backend_key;

    public function __construct() {
        $this->backend_url = 'https://nsgr.sdsc.edu:8443/cipresrest/v1';
        $this->backend_password = 'river2046';
        $this->backend_key = 'iNeuro-9D621AA966B943CAA67E8DDADDF8661E';
    }


    // Route
    public function workflow_page(Request $request) {

        return view('system/analytics/workflow');

    }


    // API
    public function api_workflow_get_tools_list(Request $request) {

        $cmd = "curl https://nsgr.sdsc.edu:8443/cipresrest/v1/tool";
//        $cmd = "curl -u yuanxunzhang:$this->backend_password -H cipres-appkey:$this->backend_key $this->backend_url/job/yuanxunzhang";

        exec($cmd, $xml_output_arr);
        $xml_str = implode(" ", $xml_output_arr);
        $xml = simplexml_load_string($xml_str);
        $json = json_encode($xml);
        return $json;

    }


    public function api_workflow_run_workflow(Request $request) {

        $tool = $request->tool;
        $file_list_str = $request->file_list_str;

        if(Storage::disk('workflow_upload_disk')->exists($file_list_str)) {

            $file_path = Storage::disk('workflow_upload_disk')->getDriver()->getAdapter()->getPathPrefix();
            $file_full_dir = $file_path . $file_list_str;
            $cmd = "curl -u yuanxunzhang:$this->backend_password -H cipres-appkey:$this->backend_key $this->backend_url/job/yuanxunzhang -F tool=$tool  -F input.infile_=@$file_full_dir -F metadata.statusEmail=true";

            exec($cmd, $xml_output_arr);
            $xml_str = implode(" ", $xml_output_arr);
            $xml = simplexml_load_string($xml_str);
            $json = json_encode($xml);
            return $json;

        }



    }



    public function api_workflow_get_job_status(Request $request) {

        $job_id = $request->job_id;
        $cmd = "curl -u yuanxunzhang:$this->backend_password -H cipres-appkey:$this->backend_key $this->backend_url/job/yuanxunzhang/$job_id";
        exec($cmd, $xml_output_arr);
        $xml_str = implode(" ", $xml_output_arr);
        $xml = simplexml_load_string($xml_str);
        $json = json_encode($xml);
        return $json;

    }


    public function api_workflow_get_job_result_list(Request $request) {

        $job_id = $request->job_id;
        $cmd = "curl -u yuanxunzhang:$this->backend_password -H cipres-appkey:$this->backend_key $this->backend_url/job/yuanxunzhang/$job_id/output";
        exec($cmd, $xml_output_arr);
        $xml_str = implode(" ", $xml_output_arr);
        $xml = simplexml_load_string($xml_str);
        $json = json_encode($xml);
        return $json;

    }

    public function api_workflow_get_backend_data_to_server(Request $request) {

        $job_id = $request->job_id;
        $download_id = $request->download_id;

        // delete the result to avoid download error.
        $path = $storagePath  = Storage::disk('workflow_upload_disk')->getDriver()->getAdapter()->getPathPrefix() . 'results/';
        if(Storage::disk('workflow_upload_disk')->exists('results/output.tar.gz'))
            Storage::disk('workflow_upload_disk')->delete('results/output.tar.gz');

        $cmd = "cd $path && nohup curl -u yuanxunzhang:$this->backend_password -H cipres-appkey:$this->backend_key -O -J $this->backend_url/job/yuanxunzhang/$job_id/output/$download_id &";
        exec($cmd);


        $cmd = "cd $path && rm -rf final_output && mkdir final_output";
        exec($cmd);

        $cmd = "cd $path && tar -zxvf output.tar.gz -C final_output ";
        exec($cmd);

        $cmd = "cd $path && Rscript runPlot.R ";
        exec($cmd, $out);

        $cmd = "cd $path && cp Rplots.png  ./final_output/ ";
        exec($cmd);

        $cmd = "cd $path && tar -zcvf final_output.tar.gz final_output ";
        exec($cmd);

        $arr = [
            'result_zip' => Storage::disk('workflow_upload_disk')->url('results/final_output.tar.gz'),
            'result_img' => Storage::disk('workflow_upload_disk')->url('results/final_output/Rplots.png')
        ];

        return json_encode($arr);



    }

    public function store_params(Request $request)
    {

        
        $val =0;
        // Validate the request...

        if($request->id ==1)
        {
        $delay = $request->delay;
        $duration = $request->duration;  
        $amplitude = $request->amplitude;  

        $myfile = fopen("SimpleCurrentInjection.cfg", "w") or die("Unable to open file!");
            $txt = "[Simulation Parameters]". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "v_init = -60". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "tstop = 100". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "dt = 0.001". PHP_EOL;
            fwrite($myfile, $txt);
             $txt = PHP_EOL;
            fwrite($myfile, $txt);


            $txt = "[Stimulation Parameters]". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "delay = " . $delay. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "duration = " . $duration. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "amplitude = " . $amplitude. PHP_EOL;
            fwrite($myfile, $txt);
            fclose($myfile);
            
            $cur_dir = getcwd();
            $zip = new ZipArchive();
            $zip->open($cur_dir.'/CyNeuroSimpleWorkflowExample.zip', ZipArchive::CREATE);
            $zip->addFile($cur_dir.'/SimpleCurrentInjection.cfg', 'CyNeuroSimpleWorkflowExample/SimpleCurrentInjection.cfg');
            $zip->close();
            $val =1;

                $injection = new Current_injection;
             
               $injection->delay= $delay;
               $injection->duration=$duration;
               $injection->amplitude=$amplitude;
               $injection->save();

    //         DB::table('current_injection')->insert(
    //     array('delay' => $delay, 'duration' => $duration, 'amplitude' => $amplitude)
    // );


        }

        else if($request->id ==2)
        {

        $interval = $request->interval;
        $number = $request->number;
        $noise = $request->noise;
        $start = $request->start;

        $myfile = fopen("SimpleSynapse.cfg", "w") or die("Unable to open file!");

            $txt = "[Simulation Parameters]". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "v_init = -60". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "tstop = 100". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "dt = 0.001". PHP_EOL;
            fwrite($myfile, $txt);
             $txt = PHP_EOL;
            fwrite($myfile, $txt);


            $txt = "[Stimulation Parameters]". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "interval = " . $interval. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "number = " . $number. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "start = " . $start. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "noise = " . $noise. PHP_EOL;
            fwrite($myfile, $txt);
            fclose($myfile);
            $cur_dir = getcwd();
            $zip = new ZipArchive();
            $zip->open($cur_dir.'/CyNeuroSimpleWorkflowExample.zip', ZipArchive::CREATE);
            $zip->addFile($cur_dir.'/SimpleSynapse.cfg', 'CyNeuroSimpleWorkflowExample/SimpleSynapse.cfg');
            $zip->close();

            $val =2;
        }
        
             return $val;




           
        // $param->save();
    }



}
