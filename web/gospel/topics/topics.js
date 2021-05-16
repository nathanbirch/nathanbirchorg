var viewTopics = angular.module('view.topics', ['ui.router', 'ngSanitize']);

viewTopics.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('topics', {
        url: '/topics',
        views: {
            'menu': {
                controller: 'MenuCtrl',
                templateUrl: 'common/menu.html'
            },
            'header': {
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'TopicsCtrl',
                templateUrl: 'topics/topics.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewTopics.controller('TopicsCtrl',['$scope', '$location', '$rootScope', '$state', '$http', function ($scope, $location, $rootScope, $state, $http) {
    $rootScope.$on("CallingTopicUpdate", function(){
        $scope.loadTopicView();
    });
    $scope.loadTopicView = function() {
        this.urlParams = $location.search();
        if(!this.urlParams.params) { // If params have been passed, find the matching topic
            $scope.selectedTopic = $scope.topics[0]; // If no params have been passed, load default view without a topic
        } else {
            $scope.selectedTopic = $scope.topics[this.urlParams.params];
            // $scope.selectedTopic.url = "topics/topicPages/" + $scope.selectedTopic.url + '.html';
            if (!$scope.selectedTopic) {
                $scope.selectedTopic = $scope.topics[0];    
            }
        }
        $scope.createModules();
    }
    $scope.createModules = function() {
        $scope.createQuotesHTML();
        $scope.createTalksHTML();
        $scope.createTopicsHTML();
    }
    $scope.createQuotesHTML = function() {
        $scope.quotesHTML = []
        for (i = 0; i < $scope.selectedTopic.relatedQuotes.length; i++) {
            for (j = 0; j < $scope.quotes.length; j++) {
                if ($scope.selectedTopic.relatedQuotes[i] == $scope.quotes[j].id) {
                    // starting at line 50 testing with person objects instead of strings
                    if (typeof $scope.quotes[j].who === 'number') {
                        $scope.quotes[j].who = $scope.people[$scope.quotes[j].who];
                    } else if (typeof $scope.quotes[j].who === 'string') {
                        var tempName = $scope.quotes[j].who;
                        $scope.quotes[j].who = {name:tempName};
                    }
                    this.quote = $scope.quotes[j];
                }
            }
            $scope.quotesHTML.push(this.quote);
        }
        $scope.$apply;
    }
    $scope.createTalksHTML = function() {
        $scope.talksHTML = []
        for (i = 0; i < $scope.selectedTopic.relatedTalks.length; i++) {
            for (j = 0; j < $scope.talks.length; j++) {
                if ($scope.selectedTopic.relatedTalks[i] == $scope.talks[j].id) {
                    this.talk = $scope.talks[j];
                }
            }
            $scope.talksHTML.push(this.talk);
        }
        $scope.$apply;
    }
    $scope.createTopicsHTML = function() {
        $scope.topicsHTML = []
        for (i = 0; i < $scope.selectedTopic.relatedTopics.length; i++) {
            for (j = 0; j < $scope.topics.length; j++) {
                if ($scope.selectedTopic.relatedTopics[i] == $scope.topics[j].id) {
                    this.topic = $scope.topics[j];
                }
            }
            $scope.topicsHTML.push(this.topic);
        }
        $scope.$apply;
    }




    $scope.toggleObject = {item: -1};
    $scope.isSelected = [];
    $scope.toggleClass = function(id) {
        $scope.isSelected[id] = !$scope.isSelected[id];
    }



    var init = function() {
        $scope.loadTopicView();  
    }
    init();
}]);