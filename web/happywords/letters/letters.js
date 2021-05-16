var viewLetters = angular.module('view.letters', ['ui.router', 'ngSanitize']);

viewLetters.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('letters', {
        url: '/letters',
        views: {
            'footer': {
                controller: 'AppCtrl',
                templateUrl: 'common/footer.html'
            },
            'header': {
                controller: 'LetterCtrl',
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'LetterCtrl',
                templateUrl: 'letters/letters.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewLetters.controller('LetterCtrl',['$scope', '$location', '$rootScope', '$state', '$http', '$timeout', '$window', function ($scope, $location, $rootScope, $state, $http, $timeout, $window) {


    $scope.back = function() {
        $scope.goodbyeAudio = new Audio($rootScope.selectedLanguageByeAudio);
        if ($rootScope.showSingleWord) {
            for (i=1; i < $scope.selectedWords.length; i++) {
                $scope.selectedWords[i] = addRandomLocationToImage($scope.selectedWords[i]);
            }
            $rootScope.showSingleWord = false;
        } else {
            $scope.goodbyeAudio.play();
            $scope.go('/home');
        }
    }    
    function loadLetter() {
      $scope.urlParams = $location.search();
        if($scope.urlParams.params) {
            // get letter
            $scope.selectedLetter = $scope.letters[$scope.urlParams.params - 1];
            // get audio for letter in correct language
            if ($rootScope.selectedLanguage === 'English') {
                $scope.selectedLetter.sel_name  = $scope.selectedLetter.eng_name;
                $scope.selectedLetter.selp_name = $scope.selectedLetter.eng_pronounce;
            } else if ($rootScope.selectedLanguage === 'Português') {
                $scope.selectedLetter.sel_name  = $scope.selectedLetter.por_name;
                $scope.selectedLetter.selp_name = $scope.selectedLetter.por_pronounce;
            } else if ($rootScope.selectedLanguage === 'Español') {
                $scope.selectedLetter.sel_name  = $scope.selectedLetter.esp_name;
                $scope.selectedLetter.selp_name = $scope.selectedLetter.esp_pronounce;
            } 
            

            // get page dimensions
            $scope.selectedLetter.x = getOffset( document.getElementById('primaryLetterImg') ).left;
            $scope.selectedLetter.y = getOffset( document.getElementById('primaryLetterImg') ).top;
            // get related words
            $scope.selectedWords = [];
            $scope.selectedWords.push($scope.selectedLetter);
            loadWords();
        } else {
            $scope.go('/home');
        }
    }
    function loadWords() {
        for (i in $scope.words) {
            if ($scope.words[i].sel_name.charAt(0).toLowerCase() == $scope.selectedLetter.name.toLowerCase()) {
                $scope.selectedWords.push(addRandomLocationToImage($scope.words[i]));
            }
        }
    }
    function addSelectedLanguage() {
        for (i in $scope.words) { // Set the correct language for each word.
            if ($rootScope.selectedLanguage == 'English') {
                $scope.words[i].sel_name  = $scope.words[i].Eng_name;
                $scope.words[i].sel_audio = $scope.words[i].Eng_audio;
            } else if ($rootScope.selectedLanguage == 'Português') {
                $scope.words[i].sel_name  = $scope.words[i].Por_name;
                $scope.words[i].sel_audio = $scope.words[i].Por_audio;
            } else if ($rootScope.selectedLanguage == 'Español') {
                $scope.words[i].sel_name  = $scope.words[i].Esp_name;
                $scope.words[i].sel_audio = $scope.words[i].Esp_audio;
            }
        }   
    }

    // Declare some variables for the random images
    var sizeToGoWith = 100; // for the images
    if ($window.innerWidth < 500) {
        sizeToGoWith = 80;
    } else if ($window.innerWidth > 1000 && $window.innerWidth < 1500) {
        sizeToGoWith = 125;
    } else if ($window.innerWidth > 1500) {
        sizeToGoWith = 150;
    }
    var imgWidth = imgHeight = winPadding = sizeToGoWith;


    var winHeight = $window.innerHeight - (2 * winPadding);
    var winWidth = $window.innerWidth - (2 * winPadding);

    function checkCollision(testImage) {
        return $scope.selectedWords.some(function(img) {
            if (img == testImage)
            return false;

            if (!img.x || !img.y) // Image has no position yet
            return false;

            var hasCollision =
            testImage.x < img.x + imgWidth &&
            testImage.x + imgWidth > img.x &&
            testImage.y < img.y + imgHeight &&
            testImage.y + imgHeight > img.y;

            // console.log('Testing', testImage, 'against', img, 'hasCollision', hasCollision);

            return hasCollision;
        });
    }
    function addRandomLocationToImage(image) {
        var numTries = 0;
        do {
            // todo IF y is less than 150ish, change it
          image.x = getRandomWidth();
          image.y = getRandomHeight();
          var suspectedheight = 175;
          if (image.y < suspectedheight) { // Keep it out of the letter image and top portion of page
            do {
              image.y = getRandomHeight();
            } while(image.y < suspectedheight);
          }
          numTries++; // Maybe there is not a viable position without collision...
          // if (numTries == 49) {

          // }
        } while(checkCollision(image) && numTries < 50);


        image.style = {
          right:  image.x   + 'px',
          top:    image.y   + 'px',
          width:  imgWidth  + 'px',
          height: imgHeight + 'px'
        };
        if (numTries == 50) {
            image.style = {
                width:"0px",
                height:"0px"
            }; 
            delete image.x;
            delete image.y;
        }
        console.log('name -- ' + image.Eng_name + '\nright -- ' + image.style.right + '\ntop -- ' + image.style.top);

        return image;
    }
    function getRandomHeight() {
        return Math.trunc(Math.random() * winHeight) + winPadding;
    }

    function getRandomWidth() {
        return Math.trunc(Math.random() * winWidth) + winPadding;
    }
    function removeWordStyle(word) {
        word.style = {};
        return word;
    }
    $scope.clickWord = function(word) {
        $scope.selectedSingleWord = word;
        $scope.selectedAudioSound = new Audio($scope.selectedSingleWord.sel_audio);
        $rootScope.showSingleWord = true; // for html view
    }
    $scope.playAudio = function() {
        $scope.selectedAudioSound.play();
        $scope.selectedAudioSound.currentTime=0;
    }
    $scope.letterAudioPlayCount = 0;
    $scope.playLetterAudio = function(){
        if(($scope.letterAudioPlayCount + 1) % 3 === 0) { // if the count is divisible by 3
            $scope.selectedLetterSound = new Audio($scope.selectedLetter.selp_name);
        } else {
            $scope.selectedLetterSound = new Audio($scope.selectedLetter.sel_name);
        }
        $scope.selectedLetterSound.play();
        $scope.letterAudioPlayCount++;
    }
    function getOffset(el) {
        var _x = 0;
        var _y = 0;
        while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
            _x += el.offsetLeft - el.scrollLeft;
            _y += el.offsetTop - el.scrollTop;
            el = el.offsetParent;
        }
        return { top: _y, left: _x };
    }



    var init = function() {
        addSelectedLanguage();
        $timeout(function() {
            loadLetter(); 
        }, 100); 
    }
    init();
}]);