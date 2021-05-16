var viewGrowingUp = angular.module('view.growingUp', ['ui.router', 'ngSanitize']);

viewGrowingUp.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('growingUp', {
        url: '/growingUp',
        views: {
            'menu': {
                controller: 'MenuCtrl',
                templateUrl: 'common/menu.html'
            },
            'header': {
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'GrowingUpCtrl',
                templateUrl: 'growingUp/growingUp.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewGrowingUp.controller('GrowingUpCtrl',['$scope', '$location', '$rootScope', '$state', '$http', function ($scope, $location, $rootScope, $state, $http) {
    
    $rootScope.$on("CallingAgeUpdate", function(){
        $scope.loadSelectedAge();
    });
    $scope.checkForAge = function() {
        var ageID = $location.search().params;
        if(ageID) {
            $scope.loadSelectedAge(ageID);
        }
    }

    $scope.loadSelectedAge = function(index) {
        if (!index) {
            if ($location.search().params) {
                var index = $location.search().params;
            } else {
                var index = 0;
            }
        }
        $scope.selectedAge = $scope.ages[index - 1];
    }

    $scope.returnToAllAges = function() {
        $scope.selectedAge = null;
    }


    var init = function() {
       $scope.checkForAge();
    }
    init();
}]);