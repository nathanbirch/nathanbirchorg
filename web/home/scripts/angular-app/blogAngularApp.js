var blogAngularApp =
    angular.module('blogAngularApp',
    ['ui.router', 'ngRoute', 'ui.bootstrap', 'ngMessages', 'ngResource', 'ngCookies', 'angularSpinner', 'ngSanitize', 'angularSpinner', 'ngAnimate', 'ngGrid', 'chieffancypants.loadingBar', 'ui.sortable', 'CustomFilter', 'ngIdle']);


blogAngularApp.factory('AuthHttpResponseInterceptor', AuthHttpResponseInterceptor);

blogAngularApp.config(['$routeProvider', '$locationProvider',  '$httpProvider', '$stateProvider', 'cfpLoadingBarProvider', 'IdleProvider', 'KeepaliveProvider', 
function ($routeProvider, $locationProvider, $httpProvider, $stateProvider, cfpLoadingBarProvider, IdleProvider, KeepaliveProvider) {

    IdleProvider.idle(900); 
    IdleProvider.timeout(60);
    KeepaliveProvider.interval(600); 
    KeepaliveProvider.http('/api/heartbeat'); 

    cfpLoadingBarProvider.includeSpinner = false;
    cfpLoadingBarProvider.includeBar = true;

    $routeProvider.when('/profile/workexperience/churchempl/add',  { templateUrl: '/Pages/employeeworkexperienceprofilechurchempladd.html',  controller: 'WorkExperienceProfileController' });
    $routeProvider.when('/profile/workexperience/churchempl/edit', { templateUrl: '/Pages/employeeworkexperienceprofilechurchempledit.html', controller: 'WorkExperienceProfileController' });
    $routeProvider.when('/profile/workexperience/empl/add',        { templateUrl: '/Pages/employeeworkexperienceprofileempladd.html',        controller: 'WorkExperienceProfileController' });
    $routeProvider.when('/profile/workexperience/empl/edit',       { templateUrl: '/Pages/employeeworkexperienceprofileempledit.html',       controller: 'WorkExperienceProfileController' });

    $routeProvider.when('/', { templateUrl: '/Pages/home.html', controller: 'HomeController' });

    $routeProvider.otherwise({ templateUrl: '/Pages/home.html', controller: 'HomeController' });

    // This is `false` by default
    $locationProvider.html5Mode({
        enabled: false,
        requireBase: false
    });

    
    $httpProvider.interceptors.push('AuthHttpResponseInterceptor');

}]).service('URLInterceptor', function ($q, $http, $rootScope, $location, $modal) {
    $rootScope.$on('$routeChangeStart', function (e, next, current) {
    });
})
