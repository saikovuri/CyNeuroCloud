<div id="networkPage5" ng-show="networkPage5">

<div class="container">
   <h3 class="margin-left">Neuron Network Simulation Workflow</h3>
    <div class="row">
<div class="col-md-12">

<img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/nav3.png') }}"  alt= "nav3" width="40%" height="50px" >

</div>
</div>
</div>
</br>
</br>

<div class="container">
  
   <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
         <div class="table-responsive">
            <table class="table table-stripped">
               <thead>
                  <tr>
                     <th>Select</th>
                     <th>Graph Type</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td><input type="checkbox"/></td>
                     <td>
                        <h5>Spike Raster:</h5>
                        <span>Display the spike raster at a particular time in the simulation to get an idea of the network activity.</span>
                     </td>
                     <td>
                        <img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/spike_raster.png') }}"  class="img-thumbnail" alt="Spike Raster" height="200px" width="250px">
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox"/></td>
                     <td>
                        <h5>Autocorrelogram:</h5>
                        <span>Investigate the effects of a stimulus by viewing a histogram around the time of the stimulus.</span>
                     </td>
                     <td>
                        <img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/autocorrelogram.png') }}" class="img-thumbnail" alt="Autocorrelogram" height="200px" width="250px">
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox"/></td>
                     <td>
                        <h5>Perievent Time Histogram:</h5>
                        <span>Oscillatory behavior can be visualized using this feature. Investigate the presence and power of oscillations in the network model.</span>
                     </td>
                     <td>
                        <img src="{{ asset('jscss/custom/theme/img/CyNeuroUI/histogram.png') }}"  class="img-thumbnail" alt="Histogram" height="200px" width="250px">
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <div class="col-md-2">
      </div>
   </div>

</div>
</br>


<div class="form-actions" style="display: block" id="button5">
         <input type="Submit" ng-click="changeView('networkView4')" class="btn btn-primary pull-left" value="Back" >&nbsp  &nbsp
         <input type="Submit" ng-click="changeView('networkView6')" class="btn btn-primary pull-right" value="Next" >
      </div>
</br></br>




</div>