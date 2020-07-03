var app = angular.module("mainData", ["ngRoute"]); //to create route
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "main.html"
    })
    .when("/name", {
        templateUrl : "templates/name.html",
        controller  : "newController"
    })
    .when("/about", {
        templateUrl : "templates/about.html",
    })
   
    });

