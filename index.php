<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="pt-br" />
    <title>AngularJS: Routes</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <style type="text/css">
        body, li {
            text-align: center;
            float: none !important;
        }

        li {
            display: inline-block !important;
        }
    </style>
</head>
<body>
    <h1>AngularJS: Routes</h1>

    <ul class="nav nav-tabs">
        <li ng-class="{active: activetab == '/ngRoute'}"><a href="/ngRoute/home">Home</a></li>
        <li ng-class="{active: activetab == '/ngRoute/sobre'}"><a href="/ngRoute/sobre">Sobre</a></li>
    </ul>

    <div ng-view></div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    <script src="/ngRoute/js/app.js"></script>
</body>
</html>