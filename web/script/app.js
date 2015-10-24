/**
 * Created by philipp on 23.10.2015.
 */
var myApp = angular.module('myApp', []);

myApp.controller('myController', ['$scope', '$timeout', MyController]);

function MyController($scope, $timeout) {
    $scope.phone = "Nexus 5";

    $scope.counter = 0;
    $scope.onTimeout = function(){
        $scope.counter++;
        mytimeout = $timeout($scope.onTimeout, 1000);
    }
    var mytimeout = $timeout($scope.onTimeout, 1000);

    $scope.stop = function(){
        $timeout.cancel(mytimeout);
    }

    $scope.model = {name: "Nexus"};
}