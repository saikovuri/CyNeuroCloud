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
      <div class="tooltip col-sm-2" style="color: black">
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
      <div class="tooltip col-sm-2" style="color: black">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Description of the Task/Job</span>
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
   
</form>
</body>
</html>