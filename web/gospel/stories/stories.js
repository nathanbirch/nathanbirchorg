var viewStories = angular.module('view.stories', ['ui.router', 'ngSanitize']);

viewStories.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('stories', {
        url: '/stories',
        views: {
            'menu': {
                controller: 'MenuCtrl',
                templateUrl: 'common/menu.html'
            },
            'header': {
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'StoriesCtrl',
                templateUrl: 'stories/stories.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewStories.controller('StoriesCtrl',['$scope', '$location', '$rootScope', '$state', '$http', function ($scope, $location, $rootScope, $state, $http) {

    $scope.loadSelectedstory = function(index) {
        $scope.selectedStory = $scope.stories[index-1];
    }
    $scope.returnToAllStories = function() {
        $scope.selectedStory = null;
    }    




    var init = function() {

    }
    init();
}]);