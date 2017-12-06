<?php

namespace App\Http\Controllers\System\Analytics;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Current_injection;
use App\Job;

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


public function workflow_get_job_list(Request $request) {


        $user_id = $request->user_id; 

        $jobs = DB::table('job')
        ->join('step_option', 'job.step_option_id', '=', 'step_option.id')
        ->join('step', 'step_option.step_id', '=', 'step.id')
        ->join('template', 'step.template_id', '=', 'template.id')
        ->where([
            ['user_id', '=', $user_id ],        
        ])
        ->select('job.id', 'job_name', 'usecase_name', 'step_name', 'step_option_name', 'job.created_at')
        ->get();     

        //return $jobs; //need to return view instead
        return json_encode($jobs);

}

public function workflow_get_job_parameters(Request $request) {

        $job_id = $request->job_id; 
        

        $job_parameters = DB::table('job_parameter')
        ->join('parameter', 'job_parameter.parameter_id', 'parameter.id')
        ->join('job', 'job_parameter.job_id', 'job.id')
        ->join('step_option', 'job.step_option_id', 'step_option.id')
        ->where([
            ['job_parameter.job_id', '=', $job_id ],        
        ])
        ->select('job_parameter.id', 'parameter.parameter_name', 'job_parameter.value_string', 'job.job_name', 'step_option.step_option_name')
        ->get();  

            $response = array();
        array_push($response,
                [ 'job_name' => 'test_job_name'
                ]);
        array_push($response,
                [ 'step_option_name' => 'current injection'
                ]);
        foreach ($job_parameters as $param) {
         $parameter_name = $param->parameter_name;
         $parameter_value = $param->value_string;
            //$$parameter_name is a variable variable for the variables created for the file write
            array_push($response,
                [ $parameter_name => $parameter_value
                ]);

       }
        return json_encode($response);


 
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


    public function api_workflow_job_submit(Request $request) {

        $tool = $request->tool;
         $cur_dir = getcwd();
       
            $file_full_dir = $cur_dir.'/CyNeuroSimpleWorkflowExample.zip';
            $cmd = "curl -u yuanxunzhang:$this->backend_password -H cipres-appkey:$this->backend_key $this->backend_url/job/yuanxunzhang -F tool=NEURON74_TG  -F input.infile_=@$file_full_dir -F metadata.statusEmail=true";

            exec($cmd, $xml_output_arr);
            $xml_str = implode(" ", $xml_output_arr);
            $xml = simplexml_load_string($xml_str);
            $json = json_encode($xml);
            return $json;
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

        //hard-coded simulation parameters
        $v_init = '-60';
        $tstop = '100';
        $dt = '0.001';
        $job_name = $request->jobname;

        if($request->id ==1)
        {

        $delay = $request->delay;
        $duration = $request->duration;  
        $amplitude = $request->amplitude;  
      


        $myfile = fopen("SimpleCurrentInjection.cfg", "w") or die("Unable to open file!");
            $txt = "[Simulation Parameters]". PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "v_init = " . $v_init. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "tstop = " . $tstop. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "dt = " . $dt. PHP_EOL;
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
            $txt = "v_init = " . $v_init. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "tstop = " . $tstop. PHP_EOL;
            fwrite($myfile, $txt);
            $txt = "dt = " . $dt. PHP_EOL;
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
        /*****************************************/
        
        // create a file for debugging - DBerror
       $myfile = fopen("DBerror.txt", "w") or die("Unable to open file!");
       try { 
        fwrite($myfile, 'Testing_BEFORE_INSERT'. PHP_EOL);

        //Set up field values 
        /*****************************************/        
        $usecase_name = 'NEURON Single Cell';
        $step_name = 'modeling';
        $user_id = 1;
        if($request->id ==1) {
            $step_option_name = 'current injection';
            $file_name = 'SimpleCurrentInjection.cfg';
        }

       else if($request->id ==2) {
            $step_option_name = 'synapse';
            $file_name = 'SimpleSynapse.cfg';
        }
        
        fwrite($myfile, 'Testing_afterFieldValues'. PHP_EOL);

        //get step option id
        $query_result = DB::table('template')
        ->join('step', 'template.id', '=', 'step.template_id')
        ->join('step_option', 'step.id', '=', 'step_option.step_id')
        ->where([
            ['usecase_name', '=', $usecase_name ],
            ['step_name', '=', $step_name ],
            ['step_option_name', '=', $step_option_name ],
        ])
        ->select('step_option.id')
        ->get();

        fwrite($myfile, 'Testing_templateDBCall'. PHP_EOL);
        fwrite($myfile, print_r($query_result, true));

        $step_option_id = $query_result[0]->id;

        fwrite($myfile, 'Testing_stepOptionID_assignment'. PHP_EOL);

        //get file id
        $query_result = DB::table('file')
        ->where([
            ['step_option_id', '=', $step_option_id ],
            ['file_name', '=', $file_name ],
        ])
        ->select('file.id')
        ->get();

        fwrite($myfile, 'Testing_fileDBCall'. PHP_EOL);

        $file_id = $query_result[0]->id;

        //get parameter ids
        $query_result_params = DB::table('parameter')
        ->where([
            ['step_option_id', '=', $step_option_id ],        
        ])
        ->select('parameter.id', 'parameter_name')
        ->get();        

        fwrite($myfile, 'Testing_parameterDBCall'. PHP_EOL);

        //begin transaction
        /*****************************************/

        DB::beginTransaction(); 
        fwrite($myfile, 'Testing_InsideTransaction'. PHP_EOL);
        

        //Job first
        /*****************************************/
        //create the arrays for the inserted rows
        $job = ['step_option_id' => $step_option_id,
        'user_id'=> $user_id,
        'job_name'=> $job_name,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
        ];

        //test print 
        fwrite($myfile, print_r($job, true));
        //insert and get the job_id for the other tables
        $job_id = DB::table('job')->insertGetId($job); 

        //Job File Second
        /*****************************************/
        //create the arrays for the inserted rows
        $job_file = 
        ['job_id' => $job_id,
        'file_id' => $file_id,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
        ];


        //test print 
        fwrite($myfile, print_r($job_file, true));
        //insert
        DB::table('job_file')->insert($job_file); 


        //Job Parameters third (last)
        /*****************************************/
        //create the arrays for the inserted rows
        $job_parameter = array();
        foreach ($query_result_params as $param) {
            //fwrite($myfile, 'FOR Loop - parameter_name: '.$param->parameter_name. PHP_EOL);
            
            //$param_value = $request->$parameter_name;
            //fwrite($myfile, 'FOR Loop - $param_value: '.$param_value. PHP_EOL);

            //To access directly from the $request, use the following, but we're hard-codeing the simulation parameters
            //$parameter_name = $param->parameter_name;
            //array_push($job_parameter, [$parameter_name, $job_id, $param->id, $request->$parameter_name]);

            $parameter_name = $param->parameter_name;
            //$$parameter_name is a variable variable for the variables created for the file write
            array_push($job_parameter, 
                [ 'job_id'=> $job_id, 
                'parameter_id'=> $param->id, 
                'value_string' => $$parameter_name,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                ]);
        }

        //test print 
        fwrite($myfile, print_r($job_parameter, true));

        //insert
        DB::table('job_parameter')->insert($job_parameter); 


        // known error - will throw exceptiion, so exception handling try/catch/finally is working
        //$x = 1/0;

        fwrite($myfile, 'Testing_NORMAL_FLOW_CONTINUES'. PHP_EOL);

        //commit transaction
        DB::commit(); 
        } 
        catch(Exception $ex) { 

            
            fwrite($myfile, 'Testing_CATCH'. PHP_EOL);
            
            fwrite($myfile, $ex->getMessage(). PHP_EOL);
            
            //rollback transaction
            DB::rollback(); 
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

}
