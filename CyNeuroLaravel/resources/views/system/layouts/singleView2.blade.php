<div class="row" id="singlePage2" ng-show="singlePage2">
   <div class="container">
      <h2 align="margin-left"> Single Neuron Workflow Requirements</h2>
      <div class="row">
        <!--  <div class="col-md-12">
            <img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/nav1.png') }}"  alt= "nav1" width="40%" height="50px" >
         </div> -->
      </div>
      </br></br>
      
      
         <h2>  Choose the channels:  </h2> 
         <div class="form-group row col-m2-12" style="display: block; margin-top: 25px;">
            
            <div class = "col-md-4">
                  <input class="channel-checkbox" id="c1" type="checkbox" name="channel-checkbox" value="A"> &nbsp Sodium &nbsp &nbsp
            </div>
            <div class = "col-md-4">
                  <input class="channel-checkbox" id="c2" type="checkbox" name="channel-checkbox" value="B"> &nbsp Potassium &nbsp &nbsp
            </div>
            <div class = "col-md-4">
                  <input class="channel-checkbox" id="c3" type="checkbox" name="channel-checkbox" value="C"> &nbsp Calcium &nbsp &nbsp
            </div>                  
         </div>
      

      <div class="form-actions" style="display: block; margin-top: 65px;" id="button3">
         <br></br>
         <input type="Submit" ng-click="singlechangeView('singleView1')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
         <input type="Submit" ng-click="singlechangeView('singleView3')" class="btn btn-primary pull-right" value="Next" >
      </div>

      
   </div>
</div>