<?php
   include("includes/header.php");
   session_start();
   if(!empty($_POST))
   {
   $_SESSION['jobname'] = $_POST['jobname'];
   $_SESSION['jobdescription'] = $_POST['jobdescription'];
   header("Location:workflowRequirements.php");
   }
   
   ?>
<div class="container">
   <h2 align="margin-left"> Neuron Network Simulation Workflow</h2>
</div>
</br>
</br>
   <div class="container marketing">
      <div class="page-header" >
         <h2 style="text-align:center;"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Choose the workflow steps you would like to execute </h2>
      </div>
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
      <div class="row">
         <div class="page-header">
            <h2 style="text-align:center;"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Design custom workflow </h2>
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
                     <h1><a href="neuronDetails.php"><span style="color: #404040; margin-left: 50px ;font-size: 20px" class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a></h1>
                  </div>
               </div>
            </div>
            
         </div>
         <div class = "col-md-1"></div>
      </div>
      </div>
   </div>
   </br>
   <div class="form-actions" style="margin-left:50px ">
      <div class="col-sm-5">
      </div>
      <div class="col-sm-1">
         <a class="btn btn-primary" href="index.php">Back</a>
      </div>
      <div class="col-sm-1">
         <div class="form-actions" >
            <a class="btn btn-primary" href="workflowRequirements.php">Next</a>
         </div>
      </div>
      <div class="col-sm-5">
      </div>
   </div>
</br>
</br>
</br>
</br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
   <script src="./neurondetails.js" defer="defer"></script>
</form>
</body>
</html>