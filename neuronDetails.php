<?php
   include("includes/header.php");
   if(isset($_POST['jobname']))
      {echo htmlentities($_POST['jobname']);}
   ?>
<div class="container">
   <h2 class="heading"> Neuron Job Details</h2>
</div>
</br>
</br>
<form method="POST" action="workflowRequirements.php" autocomplete="off">
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">Task/Job Name:</label>
      <div class="col-sm-5">
   
      <input type="text" id="inputname" class="form-control" name="jobname" value="<?php if(isset($_POST['jobname'])){echo htmlentities($_POST['jobname']);} ?>" />
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
         <input class="form-control" id="jobdescription">
      </div>
      <div class="tooltip col-sm-2" style="color: black">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Description of the Task/Job</span>
      </div>
   </div>
  <!--  <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="description" class="col-sm-2 col-form-label">Select data file to upload</label>
      <div class="col-sm-3">
         <input required type="file" name="fileToUpload" id="fileToUpload">
      </div>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 5px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Select data file to upload</span>
      </div>
   </div> -->
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