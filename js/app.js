var app = angular.module('myApp',['ngRoute']);

app.config(function($routeProvider, $locationProvider)
{
   // remove o # da url
   $locationProvider.html5Mode(true);

   $routeProvider

   // para a rota '/', carregaremos o template home.html e o controller 'HomeCtrl'
   .when('/ngRoute', {
      templateUrl : '/ngRoute/views/home.html',
      controller     : 'HomeCtrl',
   })

   // para a rota '/sobre', carregaremos o template sobre.html e o controller 'SobreCtrl'
   .when('/ngRoute/sobre', {
      templateUrl : '/ngRoute/views/about.html',
      controller  : 'SobreCtrl',
   })

   // caso não seja nenhum desses, redirecione para a rota '/'
   .otherwise ({ redirectTo: '/ngRoute' });
});

app.controller('HomeCtrl', function($rootScope, $location)
{
   $rootScope.activetab = $location.path();
});

app.controller('SobreCtrl', function($rootScope, $location)
{
   $rootScope.activetab = $location.path();
});

// app.controller('ContatoCtrl', function($rootScope, $location)
// {
//    $rootScope.activetab = $location.path();
// });