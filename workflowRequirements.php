<?php
   include("includes/header.php");
   session_start();
   
   if(!empty($_POST))
   {
      
      $_SESSION['numberofNeuron'] = $_POST['numberofNeuron'];
      $_SESSION['neuronNumber'] = $_POST['neuronNumber'];
      
      header("Location:workflowRequirements2.php");
   }
   ?>
<div class="container">
   <h2 align="margin-left"> Neuron Workflow Requirements</h2>
   <div class="row">
      <div class="col-md-12">
         <img src = "images/nav1.png"  alt= "nav1" width="40%" height="50px" >
      </div>
   </div>
   </br></br>
   <form method="post" action="" autocomplete="off">
      <div class="form-group row">
         <div class="col-sm-2">
         </div>
         <label for="jobname" class="col-sm-2 col-form-label">Number of Neurons:</label>
         <div class="col-sm-5">
            <input type="text" class="form-control" id="numberofNeuron" name="numberofNeuron" value = '<?php echo isset($_SESSION['numberofNeuron']) ? $_SESSION['numberofNeuron'] : ''; ?>' />
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
               <select class="form-control" name="typesDropdown" id="typesDropdown">
                  <option>Choose number of types of Neurons</option>
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
      <div class="form-group row">
         <div class="col-sm-2">
         </div>
         <label for="description" class="col-sm-2 col-form-label">Connectivity Matrix:</label>
         <div class="form-group row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-6">
               <label><input type="radio" name="optradio" value = '1'>   Generate randomly based on % of connections between Neurons</label>
            </div>
            <div class="col-sm-12" style="display: none" id="selection1">
               <div class="col-sm-4">
               </div>
               <div class="col-sm-6" style="margin-bottom: 10px; margin-top: 10px"> 
                  <span style="margin-right: 10px"> </b> Select the Neuron types: </b> </span>
                  <input class="single-checkbox" id="c1" type="checkbox" name="single-checkbox" value="A"> &nbsp A &nbsp &nbsp
                  <input class="single-checkbox" id="c2" type="checkbox" name="single-checkbox" value="B"> &nbsp B &nbsp &nbsp
                  <input class="single-checkbox" id="c3" type="checkbox" name="single-checkbox" value="C"> &nbsp C &nbsp &nbsp
                  <input class="single-checkbox" id="c4" type="checkbox" name="single-checkbox" value="D"> &nbsp D &nbsp &nbsp
                  <input class="single-checkbox" id="c5" type="checkbox" name="vehicle" value="E"> &nbsp E &nbsp &nbsp
               </div>
               <div class="col-sm-2">
               </div>
               <?php
                  include("externalDivs.php");
                  ?>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-6">
               <label><input value='2' type="radio" name="optradio" >   Upload Connectivity Matrix file</label>
            </div>
            <div class="form-group row" style="display: none" id="connectivity">
               <div class="col-sm-4">
               </div>
               <div class="col-sm-3">
                  <input type="file" name="ConnectivityMatrix" id="ConnectivityMatrix">
               </div>
               <div class="col-sm-5">
               </div>
            </div>
            <div class="col-sm-4">
            </div>
         </div>
      </div>
      <div class="form-group row">
         <div class="col-sm-2">
         </div>
         <label for="description" class="col-sm-2 col-form-label">Weight Matrix:</label>
         <div class="form-group row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-6">
               <label><input type="radio" name="optradio1" value = '3'>   Generate weights Randomly</label>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-6">
               <label><input value='4' type="radio" name="optradio1" >   Upload Weight Matrix file</label>
            </div>
            <div class="form-group row" style="display: none" id="weight">
               <div class="col-sm-4">
               </div>
               <div class="col-sm-3">
                  <input type="file" name="WeightMatrix" id="WeightMatrix">
               </div>
               <div class="col-sm-5">
               </div>
            </div>
            <div class="col-sm-4">
            </div>
         </div>
         </br>
      </div>
      <!-- </br> -->
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
      </br>
      </br>
   </form>
</div>
</body> 
</html>