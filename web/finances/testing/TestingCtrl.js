financesApp.controller('TestingCtrl', function($scope) {

  $scope.submit = function(){
    $scope.myForm.$setPristine();
  }

}).directive('confirmOnExit', function() {
    return {
      link: function($scope, elem, attrs) {
        window.onbeforeunload = function(){
          if ($scope.myForm.$dirty) {
            return "You have unsaved changes, do you want to stay on the page?";
          }
        }
        $scope.$on('$stateChangeStart', function(event, next, current) {
          if ($scope.myForm.$dirty) {
            if(!confirm("You have unsaved changes, do you want to stay on the page?")) {
              event.preventDefault();
            }
          }
        });
      }
    };
});	