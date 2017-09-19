var myApp = angular.module('gooruDashboard',[]);

myApp.controller('gooruDashboardController', function($scope) {
  $scope.graphTitle = 'Total number of users per';
  $scope.graphPeriod = 'day';
  $scope.btnClassDay = "success";
  $scope.btnClassWeek = 'default';
  $scope.btnClassMonth = "default";

  ///--------function to load users data--------///
  $scope.loadUsersGraph = function(){
  	console.log("inside usersgraph function");
  	$scope.graphTitle = "Total number of users per";
  }
  
  ///-----------function to load new users data----------///
  $scope.loadNewUsersGraph = function(){
  	$scope.graphTitle = "Total number of new users per";
  };

  ///-------function to load events data---------------///
  $scope.loadEventsGraph = function(){
  	$scope.graphTitle = "Total number of events conducted per";
  };

  $scope.displayByDay = function(){
  	$scope.graphPeriod = "day";
  	$scope.btnClassDay = "success";
  	$scope.btnClassWeek = "default";
  	$scope.btnClassMonth = "default";
  };

  $scope.displayByWeek = function(){
  	$scope.graphPeriod = "week";
  	$scope.btnClassWeek = "success";
  	$scope.btnClassDay = "default";
  	$scope.btnClassMonth = "default";
  };

  $scope.displayByMonth = function(){
  	$scope.graphPeriod = "month";
  	$scope.btnClassMonth = "success";
  	$scope.btnClassDay = "default";
  	$scope.btnClassWeek = "default";
  };
});