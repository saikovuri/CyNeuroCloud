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
   <h2 class="heading"> Neuron Job Details</h2>
</div>
</br>
</br>
<form method='POST' name="NeuronDetailsForm" action='' autocomplete="off" onsubmit="return validateForm()">
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">Task/Job Name:</label>
      <div class="col-sm-5">
         <input type="text" id="jobname" class="form-control" name="jobname" value = '<?php echo isset($_SESSION['jobname']) ? $_SESSION['jobname'] : ''; ?>' />
         <div id = "jobname_error" ></div>
      </div>
      <div class="tooltip col-sm-2" style="color: #404040">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Task/Job Name</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="description" class="col-sm-2 col-form-label">Description of the Task/Job:</label>
      <div class="col-sm-5">
         <input type="text" id="descr" name="jobdescription" class="form-control" id="jobdescription" value = '<?php echo isset($_SESSION['jobdescription']) ? $_SESSION['jobdescription'] : ''; ?>' />
         <div id = "jobdescription_error" ></div>
      </div>
      <div class="tooltip col-sm-2" style="color: #404040">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Description of the Task/Job</span>
      </div>
   </div>
   <div class="container marketing">
      <div class="page-header" >
         <h2 style="text-align:center;"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Choose the workflow steps you would like to execute </h2>
      </div>
      <div class="row" >
         <div class="col-md-12" >
            <div class="panel panel-primary" style="border-color: #404040" >
               <div  class="panel-heading panel-heading-custom" >Drag and drop the required applications onto the workflow portion</div>
               <div class="panel-body" >
                  <div class="col-md-6">
                     <div class="panel panel-primary" style="border-color: #404040">
                        <div class="panel-heading panel-heading-custom" >Existing Apps</div>
                        <div class="panel-body">
                           <div class="btn-toolbar" role="toolbar" aria-label="">
                              <div id="Pre-pro" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Pre-pro App</a></div>
                              <div id="Neuron" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Neuron App</a></div>
                              <div id="post" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Post-pro App</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="panel panel-primary" style="border-color: #404040">
                        <div class="panel-heading panel-heading-custom">Add monitoring</div>
                        <div class="panel-body">
                           <div class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#" id="status">Status App</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="page-header">
            <h2 style="text-align:center;"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Design custom workflow </h2>
         </div>
         <div class="col-md-12">
            <div class="panel panel-primary" style="border-color: #404040">
               <div class="panel-heading panel-heading-custom">Specify Applications</div>
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
                        <div class="panel-heading panel-heading-custom">Post-pro</div>
                        <div class="panel-body" id="dropPost">
                           <div id="postDropped" class="btn-group" role="group" aria-label=""><a class="btn btn-default" href="#">Post-pro App</a></div>
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
                     <h1><a href="neuronDetails.php"><span style="color: #404040; margin-left: 50px " class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a></h1>
                  </div>
               </div>
            </div>
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
         <button style="width: 60px" type="submit" class="btn btn-block btn-primary" name="btn-login">Next</button>
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