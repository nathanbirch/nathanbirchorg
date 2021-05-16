blogAngularApp.controller('blogController',
	['$scope', '$location', '$window', 'DataService', '$resource', 'safeApply', '$routeParams', 'URLInterceptor', 'usSpinnerService', '$cookies', '$http', 'cfpLoadingBar', '$modal', '$rootScope',
function blogController($scope, $location, $window, DataService,
	$resource, safeApply, $routeParams, URLInterceptor, usSpinnerService, $cookies, $http, cfpLoadingBar, $modal, $rootScope) {



    //var init = function (Idle) {
    var init = function () {
        var corps = document.getElementsByTagName('body');
        corps[0].style.cursor = 'default';

    };

    init();

}]).directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });
                event.preventDefault();
            }
        });
    };
}).directive('onlyRealNumbers', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^0-9]/g, '');

                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render();
                    }
                    return transformedInput;
                }
                return undefined;
            }
            ngModelCtrl.$parsers.push(fromUser);
        }
    };
}).service('loadUserService', function ($resource) {
    return $resource("/api/login/", {}, {
        getData: { method: 'GET', params: {}, isArray: true }

    });
});