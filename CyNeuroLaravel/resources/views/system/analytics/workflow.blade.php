@extends('system.layouts.header')
@section('css')
<link href="{{ asset('jscss/dropzone/dropzone.css') }}" rel="stylesheet">
<!-- Style sheet for the Chatbot -->
<link rel="stylesheet"  href="{{ asset('jscss/custom/chatbot/chatbot.css') }}">
<!-- end of style sheet for ChatBot -->
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

<!-- ChatBot view page -->
@include('system.chatbot.chatbot')
<!-- end of ChatBot view page -->

<!-- Tab panels -->
<div class="tab-content">
   <!--Panel 1-->
   <div class="tab-pane fade in show active" id="panel5" role="tabpanel" ng-controller="neuron-workflow-show" >


        @include('system.analytics.layouts.firstPage')
        @include('system.analytics.layouts.networkView2')
        @include('system.analytics.layouts.networkView3')
        @include('system.analytics.layouts.networkView4')
        @include('system.analytics.layouts.networkView5')
        @include('system.analytics.layouts.networkView6')
       

        <form name="singleNeuron" >
          @include('system.analytics.layouts.singleView6')
        @include('system.analytics.layouts.singleView1')
        @include('system.analytics.layouts.singleView2')
        @include('system.analytics.layouts.singleView3')
        @include('system.analytics.layouts.singleView4')
        @include('system.analytics.layouts.singleView5')
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
                  <div id="upload" class="dropzone" method="post" enctype="multipart/form-data">
                  </div>

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

   var php_upload_input_test = '{{ route('system.analytics.store_params') }}';
   var php_get_job_submit_url = '{{ route('system.analytics.api_workflow_job_submit') }}';
    
   var php_workflow_get_job_list = '{{ route('system.analytics.workflow_get_job_list') }}';
   var php_workflow_get_job_parameters = '{{ route('system.analytics.workflow_get_job_parameters') }}';
   

     
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

<!-- all the jquery functions related to ChatBot -->
<script type="text/javascript">
    (function($) {
    $(document).ready(function() {
        var $chatbox = $('.chatbox'),
            $chatboxTitle = $('.chatbox__title'),
            $chatboxTitleClose = $('.chatbox__title__close'),
            $chatboxCredentials = $('.chatbox__credentials');
        $chatboxTitle.on('click', function() {
            $chatbox.toggleClass('chatbox--tray');
            // to scroll down to the bottom of the chat tray  or chat body
            $('#chatbox_body_content').scrollTop(1E10);
        });
        $chatboxTitleClose.on('click', function(e) {
            //e.stopPropagation();
            //$chatbox.addClass('chatbox--closed');
            $('#chatbox_body_content').html("<div class=\"chatbox__body__message chatbox__body__message--left\"><img src=\"{{asset('images/viman_agent.png')}}\" alt=\"VIMAN\"><p>Hello, Welcome to CyNeuro portal, I am VIMAN your virtual agent.How can I help you?</p></div>");
        });
        $chatbox.on('transitionend', function() {
            if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
        });
        $chatboxCredentials.on('submit', function(e) {
            e.preventDefault();
            $chatbox.removeClass('chatbox--empty');
            // to scroll down to the bottom of the chat tray  or chat body
            $('#chatbox_body_content').scrollTop(1E10);
        });

        // this function executes when user hits enter key in chat textarea
        $("#user_input").keypress(function(e){
            var code = (e.keyCode ? e.keyCode : e.which);
            if (code == 13){
                var user_input = $('#user_input').val();
                var context_json = $('#chat_context').val();

                var user_before = '<div class="chatbox__body__message chatbox__body__message--right"><img src="{{asset('images/user_icon.png')}}" alt="User"><p>';
                var after = '</p></div>';
                var user_finalValue = user_before + user_input + after;
                $('#chatbox_body_content').append(user_finalValue);
                $('#user_input').val('');

                // scroll to the bottom of the chatbot body
                $('#chatbox_body_content').scrollTop(1E10);


                $.ajax({
                    url: "http://localhost/CyNeuroCloud/CyNeuroLaravel/public/chatbot",
                    data: {user_input: user_input, context: context_json},
                    async: false, 
                    success: function(result){
                        var viman_before = '<div class="chatbox__body__message chatbox__body__message--left"><img src="{{asset('images/viman_agent.png')}}" alt="VIMAN"><p>';

                        var res = result.split("|");

                        var viman_finalValue = viman_before + res[0] + after;
                        $('#chatbox_body_content').append(viman_finalValue);
                        $('#conversation_id').val(res[1]);
                    },
                    error: function(error){
                        $('#chatbox_body_content').append(error);
                    }
                });

                // scroll to the bottom of the chatbot body
                $('#chatbox_body_content').scrollTop(1E10);

                  
            } // end of if condition
          }); // end of keypress function
    }); // end of document ready function
})(jQuery); // end of first function
</script>
<!-- Jquery function for the bot ends here -->

<!-- below is the separate js file which has the same above code for the chatbot but for some reason it is not workinng when i use the below file so, for now i have pasterall the js code above on this page -->
<!-- <script src="{{ asset('jscss/custom/chatbot/chatbot.js') }}" type="text/javascript"></script> -->

<script src="{{ asset('jscss/custom/angular/controller/analytics-workflow-controller.js') }}" type="text/javascript" ></script>
<script src="{{ asset('jscss/custom/angular/controller/neuron-workflow-controller.js') }}" type="text/javascript" ></script>
@endsection