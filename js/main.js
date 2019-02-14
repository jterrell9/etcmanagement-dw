var myApp = angular.module('myApp', []);
myApp.controller('MyController', function MyController($scope) {
  $scope.username = {
    "name":"Jack Terrell",
    "username":"jterrell"
  }
  $scope.artist = {
    "name":"Frankie Sinn",
    "location":"Atlanta, GA",
    "soundcloud":"",
    "instagram":"",
    "bio":""
  }
});
