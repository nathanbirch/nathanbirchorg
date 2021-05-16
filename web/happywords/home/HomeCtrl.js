var viewHome = angular.module('view.home', ['ui.router', 'ngSanitize']);

viewHome.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('home', {
        url: '/home',
        views: {
            'footer': {
                controller: 'AppCtrl',
                templateUrl: 'common/footer.html'
            },
            'header': {
                controller: 'AppCtrl',
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'HomeCtrl',
                templateUrl: 'home/home.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewHome.controller('HomeCtrl',['$scope', function ($scope) {


    $scope.activEZ = false;

    

}]);