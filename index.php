<?php
   include("includes/header.php");
   ?>
<div class="container jumbotron padding-top-10 padding-bottom-5 ">
   <div class="col-md-4 active">
      <input type="image" name="image1" src="images\fmri.jpg" alt="FMRI" value = '1' width="300" height="200">
      <p class = "text-center"> FMRI </p>
   </div>
   <div class="col-md-4 active">
      <input type="image" name="image1" src="images\Neuron.jpg" alt="Neuron" value = '2' width="300" height="200">
      <p class = "text-center"> Neuron </p>
   </div>
   <div class="col-md-4 active">
      <input type="image" name="image1" src="images\wgcna.jpg" alt="WGCNA" value = '3' width="300" height="200">
      <p class = "text-center"> WGCNA </p>
   </div>
</div>
<div class = "container" style="display: block;" id="selection1">
   <h3>This is about fmri</h3>
   <p>fmri is one of the workflows we will be building</p>
   <p>Here we are providing short description about fmri</p>
   </br>
   </br>
</div>
<div class = "container" style="display: none" id="selection2">
   <h3>This is about neuron</h3>
   <p>Neuron is one of the workflows we will be building</p>
   <p>Here we are providing short description about neuron</p>
   </br>
   </br>
</div>
<div class = "container" style="display: none" id="selection3">
   <h3>This is about wcgna</h3>
   <p>wgcna is one of the workflows we will be building</p>
   <p>Here we are providing short description about wgnca</p>
   </br>
   </br>
</div>
<div class="col-sm-12" style="display: none" id="selection1">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
      <input  type="text" class="form-control" id="inputname" >
   </div>
   <div class="tooltip col-sm-2" style="color: black; margin-top: 8px">
      <span class="glyphicon glyphicon-question-sign"></span>
      <span style="height: 40px" class="tooltiptext">Percentage of connections from Neuron Type A to Type B</span>
   </div>
   <div class="col-sm-2">
   </div>
</div>
<div class="form-actions" style="margin-left:50px ">
   <a class="btn btn-primary" href="neuronDetails.php">Next</a>
</div>
</br>
</body>
</html>