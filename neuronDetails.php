<?php
   include("includes/header.php");
   ?>
<div class="container">
   <h2 class="heading"> Neuron Job Details</h2>
</div>
</br>
</br>
<form>
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">Task/Job Name:</label>
      <div class="col-sm-5">
         <input  type="text" class="form-control" id="inputname" >
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
         <input type="description" class="form-control" id="jobdescription">
      </div>
      <div class="tooltip col-sm-2" style="color: black">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Description of the Task/Job</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="description" class="col-sm-2 col-form-label">Select data file to upload</label>
      <div class="col-sm-3">
         <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 5px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
   </div>
   </br>
   <div class="form-actions" style="margin-left:50px ">
      <a class="btn btn-primary" href="index.php">Back</a>
      &nbsp&nbsp&nbsp&nbsp&nbsp
      <a class="btn btn-primary" href="workflowRequirements.php">Next</a>
   </div>
</form>
</body>
</html>