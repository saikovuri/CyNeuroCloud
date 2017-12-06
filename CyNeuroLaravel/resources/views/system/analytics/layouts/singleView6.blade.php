   <div id="singlePage6" ng-show="singlePage6">

     <h3 align="margin-left" style="margin-top: 25px">Previous jobs</h3>

     <div class="row">
      <div class="col-md-12">

      </br>
   </br> 

   <table class="table">
      <thead >
        <tr> 
           <th>ID</th>
           <th>Job Name</th>
           <th>Usecase Name</th>
           <th>Step name</th>
           <th>Option name</th>
           <th>Created at</th>
           <th></th>
        </tr>
     </thead>
        <tr ng-repeat="row in jobs">
            
            <td>@{{row.id}}</td>
           <td>@{{row.job_name}}</td>
           <td>@{{row.usecase_name}}</td>
           <td>@{{row.step_name}}</td>
           <td>@{{row.step_option_name}}</td>
           <td>@{{row.created_at}}</td>
           <td> <input type="Submit" ng-click="select_job_parameters(1)" class="btn btn-primary" value="Select" > </td>
            
    </table>
 


   <div class="form-actions" ng-show="show_run_button" ng-model="show_run_button" id="button3" style="margin-top: 100px">

      <input  type="Submit" ng-click="singlechangeView('firstPage')" class="btn btn-primary pull-left" value="Back" >
   </div>


   
   </div>
   </div>


   </div>
