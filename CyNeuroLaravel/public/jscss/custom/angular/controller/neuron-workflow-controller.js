system_app.controller('neuron-workflow-show', function($scope, $http) {






    $scope.run_func = function() {

        var input_name = document.getElementById("abcd").value;
        var input_name1 = document.getElementById("efgh").value;
        var input_name2 = document.getElementById("somaLength").value;
        var get_params = {
            name : input_name,
            name1 : input_name1
           
        };

        console.log(input_name2);
       
        $http({
        method:'get',
        url:php_upload_input_test,
        params:get_params
        
    }).then(function success(response, status, headers, config){

        // $scope.tool = response.arr1;
        // console.log($scope.tool["name1"]);
        

    }, function error(response, status, headers, config){
    });


    };

  
  $scope.firstPage = true;
  $scope.networkPage2 = false;
  $scope.networkPage3 = false;
  $scope.networkPage4 = false;
  $scope.networkPage5 = false;
  $scope.networkPage6 = false;
  
  $scope.changeView = function(val){
    if(val == 'firstPage'){
      $scope.firstPage = true;
      $scope.networkPage2 = false;
      $scope.networkPage3 = false;
      $scope.networkPage4 = false;
      $scope.networkPage5 = false;
      $scope.networkPage6 = false;
      
    } else if (val == 'networkView2') {
     
      $scope.firstPage = false;
      $scope.networkPage2 = true;
      $scope.networkPage3 = false;
      $scope.networkPage4 = false;
      $scope.networkPage5 = false;
      $scope.networkPage6 = false;
      
    } else if (val == 'networkView3') {
      $scope.firstPage = false;
      $scope.networkPage2 = false;
      $scope.networkPage3 = true;
      $scope.networkPage4 = false;
      $scope.networkPage5 = false;
      $scope.networkPage6 = false;
      
    }
    else if (val == 'networkView4') {
      $scope.firstPage = false;
      $scope.networkPage2 = false;
      $scope.networkPage3 = false;
      $scope.networkPage4 = true;
      $scope.networkPage5 = false;
      $scope.networkPage6 = false;
      
    }
    else if (val == 'networkView5') {
      $scope.firstPage = false;
      $scope.networkPage2 = false;
      $scope.networkPage3 = false;
      $scope.networkPage4 = false;
      $scope.networkPage5 = true;
      $scope.networkPage6 = false;
      
    }

    else if (val == 'networkView6') {
      $scope.firstPage = false;
      $scope.networkPage2 = false;
      $scope.networkPage3 = false;
      $scope.networkPage4 = false;
      $scope.networkPage5 = false;
      $scope.networkPage6 = true;
      
    }
    
  }


  
  $scope.singlePage1 = false;
  $scope.singlePage2 = false;
  $scope.singlePage3 = false;
  $scope.singlePage4 = false;
  

  $scope.singlechangeView = function(val){
    if(val == 'firstPage'){
      $scope.firstPage = true;
      $scope.singlePage1 = false;
      $scope.singlePage2 = false;
      $scope.singlePage3 = false;
      $scope.singlePage4 = false;
     
      
    } else if (val == 'singleView1') {
     
      $scope.firstPage = false;
      $scope.singlePage1 = true;
      $scope.singlePage2 = false;
      $scope.singlePage3 = false;
      $scope.singlePage4 = false;
      
    } else if (val == 'singleView2') {
      $scope.firstPage = false;
      $scope.singlePage1 = false;
      $scope.singlePage2 = true;
      $scope.singlePage3 = false;
      $scope.singlePage4 = false;
      
      
    }
    else if (val == 'singleView3') {
      $scope.firstPage = false;
      $scope.singlePage1 = false;
      $scope.singlePage2 = false;
      $scope.singlePage3 = true;
      $scope.singlePage4 = false;
      
      
    }
    else if (val == 'singleView4') {
      $scope.firstPage = false;
      $scope.singlePage1 = false;
      $scope.singlePage2 = false;
      $scope.singlePage3 = false;
      $scope.singlePage4 = true;
      
      
    }

   
    
  }

  
  

});



