<?php
   include("includes/header.php");
   ?>
<div class="container">
   <h2 class="heading"> Neuron Workflow Requirements</h2>
</div>
</br>
</br>
<div class="container">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-6" style="margin-left: -30px">
      <h3>
         Analysis Software tool used: <b> NEURON </b>
      </h3>
   </div>
   <div class="col-sm-2">
   </div>
   <div class="col-sm-4">
   </div>
   <div class="col-sm-6" style="margin-left: 20px">
      <h3>
         Programming Language:  <b> HOC </b>
      </h3>
   </div>
   <div class="col-sm-4">
   </div>
</div>
<div class="container jumbotron padding-top-10 padding-bottom-5" style="width: 75%;" >
   <div class="col-md-11">
      <h4 style="font-weight: bold">Click on the arrow for Advanced Settings</h4>
   </div>
   <div class="col-md-1">
      <input type="image" id="arrow" name="arrowdown" src="images\arrowdown.jpg" alt="down" value = '1' width="35" height="35">
   </div>
   <div class="container jumbotron padding-top-10 padding-bottom-5" id="advanced" style="width: 75%; display: none;  " >
      </br>
      </br>
      <div class="col-md-12" style="margin-left: -185px">
         <div class="form-group row">
            <div class="col-sm-8">
               <p>Maximum hours to run: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" >
            </div>
         </div>
         <div class="form-group row" style="margin-top: -10px">
            <div class="col-sm-8">
               <p>Enter main input file name: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" >
            </div>
         </div>
         <div class="form-group row" style="margin-top: -10px">
            <div class="col-sm-8">
               <p>Enter name for compressed output file: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" >
            </div>
         </div>
         <div class="form-group row" style="margin-top: -10px">
            <div class="col-sm-8">
               <p>Enter sub-directory name: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" >
            </div>
         </div>
         <div class="form-group row" style="margin-top: -10px">
            <div class="col-sm-8">
               <p>Enter number of nodes: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" >
            </div>
         </div>
         <div class="form-group row" style="margin-top: -10px">
            <div class="col-sm-8">
               <p>Enter number of cores per node: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" >
            </div>
         </div>
      </div>
   </div>
</div>
</br>
<div class="form-actions" style="margin-left:50px ">
   <a class="btn btn-primary" href="workflowRequirements.php">Back</a>
   &nbsp&nbsp&nbsp&nbsp&nbsp
   <a class="btn btn-primary" href="workflowRequirements3.php">Next</a>
</div>
</br>
</body>
</html>