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

    //         DB::table('current_injections')->insert(
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
        
        //persist in database
        //Set up field values for job and job_file
        //waiting to do parameters until this is working
        $template_id = 'neuron_cel';
        $step_id = 1;
        $user_id = 'test';
        $job_name = 'test_name';
        if($request->id ==1) {
            $step_option_id = 0;
            $file_id = 'SimpleCurrentInjection.cfg';
        }

        else if($request->id ==2) {
            $step_option_id = 1;
            $file_id = 'SimpleSynapse.cfg';
        }

        //create the arrays for the inserted rows
        $job = ['template_id' => $template_id,
        'step_id'=> $step_id,
        'step_option_id'=> $step_option_id,
        'user_id'=> $user_id,
        'job_name'=> $job_name];

        $job_file = 
        ['template_id' => $template_id,
        'step_id'=> $step_id,
        'step_option_id'=> $step_option_id,
        'user_id'=> $user_id,
        'job_name'=> $job_name,
        'file_id' => $file_id
        ];


        // Postponing transactions until one table is working
        // going with job_file for the first one because of the timestamp column in job
        // create a file for debugging - DBerror
       //DB::beginTransaction(); 

/*
        $flight = new Flight;

        $flight->name = $request->name;

        $flight->save();
*/

       $myfile = fopen("DBerror.txt", "w") or die("Unable to open file!");
       try { 
        fwrite($myfile, 'Testing_BEFORE_INSERT'. PHP_EOL);
        fwrite($myfile, print_r($job_file, true));

        // Here's where we try to insert
       // DB::table('job')->insert($job); 
        //DB::table('job_file')->insert($job_file); 
        $job_file = new job_file;
        fwrite($myfile, 'Testing_NORMAL_FLOW_CONTINUES'. PHP_EOL);
        $job_file->template_id = $template_id;
        $job_file->step_id = $step_id;
        $job_file->step_option_id= $step_option_id;
        $job_file->user_id = $user_id;
        $job_file->job_name = $ob_name;
        $job_file->file_id = $file_id;

        $job_file->save();


        // Does insert work? No.
        //$test_job_file = DB::table('job_file')->where('template_id', 'neuron_cel')->value('template_id');
        //fwrite($myfile, $test_job_file);

        // known error - will throw exceptiion, so exception handling try/catch/finally is working
        //$x = 1/0;

        fwrite($myfile, 'Testing_NORMAL_FLOW_CONTINUES'. PHP_EOL);

        //DB::commit(); 
        } 
        catch(Exception $ex) { 

            
            fwrite($myfile, 'Testing_CATCH'. PHP_EOL);
            
            fwrite($myfile, $ex->getMessage(). PHP_EOL);
            
            //DB::rollback(); 
        }  
        finally {
            fwrite($myfile, 'Testing_FINALLY'. PHP_EOL);
            fclose($myfile);

            //return $val;
            return $val;
        }
    }

public function file_output(){

}

/*public function persist_job(Request $request) {
        $val =0;
        // Validate the request...

        //fields for job table
        /*$template_id = $request->template_id;
        $step_id = $request->step_id;
        $step_option_id= $request->step_option_id;
        $user_id->$request->user_id;
        $job_name->$request->job_name;
                $job = 
            ['template_id' => $request->template_id, 
            'step_id'=> $request->step_id,
            'step_option_id'=> $request->step_option_id,
            'user_id'=> $request->user_id,
            'job_name'=> $request->job_name
            ];

        //additional fields for job file table (output)
        //$template_id = $request->template_id;
        //$step_id = $request->step_id;
        //$step_option_id= $request->step_option_id;
        //$user_id->$request->user_id;
        //$job_name->$request->job_name;
        /*$file_id = $request->file_id;
        $file_path = $request->file_path;
        
        $job_file = 
            ['template_id' => $request->template_id, 
            'step_id'=> $request->step_id,
            'step_option_id'=> $request->step_option_id,
            'user_id'=> $request->user_id,
            'job_name'=> $request->job_name,
            'file_id' => $request->file_id
            ];

        //additional fields for job file table (input)
        //$template_id = $request->template_id;
        //$step_id = $request->step_id;
        //$step_option_id= $request->step_option_id;
        //$user_id->$request->user_id;
        //$job_name->$request->job_name;


        /*$parameter_id = 
        $value_string

        $v_init = -60;
        $tstop = 100;
        $dt = 0.001;



       if($request->id ==1)
        {


        $delay = $request->delay;
        $duration = $request->duration;  
        $amplitude = $request->amplitude;  

       
            
           $val =1;
            
         
        }

        else if($request->id ==2)
        {

        $interval = $request->interval;
        $number = $request->number;
        $noise = $request->noise;
        $start = $request->start;


            $val =2;
        }
        

       DB::beginTransaction(); 
       try { 
            DB::table('job')->insert($job); 
            DB::table('job_file')->insert($job_file); 
            //DB::table('job_parameter')->insert($predefinedAllJobCategoryAnswers); 
            DB::commit(); 
        } catch (Exception $e) { 
            DB::rollback(); 
            return Redirect::to('some_url')->with('error', $e); 
        }

            //return $val;
        
        return $val;

        // $param->save();
}*/

}
