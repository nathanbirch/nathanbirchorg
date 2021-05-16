var viewQuestions = angular.module('view.questions', ['ui.router', 'ngSanitize']);

viewQuestions.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('questions', {
        url: '/questions',
        views: {
            'menu': {
                controller: 'MenuCtrl',
                templateUrl: 'common/menu.html'
            },
            'header': {
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'QuestionsCtrl',
                templateUrl: 'questions/questions.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewQuestions.controller('QuestionsCtrl',['$scope', '$location', '$rootScope', '$state', '$http', '$timeout', function ($scope, $location, $rootScope, $state, $http, $timeout) {

    $scope.testVar = 'hello there';
    
    var init = function() {

    }
    init();
}]);