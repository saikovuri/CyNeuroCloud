<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert( 
            [
            'name' => 'NeuroSai',
            'email' => 'neurosai@isp.com',
            'password' => 'letmein',
            'remember_token' => 'letmein',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ]
        );
    	DB::table('template')->insert(
    		[[
            'usecase_name' => 'FMRI',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        	],
    		[
            'usecase_name' => 'NEURON Single Cell',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        	],
      		[
            'usecase_name' => 'NEURON Network',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        	],
    		[
            'usecase_name' => 'WGCNA',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        	]]      	      	
        );

    	$template_id = DB::table('template')->where('usecase_name' , 'NEURON Single Cell')->value('id');
    	DB::table('step')->insert(
    		[[
            'template_id' => $template_id,
            'step_name' => 'monitoring',
            'step_order' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        	], 
    		[
            'template_id' => $template_id,
            'step_name' => 'modeling',
            'step_order' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        	],        	   	
    		[
            'template_id' => $template_id,
            'step_name' => 'visualization',
            'step_order' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")        	
        ]]
        );

    	$step_id = DB::table('step')->where('step_name' ,'monitoring')->value('id');
    	DB::table('step_option')->insert(
    		[
            'step_id' => $step_id,
            'step_option_name' => 'monitoring',
            'step_option_description' => 'Monitor job completion for the workflow.' ,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")      
        	]
        );

        $step_id = DB::table('step')->where('step_name' , 'modeling')->value('id');
    	DB::table('step_option')->insert(
    		[[
            'step_id' => $step_id,
            'step_option_name' => 'current injection',
            'step_option_description' => 'Perform a current injection experiment.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")        
        	],
        	 [
            'step_id' => $step_id,
            'step_option_name' => 'synapse',
            'step_option_description' => 'Perfrom a synaptic drive experiment.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        	]]
        );

        $step_option_id = DB::table('step_option')->where('step_option_name' ,'current injection')->value('id');
    	DB::table('file')->insert(
    		[
            'step_option_id' => $step_option_id,
            'input_output' => 'output',
            'file_name' => 'SimpleCurrentInjection.cfg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")       
        	]
        );
    	DB::table('parameter')->insert(
    		[[
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'amplitude',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")       
        	],
        	 [
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'delay',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")      
        	],
        	[
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'dt',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")     
        	],
        	[
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'duration',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")        
        	],
        	 [
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'tstop',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")      
        	],
        	 [
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'v_init',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")    
        	]]
        );

        $step_option_id = DB::table('step_option')->where('step_option_name' , 'synapse')->value('id');
    	DB::table('file')->insert(
    		[
            'step_option_id' => $step_option_id,
            'input_output' => 'output',
            'file_name' => 'SimpleSynapse.cfg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")                       
        	]
        );
    	DB::table('parameter')->insert(
        	[[
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'dt',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")        
        	],
        	[
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'interval',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")       
        	],
        	[
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'noise',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")       
        	],
        	 [
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'number',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")     
        	],
        	 [
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'start',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")    
        	],
        	 [
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'tstop',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")          
        	],
        	 [
            'step_option_id' => $step_option_id,
            'input_output' => 'input',
            'parameter_name' => 'v_init',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")       
        	]]
        );  
             
    }
}
