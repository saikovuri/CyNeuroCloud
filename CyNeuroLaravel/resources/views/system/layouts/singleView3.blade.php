<div class="row" id="singlePage3" ng-show="singlePage3">
   <div class="container">
      <h2 align="margin-left"> Neuron Workflow Requirements</h2>
      <div class="row">
         <div class="col-md-12">
            <img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/nav1.png') }}"  alt= "nav1" width="40%" height="50px" >
         </div>
      </div>
      </br></br>
      <form method="post" action="store" autocomplete="off">
      	 <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="description" class="col-md-2 col-form-label">Type of experiment:</label>
            <div class="col-md-10">
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-4">
            </div>
            <div class="col-md-6">
               <label><input type="radio" name="cur_inj_mod" value = '3'>   Current injection model</label>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-6">
               <label><input value='4' type="radio" name="syn_mod">   Synapse model</label>
            </div>
            <div class="col-md-2">
            </div>
            <div class="form-group row col-md-12" style="display: none" id="weight">
               <div class="col-md-4">
               </div>
               <div class="col-md-4">
                  <input type="file" name="WeightMatrix" id="WeightMatrix">
               </div>
               <div class="col-md-4">
               </div>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">a. Duration:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="duration" name="duration" value = '<?php echo isset($_SESSION['duration']) ? $_SESSION['duration'] : ''; ?>' />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Duration</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">b. Amplitude:</label>
            <div class="col-md-5">
               <input type="text" class="form-control" id="amplitude" name="amplitude" value = '<?php echo isset($_SESSION['amplitude']) ? $_SESSION['amplitude'] : ''; ?>' />
            </div>
            <div class="tooltip col-md-2" style="color: black">
               <span class="glyphicon glyphicon-question-sign"></span>
               <span class="tooltiptext">Amplitude</span>
            </div>
         </div>
         <div class="form-group row col-md-12">
            <div class="col-md-2">
            </div>
            <label for="jobname" class="col-md-2 col-form-label">c. Synaptic Drive:</label>
            <div class="col-md-10">
            	<div class="form-group row col-md-12">
            		<div class="col-md-4">
            		</div>
            		<label for="jobname" class="col-md-2 col-form-label">c1. Interval:</label>
            		<div class="col-md-4">
               			<input type="text" class="form-control" id="interval" name="interval" value = '<?php echo isset($_SESSION['interval']) ? $_SESSION['interval'] : ''; ?>' />
            		</div>
            		<div class="tooltip col-md-2" style="color: black">
               			<span class="glyphicon glyphicon-question-sign"></span>
               			<span class="tooltiptext">Interval</span>
            		</div>
         		</div>
         		<div class="form-group row col-md-12">
            		<div class="col-md-4">
            		</div>
            		<label for="jobname" class="col-md-2 col-form-label">c2. Weight:</label>
            		<div class="col-md-4">
               			<input type="text" class="form-control" id="weight" name="weight" value = '<?php echo isset($_SESSION['weight']) ? $_SESSION['weight'] : ''; ?>' />
            		</div>
            		<div class="tooltip col-md-2" style="color: black">
               			<span class="glyphicon glyphicon-question-sign"></span>
               			<span class="tooltiptext">Weight</span>
            		</div>
         		</div>
            </div>
         </div>

       </form>
       <div class="form-actions" style="display: block" id="button3">
         <br></br>
         <input type="Submit" ng-click="singlechangeView('singleView2')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
         <input type="Submit" ng-click="singlechangeView('singleView4')" class="btn btn-primary pull-right" value="Next" >
       </div>
    </div>
</div>