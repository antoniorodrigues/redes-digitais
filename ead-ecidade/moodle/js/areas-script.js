var app = angular.module('AreasApp', []);


app.controller('AreasController', ['$scope', function ($scope) {
    $scope.tabs = areas;
    $scope.currentArea = $scope.tabs[0];
    $scope.currentTab = $scope.currentArea.url;

    $scope.onClickTab = function (tab) {
        $scope.currentTab = tab.url;
    	$scope.currentArea= tab;
    }
    
    $scope.isActiveTab = function(tabUrl) {
        return tabUrl == $scope.currentTab;
    }
}]);
