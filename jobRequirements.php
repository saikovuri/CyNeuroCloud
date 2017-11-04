<?php
include("includes/header.php");
?>


<div >

<h2 style="text-decoration: none; text-align: center"> Neuron Job Details</h2>
  </div>
</br>
</br>



<form>
  <div class="form-group row">
	<div class="col-sm-2">
	
	</div>
	<label for="jobname" class="col-sm-2 col-form-label">Task/Job Name:</label>
    <div class="col-sm-6">
    <input  type="text" class="form-control" id="inputname" >
   </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-2">
	
	</div>
    <label for="description" class="col-sm-2 col-form-label">Description of the Task/Job:</label>
    <div class="col-sm-6">
    <input type="description" class="form-control" id="jobdescription">
   </div>
  </div>


 
<div class="form-actions">
	<button type="submit" class="btn btn-primary">Back</button> &nbsp&nbsp&nbsp&nbsp
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>



</body>
</html>