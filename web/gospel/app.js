var gospelApp = angular.module('gospelApp', [
    'myDirectives',
    'ui.bootstrap',
    'ui.router',
    'ngSanitize',
    'ngAnimate',
    'view.home',
    'view.famTalks',
    'view.topics',
    'view.search',
    'view.stories',
    'view.questions',
    'view.growingUp'
    // 'firebase'
    // 'modalService'
]);

gospelApp.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');
});

gospelApp.run(function($rootScope){
    $rootScope.$on('$stateChangeSuccess',function(){
        $("html, body").animate({ scrollTop: 0 }, 300);
        $rootScope.pageLoaded = true;
    });

});

gospelApp.controller('AppCtrl', ['$scope', '$rootScope', '$state', '$location', '$timeout', '$element', '$anchorScroll', '$sce', 'quotes', 'talks', 'familyTalks', 'topics', 'stories', 'people', 'questions', 'ages',
             function AppCtrl   ( $scope,   $rootScope,   $state,   $location,   $timeout,   $element,   $anchorScroll,   $sce,   quotes,   talks,   familyTalks,   topics,   stories,   people,   questions,   ages) {
    // $rootScope.$on('$viewContentLoaded', function(){ window.scrollTo(0, 0); });
    $scope.go = function(path, passedParams) {
        if (!angular.element('#wrapper').hasClass('toggled')) {
            angular.element("#menu-toggle").click();
            $scope.hamburger_cross();
        } else if(path === $location.path() && path == '/topics') { // If you're switching topics but staying on the topic page
            if (passedParams === ')' || passedParams === '' || !passedParams) {
                $state.reload();
            } else {
                $location.path(path).search({params: passedParams}); 
                $rootScope.$emit("CallingTopicUpdate", {});
            }
        } else if(path === $location.path() && path == '/search') { // If you're switching search strings but staying on the search page
            if (passedParams === ')' || passedParams === '' || !passedParams) {
                $state.reload();
            } else {
                $location.path(path).search({params: passedParams}); 
                $rootScope.$emit("SearchStringUpdate", {});
            }
        } else if(path === $location.path() && path == '/growingUp') { // If you're switching search strings but staying on the search page
            if (passedParams === ')' || passedParams === '' || !passedParams) {
                $state.reload();
            } else {
                $location.path(path).search({params: passedParams}); 
                $rootScope.$emit("CallingAgeUpdate", {});
            }
        } else {
            if (passedParams) {
                $location.path(path).search({params: passedParams});
            } else {
                $location.path(path);
            }
        }
    };
    // var getFireData = function(){
    //     var ref = new Firebase("https://gospel-2b431.firebaseio.com/data");
        
    //     // download the data into a local object
    //     var syncObject = $firebaseObject(ref);
        
    //     // synchronize the object with a three-way data binding
    //     // click on `index.html` above to see it used in the DOM!
    //     syncObject.$bindTo($scope, "data");
    // }
    // getFireData();
    $scope.search = function(searchString) {
        var LsearchString = searchString.toLowerCase();
        $scope.searchResults = [];


        for (q in $scope.quotes) { // Check quotes 
            $scope.createSearchMatch(1, searchString, LsearchString, q);
            $scope.quotes[q].title = $scope.quotes[q].who;
        }
        for (ft in $scope.familyTalks) { // Content of family talks found
            $scope.createSearchMatch(2, searchString, LsearchString, ft);
        }
        for (t in $scope.talks) { // Content of family talks found
            $scope.createSearchMatch(3, searchString, LsearchString, t);
        }
        for (to in $scope.topics) { // Content of topics found
            $scope.topics[to].what = $scope.topics[to].description;
            $scope.topics[to].title = $scope.topics[to].top;
            $scope.createSearchMatch(4, searchString, LsearchString, to);
        }
        $scope.go('/search', searchString);
    }
    $scope.createSearchMatch = function(selArray, searchString, LsearchString, i) {
        var amountBefore = 70;
        var amountAfter = 100;
        var desc  = '';

        if     (selArray == 1) { selArray = $scope.quotes;      var ti = 'q'}
        else if(selArray == 2) { selArray = $scope.familyTalks; var ti = 'ft'}
        else if(selArray == 3) { selArray = $scope.talks;       var ti = 't'}
        else if(selArray == 4) { selArray = $scope.topics;      var ti = 'to'}

        var Lwhat = selArray[i].what.toLowerCase();
        if (Lwhat.indexOf(LsearchString) > -1) { // Content of quotes found
            selArray[i].sResults     = '';
            selArray[i].sFullResults = '';

            var match = Lwhat.indexOf(LsearchString);
            // add content prior to match
            if (match > amountBefore) {
                desc += selArray[i].what.slice(match - amountBefore, match);
            } else {
                desc += selArray[i].what.substr(0, match);
            }
            var sResultsFull = angular.copy(selArray[i].what); // Create this copy for the full quote text
            // add content after match
            if (selArray[i].what.length - match > amountAfter) { 
                desc += selArray[i].what.slice(match, match + amountAfter);
            } else {
                desc += selArray[i].what.slice(match);
            }
            if (Lwhat.length - LsearchString.length > match - 1 && Lwhat.length - LsearchString.length < match + 2) {
                desc = "..." + desc;
            } else if (Lwhat.indexOf(LsearchString) == 0) {
                desc = desc + "...";
            } else {
                desc = "..." + desc + "...";
            }

            sResultsFull = sResultsFull.replace(searchString.toLowerCase(),"<b>" + LsearchString + "</b>");         // make the lowercase search string bold
            desc         = desc.replace(searchString.toLowerCase(),"<b>" + LsearchString + "</b>");                 // make the lowercase search string bold
            sResultsFull = sResultsFull.replace($scope.capitalizeFirstLetter(searchString),"<b>" + $scope.capitalizeFirstLetter(LsearchString) + "</b>");// make the first uppercase search string bold
            desc         = desc.replace($scope.capitalizeFirstLetter(searchString),"<b>" + $scope.capitalizeFirstLetter(LsearchString) + "</b>");        // make the first uppercase search string bold                       

            selArray[i].sResults = desc;
            selArray[i].sFullResults = sResultsFull;
            selArray[i].typeIdentifier = ti;
            $scope.searchResults.push(selArray[i]);
            $scope.$apply;
        }
    }
    $scope.capitalizeFirstLetter = function(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }   
    $scope.toggleFilter = function(item) {
      item.toggle = !item.toggle;
    };
    angular.element(document).ready(function () {

        $scope.trigger = $element.find('.hamburger');
        $scope.isClosed = false;

        $scope.trigger.click(function () {
            $scope.hamburger_cross();  
        });
        $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
        });
    });
    $scope.hamburger_cross = function() {
        if ($scope.isClosed == true) {          
            $scope.trigger.removeClass('is-open');
            $scope.trigger.addClass('is-closed');
            $scope.isClosed = false;
        } else {   
            $scope.trigger.removeClass('is-closed');
            $scope.trigger.addClass('is-open');
            $scope.isClosed = true;
        }
    }
    function getNumbers(stringNumbers) { // function will take string: '1,5,7-9' and turn it to array: [1,5,7,8,9]
        var nums = [];
        var entries = stringNumbers.split(',');
        var length = entries.length;
        //for variabes that don't, comma separated
        var i, entry, low, high, range;
        for (i = 0; i < length; i++) {
            entry = entries[i];
            //shortcut for testing a -1
            if (!~entry.indexOf('-')) {
                //absence of dash, must be a number
                //force to a number using +
                nums.push(+entry);
            } else {
                //presence of dash, must be range
                range = entry.split('-');

                //force to numbers
                low = +range[0];
                high = +range[1];

                //XOR swap, no need for an additional variable. still 3 steps though
                //http://en.wikipedia.org/wiki/XOR_swap_algorithm
                if(high < low){
                  low = low ^ high;
                  high = low ^ high;
                  low = low ^ high;
                }
                //push for every number starting from low
                while (low <= high) {
                    nums.push(low++);
                }
            }
        }
        return nums.sort(function (a, b) {
            return a - b;
        });
    }
    function shuffleArray(array) { // This will shuffle the order of elements in an array
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
    $scope.openFeedbackModal = function() {
        var modalOptions = {
            closeButtonText: 'Close',
            actionButtonText: 'Submit Feedback',
            headerText: 'Leave Feedback',
            bodyText: 'Is there anything that you would like to see in this application?'
        };
        dialogModalService.showModal({}, modalOptions).then(function (result) {
            // do something with feedback
            $scope.go('/home');
        });

    }, function(error){
        $logger.error('Error deleting all reviews from cache: ', error);
    };

    // Declaring variables
    $rootScope.pageLoaded = false;
    $scope.quotes         = quotes;
    $scope.people         = people;

    for (i in $scope.quotes) {   // change the who int in $quotes to the related person object  
        for (j in $scope.people) {
            if($scope.quotes[i].who == $scope.people[j].id) {
                $scope.quotes[i].who = $scope.people[j];
            }
        }
        if (!$scope.quotes[i].who.id) {
            var tempName              = $scope.quotes[i].who;
            $scope.quotes[i].who      = {};
            $scope.quotes[i].who.name = tempName;
        }
    }
    $scope.topics         = topics;
    $scope.talks          = talks;
    $scope.familyTalks    = familyTalks;
    $scope.stories        = stories;
    $scope.ages           = ages;
    for (i in $scope.ages) {
        $scope.ages[i].displayImage = $sce.trustAsResourceUrl($scope.ages[i].displayImage);
    }

    for (i in $scope.topics) { // get each related Quote from string of quotes and put them into an array
        if ($scope.topics[i].relatedQuotesStr) {
           $scope.topics[i].relatedQuotes = shuffleArray(getNumbers($scope.topics[i].relatedQuotesStr)); // shuffle the results too.
        } else {
            $scope.topics[i].relatedQuotes = [];
        }
    }


}]).filter('trustAsResourceUrl', ['$sce', function($sce) {
    return function(val) {
        return $sce.trustAsResourceUrl(val);
    };
}]).filter('highlight', function($sce) {
    return function(text, phrase) {
      if (phrase) text = text.replace(new RegExp('('+phrase+')', 'gi'),
        '<span class="highlighted">$1</span>')

      return $sce.trustAsHtml(text)
    }
});