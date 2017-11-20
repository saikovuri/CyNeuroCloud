<div id="networkPage2" ng-show="networkPage2">
   </br>    
   <h3 align="margin-left"> Neuron Network Simulation Workflow</h3>
   </br>
   <div class="container marketing">
      <!-- <div class="row"> -->
      <div class="page-header" >
         <h5 style="text-align:center !important;"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Choose the workflow steps you would like to execute </h5>
      </div>
      <!-- </div> -->
      <div class="row" >
         <div class="col-md-12" >
            <div class="panel-body" >
               <div class="col-md-2"></div>
               <div class="col-md-5">
                  <div class="panel panel-primary" style="border-color: #404040">
                     <div class="panel-heading panel-heading-custom" >Existing Apps</div>
                     <div class="panel-body">
                        <div class="btn-toolbar" role="toolbar" aria-label="">
                           <div id="Pre-pro" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Pre-pro App</a></div>
                           <div id="Neuron" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Neuron App</a></div>
                           <div id="viz" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Visualization App</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="panel panel-primary" style="border-color: #404040">
                     <div class="panel-heading panel-heading-custom">Add monitoring</div>
                     <div class="panel-body">
                        <div class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#" id="status">Status App</a></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3"></div>
            </div>
         </div>
      </div>
      <div class="page-header">
         <h5 style="text-align:center !important;"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Design custom workflow </h5>
      </div>
      <div class="col-md-12">
         <div class = "col-md-1"></div>
         <div class = "col-md-10">
            <div class="panel panel-primary" style="border-color: #404040">
               <div class="panel-heading panel-heading-custom">Drag and drop existing Apps to the workflow area</div>
               <div class="panel-body">
                  <div class="col-md-3">
                     <div class="panel panel-primary" style="border-color: #404040">
                        <div class="panel-heading panel-heading-custom">Pre-pro</div>
                        <div class="panel-body" id="dropPre-pro">
                           <div id="Pre-proDropped" style="align:center;" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Pre-pro App</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="panel panel-primary" style="border-color: #404040">
                        <div class="panel-heading panel-heading-custom">Neuron</div>
                        <div class="panel-body" id="dropNeuron">
                           <div id="NeuronDropped" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Neuron App</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="panel panel-primary" style="border-color: #404040">
                        <div class="panel-heading panel-heading-custom">Visualization</div>
                        <div class="panel-body" id="dropViz">
                           <div id="vizDropped" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Visualization App</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="panel panel-primary" style="border-color: #404040">
                        <div class="panel-heading panel-heading-custom">Status</div>
                        <div class="panel-body" id="dropStatus">
                           <div id="statusDropped" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Status App</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-offset-5 col-md-1">
                     <h1><a href="#" id = "click3"><span style="color: #404040; margin-left: 50px ;font-size: 20px" class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a></h1>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class = "col-md-1"></div>
      </div>
   </div>
   </br>
   <div class="form-actions" style="display: block" id="button2">
      <input type="Submit" ng-click="changeView('firstPage')" class="btn btn-primary pull-left" value="Back" id="click2">&nbsp  &nbsp
      <input type="Submit" ng-click="changeView('networkView3')" class="btn btn-primary pull-right" value="Next" >
   </div>
   </form> 
</div>