var gospelDirectives = angular.module('myDirectives', ['ui.bootstrap','ngSanitize']);

gospelDirectives.directive('onlyNumbers', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^0-9.]/g, '');

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
}).directive('onlyLetters', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^a-zA-Z ]/g, '');

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
}).directive('ngEnter', function () {
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
}).directive('pdfViewer', function () {
    return  {
        restrict: 'E',
        scope: {
          datasource: '='
        },
        template:   '<div class="embed-responsive" style="padding-bottom:150%; height:500px">' +
                        '<object data="{{datasource | trustAsResourceUrl}}" type="application/pdf" width="100%"></object>' +
                    '</div>',
        link: function(scope, element, attrs){
          // console.log('test - zzzzzz -- ', scope.datasource)
        }
    };
}).directive('singleQuote', function () {
    return  {
        restrict: 'E',
        scope: {
          quote: '=quote',
          page: '=',
        },
        link: function(scope, element, attrs){
            if(scope.quote.sResults && scope.page == 'search') {
                scope.quoteDisplay     = scope.quote.sResults;
                scope.quoteDisplayFull = scope.quote.sFullResults;
            } else {
                scope.quoteDisplay     = scope.quote.what;
                scope.quoteDisplayFull = scope.quote.what;
            }
            scope.toggleFilter = function (item) {
                item.toggle = !item.toggle;
            }
        },
        // ng-animate classes found here: http://theoinglis.github.io/ngAnimate.css/#/
        template:   '<a href="" ng-click="toggleFilter(quote)" style="text-decoration:none">' +
                        '<span class="bFontz">{{quote.who.name}}</span>' +
                        '<img ng-show="quote.toggle" src="constants/img/i-down3.png" class="img1" />' +
                        '<img ng-hide="quote.toggle" src="constants/img/i-down3r.png" class="img1" />' +
                    '</a><br>' +
                    '<span ng-hide="quote.toggle" class="nga-default nga-stagger nga-squash-vertical">'+
                        '<span data-ng-bind-html="quoteDisplay | limitTo: 100"></span>'+
                        '<span ng-show="quote.what.length > 100">...</span>'+
                    '</span>' +
                    '<div ng-show="quote.toggle" class="nga-default nga-stagger nga-squash-vertical">'+
                        '<span ng-if="quote.who.img"><img src="{{quote.who.img}}" style="float:left; width:33%; max-width:150px; margin-right:15px; margin-bottom:5px" /></span>' +
                        '<span data-ng-click="toggleFilter(quote)" data-ng-bind-html="quoteDisplayFull" ></span>' +
                        '<p style="color:green; font-size:70%">{{quote.where}} <span ng-if="quote.when"> - {{quote.when}}</span></p>'+
                    '</div>'
    };
}).directive('singleTalk', function () {
    return  {
        restrict: 'E',
        scope: {
          talk: '=',
          page: '=',
        },
        link: function(scope, element, attrs){
            if(scope.page == 'search') {
                scope.talkDisplay = scope.talk.sResults;
            } else {
                scope.talkDisplay = '';
            }
            if(scope.talk.typeIdentifier == 'ft') {
                scope.talkUrl = 'http://gospel.nathanbirch.org';
            } else {
                scope.talkUrl = scope.talk.url;
            }
        },
        template:   '<a ng-href="{{talk.url}}" target="_blank">' + 
                        '<span class="bFontz" ng-bind="talk.title"></span><br>' +
                        '<span style="font-size:80%;">' +
                            '<span ng-bind="talk.who"></span>' +
                            '<span ng-show="talk.when"> - {{talk.when}}</span>' +
                        '</span><br>'+
                        '<p style="color:green; font-size:70%; max-width:90%">' +
                            '<span ng-bind="talkUrl | limitTo: 50"></span><span ng-if="talk.url.length > 50">...</span>' +
                        '</p>' +
                    '</a>' +
                    '<span data-ng-bind-html="talkDisplay"></span>'
    };
}).directive('familyTalk', ['$location', function ($location) {
    return  {
        restrict: 'E',
        scope: {
          talk: '=',
          page: '=',
        },
        link: function(scope, element, attrs){
            if(scope.page == 'search') {
                scope.talkDisplay = scope.talk.sResults;
            } else {
                scope.talkDisplay = '';
            }
            if(scope.talk.typeIdentifier == 'ft') {
                scope.talkUrl = 'http://gospel.nathanbirch.org';
            } else {
                scope.talkUrl = scope.talk.url;
            }
            scope.go2 = function (path, passedParams) {
                $location.path(path).search({params: passedParams});
            }
        },
        template:   '<a href="" ng-click="go2(\'/famTalks\', talk.id)">' +
                        '<span class="bFontz" ng-bind="talk.title"></span><br>' +
                        '<span style="font-size:80%;">' +
                            '<span ng-bind="talk.who"></span>' +
                            '<span ng-show="talk.when"> - {{talk.when}}</span>' +
                        '</span><br>'+
                        '<p style="color:green; font-size:70%; max-width:90%"><span>http://gospel.nathanbirch.org</span></p>' +
                    '</a>'+
                    '<span data-ng-bind-html="talkDisplay"></span>' 
    };
}]).directive('singleTopic', function () {
    return  {
        restrict: 'E',
        scope: {
          topic: '=',
          page: '=',
          newGo: '&'
        },
        link: function(scope, element, attrs){
            if (scope.page == 'search') { 
                scope.showTopicStuff = true; 
            } else { 
                scope.showTopicStuff = false; 
            }
        },
        template:   '<a href="" ng-click="newGo(\'/topics\', topic.id)">' +
                        '<span style="font-size:150%">{{topic.top}}</span>' +
                        '<p ng-show="showTopicStuff" style="color:green">Topics</p>' +
                    '</a>' +
                    '<span ng-show="showTopicStuff" data-ng-bind-html="topic.sResults"></span>'
    };
}).directive("divAnimate",function(){
  
  return {
    
    link : function(scope,ele,attr){
      
      ele.bind('click',function(){
        
         $(this).parent().fadeOut()
      })
      
    }
  }
});