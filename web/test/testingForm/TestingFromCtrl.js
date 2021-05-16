testApp.controller('TestingFormCtrl', function($scope) {

  $scope.submit = function(){
    $scope.myForm.$setPristine();
  }
  $scope.showConsiderations = false;
  $scope.toggleConsiderations = function(){
    $scope.showConsiderations =  !$scope.showConsiderations;
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
}).directive('focusOn',function($timeout) {
    return {
        restrict : 'A',
        link : function($scope,$element,$attr) {
            $scope.$watch($attr.focusOn,function(_focusVal) {
                $timeout(function() {
                    _focusVal ? $element.focus() :
                        $element.blur();
                });
            });
        }
    }
});	