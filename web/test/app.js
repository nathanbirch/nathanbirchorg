var testApp = angular.module('testApp', [
    'myDirectives',
    'ui.bootstrap',
    'ui.router',
    'ui.ace',
]);

testApp.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/home');
    
    $stateProvider
        .state('testingForm', {
            url: '/testingForm',
            controller: 'TestingFormCtrl',
            templateUrl: 'testingForm/testingForm.html'
        })
        .state('home', {
            url: '/home',
            controller: 'HomeCtrl',
            templateUrl: 'home/home.html'
        })
        .state('editor', {
            url: '/editor',
            controller: 'EditorCtrl',
            templateUrl: 'editor/editor.html'
        })
        .state('editor.result', {
            url: '/result',
            controller: 'EditorCtrl',
            templateUrl: 'editor/editorResult.php'
        })
        .state('base64', {
            url: '/base64',
            controller: 'Base64Ctrl',
            templateUrl: 'base64/base64.html'
        })
        .state('birchbox', {
            url: '/birchbox',
            controller: 'BirchBoxCtrl',
            templateUrl: 'birchbox/birchbox.html'
        })
        .state('barcode', {
            url: '/barcode',
            controller: 'BarcodeCtrl',
            templateUrl: 'barcode/barcode.html'
        })
        .state('firebase', {
            url: '/firebase',
            controller: 'FirebaseCtrl',
            templateUrl: 'firebase/firebase.html'
        })
        .state('senha', {
            url: '/senha',
            controller: 'SenhaCtrl',
            templateUrl: 'senha/senha.html'
        });
});

testApp.controller('AppCtrl', ['$scope', '$rootScope', '$location', function AppCtrl($scope, $rootScope, $location) {

}]);