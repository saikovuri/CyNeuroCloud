<?php
   include("includes/header.php");
   session_start();
?>
<div class="container">
   <div class="row">

      <h2 class="margin-left"> Neuron Workflow Requirements</h2>
       <div class="row">
<div class="col-md-12">

<img src = "images/nav2.png"  alt= "nav2" width="40%" height="50px" >

</div>
</div>
   </div>
</br>
   </br>
   <div class="row">
      <div class="col-sm-4">
   </div>
 
<div class="row">
   <div class="col-md-12">
<div class="form-horizontal">
  <div class="form-group">
 <label class="control-label col-md-3" for="tool">Analysis Software tool:</label>

 <div class="col-md-8">
    
    <select name="toolselection" class="form-control">
       <option value="tool0">Selct a tool</option>
    <option value="tool1">NEURON 7.3 on Comet using python </option>
    <option value="tool2">NEURON73 on Comet</option>
    <option value="tool3">NEURON 7.4 on Comet using python</option>
    <option value="tool4">NEURON 7.4 on Comet</option>
    <option value="tool5">NEURON OSB 7.4 on Comet using python</option>
  </select>
    </div>
  </div>

</div>
</div>

</div>
   </div>
</div>
</br>
</br>

   

   
<div class="container jumbotron padding-top-10 padding-bottom-5" style="width: 75%;" >
   <div class="col-md-11">
      <h4 style="font-weight: bold">Click on the arrow for Advanced Settings</h4>
   </div>
   <div class="col-md-1">
      <input type="image" id="arrow" name="arrowdown" src="images\arrowdown.jpg" alt="down" value = '1' width="35" height="35">
   </div>

   <form method="post" action="workflowRequirements3.php" autocomplete="off">
   <div class="container jumbotron padding-top-10 padding-bottom-5" id="advanced" style="width: 75%; display: none;  " >
      </br>
      </br>
      <div class="col-md-12" style="margin-left: -185px">
         <div class="form-group row">
            <div class="col-sm-8">
               <p>Maximum hours to run: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" value="4" >
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
               <input  type="text" class="form-control" id="inputname" value="2">
            </div>
         </div>
         <div class="form-group row" style="margin-top: -10px">
            <div class="col-sm-8">
               <p>Enter number of cores per node: </p>
            </div>
            <div class="col-sm-4">
               <input  type="text" class="form-control" id="inputname" value="24">
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
         <a class="btn btn-primary" href="workflowRequirements.php">Back</a>
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

</form>
</body>
</html>