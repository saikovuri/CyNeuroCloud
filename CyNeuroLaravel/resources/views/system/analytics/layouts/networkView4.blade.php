<div id="networkPage4" ng-show="networkPage4">
<div class="container">
   <div class="row">

      <h3 class="margin-left"> Neuron Workflow Requirements</h3>
       <div class="row">
<div class="col-md-12">

<img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/nav2.png') }}"  alt= "nav2" width="40%" height="50px" >

</div>
</div>
   </div>
</br>
   </br>
 
 
<div class="row">
   <div class="col-md-12">
<div class="form-horizontal">
  <div class="form-group">
 <label class="control-label col-md-3" for="tool">Analysis Software tool:</label>

 <div class="col-md-8">
    
    <select name="toolselection" class="form-control">
       <option value="tool0">Select a tool</option>
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
</br>
</br>

   

   
<div class="container jumbotron padding-top-10 padding-bottom-5" style="width: 100%;" >
   <div class="col-md-11">
      <h5 style="font-weight: bold">Click on the arrow for Advanced Settings</h5>
   </div>
   <div class="col-md-1">
      <input type="image" id="arrow" name="arrowdown" src="{{ asset('jscss/custom/theme/img/CyNeuroUI/arrowdown.jpg') }}"  alt="down" value = '1' width="30" height="30">
   </div>

   <form>
   <div class="container jumbotron padding-top-10 padding-bottom-5" id="advanced" style="width: 100%; display: none;  " >
      </br>
      </br>
      <div class="col-md-12" >
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



   <div class="form-actions" style="display: block" id="button4">
         <input type="Submit" ng-click="changeView('networkView3')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
         <input type="Submit" ng-click="changeView('networkView5')" class="btn btn-primary pull-right" value="Next" >
      </div>
</br>
</br>
</br>

</form>

</div>