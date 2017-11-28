<div class="row" id="singlePage1" ng-show="singlePage1">
   <div class="container">
      <h2 align="margin-left"> Single Neuron Workflow Requirements</h2>
      <div class="row">
         <div class="col-md-12">
            <img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/nav1.png') }}"  alt= "nav1" width="40%" height="50px" >
         </div>
      </div>
      </br></br>
      <div class="col-md-12">
      <div style="background:transparent !important ; display: block" class=" jumbotron"  >
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5">
               <input type="image" name="image1" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/Neuron.jpg') }}" alt="Neuron" value = '2' width="250" height="150">
            </div>
            <div class="col-md-5">
               <input type="image" name="image1" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/fmri.jpg') }}" alt="FMRI" value = '1' width="250" height="150">
            </div>
            
         </div>
         <br></br>
         <div style="text-align:center">
               <p style="font-weight: bold !important" class = "text-center"> Click on the Geometry </p>
            </div>
      </div>
      </div>
      <form method="post" action="" autocomplete="off">
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Soma length and Diameter:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="somaLength" name="somaLength" value = '<?php echo isset($_SESSION['somaLength']) ? $_SESSION['somaLength'] : ''; ?>' />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Soma length and Diameter</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">Dendri length:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="dendriLength" name="dendriLength" value = '<?php echo isset($_SESSION['dendriLength']) ? $_SESSION['dendriLength'] : ''; ?>' />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Dendri length</span>
            </div>
         </div>
         </br>   

      </form>
      <div class="form-actions" style="display: block" id="button3">
            <input type="Submit" ng-click="singlechangeView('firstPage')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
            <input type="Submit" ng-click="singlechangeView('singleView2')" class="btn btn-primary pull-right" value="Next" >
      </div>
   </div>

</div>
      