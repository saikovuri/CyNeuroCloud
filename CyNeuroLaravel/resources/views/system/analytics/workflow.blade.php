@extends('system.layouts.header')
@section('css')
<link href="{{ asset('jscss/dropzone/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified indigo" role="tablist">
   <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-user"></i> Introduction</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-heart"></i> Create Workflow</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-envelope"></i> Monitor Workflow</a>
   </li>
</ul>
<!-- Tab panels -->
<div class="tab-content">
   <!--Panel 1-->
   <div class="tab-pane fade in show active" id="panel5" role="tabpanel" ng-controller="neuron-workflow-show" >
        
        @include('system.layouts.firstPage')
        @include('system.layouts.networkView2')
        @include('system.layouts.networkView3')
        @include('system.layouts.networkView4')
        @include('system.layouts.networkView5')
        @include('system.layouts.networkView6')
       

        <form name="singleNeuron" method="" action="">
        @include('system.layouts.singleView1')
        @include('system.layouts.singleView2')
        @include('system.layouts.singleView3')
        @include('system.layouts.singleView4')
      </form>
      </div>
      <!--/.Panel 1-->
      <!--Panel 2-->
      <div class="tab-pane fade" id="panel6" role="tabpanel" ng-controller="analytics-workflow-create">
         <br>
         <h4>Create Workflow</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label for="tools"><i class="fa fa-wrench text-primary fa-2x" aria-hidden="true"></i> Choose a tool:</label>
                  <select id="tools" class="form-control" ng-model="selected_tool" ng-change=" " ng-options="obj.toolId as obj.toolName for obj in tools ">
                     <option value="">-- Please select a tool --</option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="upload"><i class="fa fa-cloud-upload text-primary fa-2x" aria-hidden="true"></i> Upload data ( The maximum number of sample is 1 ):</label>
                  <div id="upload" class="dropzone" method="post" enctype="multipart/form-data"></div>
               </div>
               <div class="form-group" ng-show="show_run_button" ng-model="show_run_button">
                  <div class="text-center">
                     <button type="button" class="btn btn-warning" ng-click="run_function()">Run</button>
                  </div>
               </div>
               <div class="form-group text-center" ng-show="show_alert" ng-model="show_alert">
                  <div class="alert alert-danger" role="alert">
                     <strong>Please choose a tool and upload a data.</strong>
                  </div>
               </div>
               <div class="form-group text-center" ng-show="show_run" ng-model="show_run">
                  <div class="alert alert-success" role="alert">
                     <p id="show_run_result">
                        Your task has been submitted.
                        <br>
                        Submit time: @{{ submit_time }}.
                        <br>
                        Job ID: <strong>@{{ jobID }}</strong>
                        <br>
                        Plase remember this Job ID for monitoring the status.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/.Panel 2-->
      <!--Panel 3-->
      <div class="tab-pane fade" id="panel7" role="tabpanel" ng-controller="analytics-workflow-monitor">
         <br>
         <h4>Monitor Workflow</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label for="monitor_job"><i class="fa fa-wrench text-primary fa-2x" aria-hidden="true"></i> Input Job ID:</label>
                  <input id="monitor_job" type="text" class="form-control" placeholder="Job ID" ng-model='job_id'>
               </div>
               <div class="form-group">
                  <button type="button" class="btn btn-warning" ng-click="get_job_status()">Check Status</button>
               </div>
            </div>
            <div class="col-md-12">
               <div class="form-group text-center" ng-show="show_error" ng-model="show_error">
                  <div class="alert alert-danger" role="alert">
                     <strong>@{{ error_message }}</strong>
                  </div>
               </div>
               <div class="form-group text-center" ng-show="show_result" ng-model="show_result">
                  <table class="table table-bordered">
                     <thead class="thead-inverse">
                        <tr>
                           <th>#</th>
                           <th>Time</th>
                           <th>Stage</th>
                           <th>Description</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr ng-repeat="message_obj in message_list">
                           <th scope="row">@{{ $index+1 }}</th>
                           <td>@{{ message_obj.timestamp }}</td>
                           <td>@{{ message_obj.stage }}</td>
                           <td>@{{ message_obj.text }}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-group" ng-show="transfer" ng-model="transfer">
                  <button type="button" class="btn btn-warning" ng-click="transfer_data()">Transfer backend data to server</button>
               </div>
               <div class="form-group" ng-show="loading_icon" ng-model="loading_icon">
                  <img src="{{ asset('jscss/custom/img/circle_loading.gif') }}" style="width:50px"/>
               </div>
               <div class="form-group" ng-show="download_button" ng-model="download_button">
                  <a href="@{{ download_result_url }}" class="btn btn-success" role="button">Download</a>
                  <div class="form-group">
                     <label for="result_figure">Result:</label><br>
                     <img id="result_figure" ng-src="@{{ result_image_url }}">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/.Panel 3-->
   </div>
</div>
@endsection
@section('javascript')
<script>
   var php_get_tools_list_url = '{{ route('system.analytics.api_workflow_get_tools_list') }}';
   var php_get_run_workflow_url = '{{ route('system.analytics.api_workflow_run_workflow') }}';
   var php_get_job_statue_url = '{{ route('system.analytics.api_workflow_get_job_status') }}';
   var php_get_job_result_list_url = '{{ route('system.analytics.api_workflow_get_job_result_list') }}';
   var php_get_backend_data_to_server_url = '{{ route('system.analytics.api_workflow_get_backend_data_to_server') }}';
   
   var php_upload_input_url = '{{ route('system.UploadAPI.uploadWorkflowInput') }}';
   
</script>
<script src="{{ asset('jscss/dropzone/dropzone.js') }}" type="text/javascript" ></script>
<script src="{{ asset('jscss/custom/theme/js/neurondetails.js') }}" type="text/javascript" defer="defer"></script> 
<script>
   var input_file_list = [];
   Dropzone.autoDiscover = false;
   
   var upload_dropz = new Dropzone("#upload", {
       url: php_upload_input_url,
       headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
       addRemoveLinks: false,
       maxFiles: 1,
       maxFilesize: 1024*2,
       acceptedFiles: ".txt,.fasta,.gz,.zip,.rar,.tar",
       dictDefaultMessage: "Drop files here or click to upload (Accepted files: .txt,.fasta,.gz,.zip,.rar,.tar)",
       success : function(file, response){
           console.log(response);
   
           if(response !== '') {
               input_file_list.push(response);
           }
   
       }
   });
   
</script>
<script src="{{ asset('jscss/custom/angular/controller/analytics-workflow-controller.js') }}" type="text/javascript" ></script>
<script src="{{ asset('jscss/custom/angular/controller/neuron-workflow-controller.js') }}" type="text/javascript" ></script>
@endsection