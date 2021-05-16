var financesApp = angular.module('financesApp', [
    'myDirectives',
    'ui.router'
]);

financesApp.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/home');
    
    $stateProvider
        .state('home', {
            url: '/home',
            templateUrl: 'homePageModules/partial-home.html'
        })
        .state('home.list', {
            url: '/list',
            controller: 'HomeListCtrl',
            templateUrl: 'homePageModules/partial-home-list.html'
        })
        .state('loan', {
            url: '/loan',
            controller: 'LoanCtrl',
            templateUrl: 'loan/loan.html'
        })
        .state('mortgage', {
            url: '/mortgage',
            controller: 'MortgageCtrl',
            templateUrl: 'mortgage/mortgage.html'
        })
        .state('planning', {
            url: '/planning',
            controller: 'PlanningCtrl',
            templateUrl: 'planning/planning.html'
        })
        .state('spending', {
            url: '/spending',
            controller: 'SpendingCtrl',
            templateUrl: 'spending/spending.html'
        })
        .state('home.paragraph', {
            url: '/paragraph',
            template: 'I could sure use a drink right now.'
        })
        .state('testing', {
            url: '/testing',
            controller: 'TestingCtrl',
            templateUrl: 'testing/testing.html'
        })
        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('about', {
            url: '/about',
            views: {
                // the main template will be placed here (relatively named)
                '': { templateUrl: 'partial-about.html' },
                // the child views will be defined here (absolutely named)
                'columnOne@about': { template: 'Look I am a column!' },
                // for column two, we'll define a separate controller 
                'columnTwo@about': { 
                    templateUrl: 'table-data.html',
                    controller: 'scotchController'
                }
            }
        });
});

financesApp.controller('AppCtrl', ['$scope', '$rootScope', '$location', function AppCtrl($scope, $rootScope, $location) {

}]).directive('autoActive', ['$location', function ($location) {
    return {
        restrict: 'A',
        scope: false,
        link: function (scope, element) {
            function setActive() {
                var path = $location.path();
                if (path) {
                    angular.forEach(element.find('li'), function (li) {
                        var anchor = li.querySelector('a');
                        if (anchor.href.match('#' + path + '(?=\\?|$)')) {
                            angular.element(li).addClass('navArrow');
                        } else {
                            angular.element(li).removeClass('navArrow');
                        }
                    });
                }
            }
            setActive();
            scope.$on('$locationChangeSuccess', setActive);
        }
    }
}]);