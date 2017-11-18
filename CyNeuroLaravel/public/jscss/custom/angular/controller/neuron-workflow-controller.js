system_app.controller('neuron-workflow-show', function($scope) {
  
  $scope.page1 = true;
  $scope.page2 = false;
  $scope.page3 = false;
  $scope.page4 = false;
  $scope.page5 = false;
  $scope.page6 = false;
  
  $scope.changeView = function(val){
    if(val == 'view1'){
      $scope.page1 = true;
      $scope.page2 = false;
      $scope.page3 = false;
      $scope.page4 = false;
      $scope.page5 = false;
      $scope.page6 = false;
      
    } else if (val == 'view2') {
     
      $scope.page1 = false;
      $scope.page2 = true;
      $scope.page3 = false;
      $scope.page4 = false;
      $scope.page5 = false;
      $scope.page6 = false;
      
    } else if (val == 'view3') {
      $scope.page1 = false;
      $scope.page2 = false;
      $scope.page3 = true;
      $scope.page4 = false;
      $scope.page5 = false;
      $scope.page6 = false;
      
    }
    else if (val == 'view4') {
      $scope.page1 = false;
      $scope.page2 = false;
      $scope.page3 = false;
      $scope.page4 = true;
      $scope.page5 = false;
      $scope.page6 = false;
      
    }
    else if (val == 'view5') {
      $scope.page1 = false;
      $scope.page2 = false;
      $scope.page3 = false;
      $scope.page4 = false;
      $scope.page5 = true;
      $scope.page6 = false;
      
    }

    else if (val == 'view6') {
      $scope.page1 = false;
      $scope.page2 = false;
      $scope.page3 = false;
      $scope.page4 = false;
      $scope.page5 = false;
      $scope.page6 = true;
      
    }
    
  }
  

});



