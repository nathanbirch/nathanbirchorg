var viewFamTalks = angular.module('view.famTalks', ['ui.router', 'ngSanitize']);

viewFamTalks.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('famTalks', {
        url: '/famTalks',
        views: {
            'menu': {
                controller: 'MenuCtrl',
                templateUrl: 'common/menu.html'
            },
            'header': {
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'FamTalksCtrl',
                templateUrl: 'famTalks/famTalks.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewFamTalks.controller('FamTalksCtrl',['$scope', '$location', '$rootScope', '$http', function ($scope, $location, $rootScope, $http) {

    $scope.checkForTalk = function() {
        var talkID = $location.search().params;
        if(talkID) {
            $scope.loadSelectedTalk(talkID);
        }
    }

    $scope.loadSelectedTalk = function(index) {
        $scope.selectedFamilyTalk = $scope.familyTalks[index-1];
    }

    $scope.returnToAllTalks = function() {
        $scope.selectedFamilyTalk = null;
    }


    var init = function() {
       $scope.checkForTalk();
    }
    init();
}]);	