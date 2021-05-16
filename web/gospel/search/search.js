var viewSearch = angular.module('view.search', ['ui.router', 'ngSanitize']);

viewSearch.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('search', {
        url: '/search',
        views: {
            'menu': {
                controller: 'MenuCtrl',
                templateUrl: 'common/menu.html'
            },
            'header': {
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'SearchCtrl',
                templateUrl: 'search/search.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewSearch.controller('SearchCtrl',['$scope', '$location', '$rootScope', function ($scope, $location, $rootScope) {

    $scope.loadSearchString = function() {
        $scope.searchString = $location.search().params;
    }

    $rootScope.$on("SearchStringUpdate", function(){
        $scope.loadSearchString();
    });

    // var init = function() {
        
    // }
    // init();
}]);