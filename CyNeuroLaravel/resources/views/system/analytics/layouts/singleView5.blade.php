<div id="singlePage5" ng-show="singlePage5">

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
                     <button id="button6" type="button" class="btn btn-warning" ng-click="run_function()">Run</button>
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