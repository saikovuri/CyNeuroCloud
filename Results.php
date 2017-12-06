<?php
   include("includes/header.php");
   ?>
<div class="container">
   <h2 class="heading">Results</h2>
</div>
</br>
</br>
<form>
   
   <div class = "container">
      <div class="col-md-3">
      </div>
   <div class="col-md-6 alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> fmri job ran successfully 
  </div>
<div class="col-md-3">
      </div>
   </div>

   <div class="container">
  <div class="col-md-3">
      </div>

     <div class="col-md-6"> 
  <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>JobID</th>
        <th>Job Name</th>
        <th>Job Description</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Neuron</td>
        <td>This job is to run neuron workflow</td>
        <td>Pending</td>
      </tr>
      <tr>
        <td>2</td>
        <td>fmri</td>
        <td>This job is to run fmri workflow</td>
        <td>Success</td>
      </tr>
     
    </tbody>
  </table>
</div>

<div class="col-md-3">
      </div>
</div>

   </br>
   <div class="form-actions">
      <a class="btn btn-primary" href="workflowRequirements3.php">Back</a>
     
   </div>
    </br>
</form>
</body>
</html>