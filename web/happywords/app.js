var wordsApp = angular.module('wordsApp', [
    'myDirectives',
    'ui.bootstrap',
    'ui.router',
    'ngSanitize',
    'ngAnimate',
    'ngRoute',
    'view.home',
    'view.letters',
]);

wordsApp.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');
});

wordsApp.run(function($rootScope){
    $rootScope.selectedLanguage         = localStorage['languageSetting'] || 'Português'; // Get language setting from cache
    $rootScope.selectedLanguageByeAudio = localStorage['languageByeAudio'] || 'bye_por.mp3'; // Get language setting from cache
});

wordsApp.controller('AppCtrl', ['$scope', '$rootScope', '$state', '$route', '$location', '$anchorScroll', 'letters', 'words', '$timeout', 
         function    AppCtrl   ( $scope,   $rootScope,   $state,   $route,   $location,   $anchorScroll,   letters,   words,   $timeout) {
    $scope.go = function(path, passedParams) {
        if (passedParams) {
            $location.path(path).search({params: passedParams});
        } else {
            $location.path(path);
        }
    };
    $scope.clickLetter = function(path, passedParams) {
        
        // $timeout(function() {
            $scope.go(path, passedParams);
        // }, 60);
    }
    $scope.selectLanguage = function(index) {
        if(index >= 0) {
            $rootScope.selectedLanguage = $scope.languages[index];
            localStorage['languageSetting'] = $scope.languages[index]; // Set to Cache

            if ($rootScope.selectedLanguage == 'English') {
                localStorage['languageByeAudio'] = 'bye1.wav';
            } else if ($rootScope.selectedLanguage == 'Português') {
                localStorage['languageByeAudio'] = 'bye_por.mp3';
            } else if ($rootScope.selectedLanguage == 'Español') {
                localStorage['languageByeAudio'] = 'adios1.wav';
            } else {
                localStorage['languageByeAudio'] = 'bye1.wav'; // set a default if by chance no language is set
            }
            $rootScope.selectedLanguageByeAudio = localStorage['languageByeAudio'];
        } else {
            $rootScope.selectedLanguage = $scope.languages[1]; // default to Portuguese...cause it rocks
            localStorage['languageSetting'] = $scope.languages[1]; // Set to Cache
            localStorage['languageByeAudio'] = 'bye_por.mp3';
        }
    }

    function shuffle(array) {
      var currentIndex = array.length, temporaryValue, randomIndex;

      // While there remain elements to shuffle...
      while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
      }

      return array;
    }

    $scope.location = $location;
    // $scope.languages = ['English', 'Português', 'Español'];
    $scope.languages = ['English', 'Português'];


    $scope.letters = letters;
    $scope.words   = shuffle(words);
}]);