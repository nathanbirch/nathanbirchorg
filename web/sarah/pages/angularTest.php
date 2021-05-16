<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<!DOCTYPE html>
    <html ng-app="myapp">
    <head lang="en">
    <meta charset="UTF-8">
    <title></title>
    </head>
    <body>
    <h1 ng-controller="HelloWorldCtrl">{{helloMessage}}</h1>
    
    <script src="angular.min.js"></script>
    <script type="text/javascript">
       angular.module('myapp', []).controller('HelloWorldCtrl', function($scope){
      $scope.helloMessage = "Hello Mohammad";
      });
    </script>
    </body>
    </html>