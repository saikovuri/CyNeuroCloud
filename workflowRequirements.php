<?php
   include("includes/header.php");
   ?>
<div class="container">
   <h2 class="heading"> Neuron Workflow Requirements</h2>
</div>
</br>
</br>
<form method="post" action="workflowRequirements2.php" autocomplete="off">
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">Number of Neurons:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="inputname" >
      </div>
      <div class="tooltip col-sm-2" style="color: black">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Number of Neurons</span>
      </div>
   </div>

   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">Types of Neurons:</label>
      <div class="col-sm-5">
         <div>
            <select class="form-control">
                <option>Choose number of Types of Neurons</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
      </div>
      <div class="tooltip col-sm-2" style="color: black">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Number of types of Neurons</span>
      </div>
   </div>

 <div class="form-group row"  id="one" style="display: none">
   </br>
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">Number of A Neurons:</label>
      <div class="col-sm-3">
         <input type="text" class="form-control" id="inputname" >
      </div>
      <div class="col-sm-5" >
       
      </div>
   </div>

   <div class="form-group row"  id="two" style="display: none">
   </br>
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">A - A:</label>
      <div class="col-sm-3">
         <input type="text" class="form-control" id="inputname" >
      </div>
      <div class="col-sm-5" >
       
      </div>
   </br></br></br>
   </div>

   <div class="form-group row"  id="three" style="display: none">
      </br>
       <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-1 col-form-label">A Neurons:</label>
      <div class="col-sm-1">
         <input type="text" class="form-control" id="inputname" >
      </div>
       <div class="col-sm-1">
      </div>
      <label for="jobname" class="col-sm-1 col-form-label">B Neurons:</label>
      <div class="col-sm-1">
         <input type="text" class="form-control" id="inputname" >
      </div>
      <div class="col-sm-5" >
       
      </div>
   </br></br></br>
   </div>

   <div class="form-group row"  id="five" style="display: none">
      </br>
       <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-1 col-form-label">A Neurons:</label>
      <div class="col-sm-1">
         <input type="text" class="form-control" id="inputname" >
      </div>
       <div class="col-sm-1">
      </div>
      <label for="jobname" class="col-sm-1 col-form-label">B Neurons:</label>
      <div class="col-sm-1">
         <input type="text" class="form-control" id="inputname" >
      </div>

      <div class="col-sm-1">
      </div>
      <label for="jobname" class="col-sm-1 col-form-label">C Neurons:</label>
      <div class="col-sm-1">
         <input type="text" class="form-control" id="inputname" >
      </div>
      <div class="col-sm-2" >
       
      </div>
   </br></br></br>
   </div>






   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="description" class="col-sm-2 col-form-label">Connectivity Matrix:</label>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Connectivity Matrix</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input type="radio" name="optradio" value = '1'>   Generate Randomly based on % of connections from Neuron
         A to Neuron B</label>
      </div>
      <div class="col-sm-12" style="display: none" id="selection1">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input type="text" class="form-control" id="inputname" >
         </div>
         <div class="tooltip col-sm-2" style="color: black; margin-top: 8px">
            <span class="glyphicon glyphicon-question-sign"></span>
            <span style="height: 40px" class="tooltiptext">Percentage of connections from Neuron Type A to Type B</span>
         </div>
         <div class="col-sm-2">
         </div>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input value='2' type="radio" name="optradio">   Upload csv file</label>
      </div>
    <div class="col-sm-12" style="display: none" id="selection2">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input type="file" name="fileToUpload" id="fileToUpload">
         </div>
         <div class="col-sm-2">
         </div>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input  type="radio" name="optradio" >   I am not sure</label>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="description" class="col-sm-2 col-form-label">Weight Matrix:</label>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Weight Matrix</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input value='3' type="radio" name="optradio1" >   Generate Random weights</label>
      </div>
      <div class="col-sm-12" style="display: none" id="selection3">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input  type="text" class="form-control" id="inputname" >
         </div>
         <div class="tooltip col-sm-2" style="color: black; margin-top: 8px">
            <span class="glyphicon glyphicon-question-sign"></span>
            <span style="height: 40px" class="tooltiptext">Random weights</span>
         </div>
         <div class="col-sm-2">
         </div>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input value='4' type="radio" name="optradio1">   Upload csv file</label>
      </div>
      <div class="col-sm-12" style="display: none" id="selection4">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input type="file" name="fileToUpload" id="fileToUpload">
         </div>
         <div class="col-sm-2">
         </div>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input type="radio" name="optradio1" >   I am not sure</label>
      </div>
   </div>
   </br>

<div class="form-actions" style="margin-left:50px ">
      <div class="col-sm-5">
      </div>
      <div class="col-sm-1">
         <a class="btn btn-primary" href="neuronDetails.php">Back</a>
      </div>
      
      <div class="col-sm-1">
         <button style="width: 60px" type="submit" class="btn btn-block btn-primary" name="btn-login">Next</button>
      </div>
      <div class="col-sm-5">
      </div>
   </div>

</br>
</form>
</body> 
</html>