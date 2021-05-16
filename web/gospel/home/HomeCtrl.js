var viewHome = angular.module('view.home', ['ui.router', 'ngSanitize']);

viewHome.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('home', {
        url: '/home',
        views: {
            'menu': {
                controller: 'MenuCtrl',
                templateUrl: 'common/menu.html'
            },
            'header': {
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

viewHome.controller('HomeCtrl',['$scope', '$location', '$rootScope', function ($scope, $location, $rootScope) {


    $scope.testingVariable = 'Angular is a go, sir!';


    $scope.selectInspiration = function() {
      this.spotlightArray = [];
      for (i = 0; i < $scope.quotes.length; i++) {
        if($scope.quotes[i].spotlight) {
            this.spotlightArray.push($scope.quotes[i]);
        }
      }
      $scope.inspirationSelected = this.spotlightArray[Math.floor(Math.random() * this.spotlightArray.length)];
      for (i in $scope.people) {
        if($scope.people[i].id == $scope.inspirationSelected.who) {
            $scope.inspirationSelected.who = $scope.people[i];
        }
      }
    }
    Date.prototype.getWeek = function() { 

      // Create a copy of this date object  
      var target  = new Date(this.valueOf());  

      // ISO week date weeks start on monday, so correct the day number  
      var dayNr   = (this.getDay() + 6) % 7;  

      // Set the target to the thursday of this week so the  
      // target date is in the right year  
      target.setDate(target.getDate() - dayNr + 3);  

      // ISO 8601 states that week 1 is the week with january 4th in it  
      var jan4    = new Date(target.getFullYear(), 0, 4);  

      // Number of days between target date and january 4th  
      var dayDiff = (target - jan4) / 86400000;    

      if(new Date(target.getFullYear(), 0, 1).getDay() < 5) {
        // Calculate week number: Week 1 (january 4th) plus the    
        // number of weeks between target date and january 4th    
        return 1 + Math.ceil(dayDiff / 7);    
      }
      else {  // jan 4th is on the next week (so next week is week 1)
        return Math.ceil(dayDiff / 7); 
      }
    }; 
    function getWeeklyTopic() {
        var currentDate = new Date;
        var currentWeek = currentDate.getWeek();
        var topicID = 0;
        var talkID  = 1;
        switch(currentWeek) {
            case 1:  topicID = 2;   talkID = 1;  break;
            case 2:  topicID = 5;   talkID = 2;  break;
            case 3:  topicID = 6;   talkID = 3;  break;
            case 4:  topicID = 14;  talkID = 4;  break;
            case 5:  topicID = 25;  talkID = 5;  break;
            case 6:  topicID = 10;  talkID = 6;  break;
            case 7:  topicID = 24;  talkID = 7;  break;
            case 8:  topicID = 31;  talkID = 8;  break;
            case 9:  topicID = 32;  talkID = 9;  break;
            case 10: topicID = 38;  talkID = 10; break;
            case 11: topicID = 47;  talkID = 11; break;
            case 12: topicID = 18;  talkID = 12; break;
            case 13: topicID = 23;  talkID = 13; break;
            case 14: topicID = 35;  talkID = 1;  break;
            case 15: topicID = 52;  talkID = 2;  break;
            case 16: topicID = 12;  talkID = 3;  break;
            case 17: topicID = 33;  talkID = 4;  break;
            case 18: topicID = 61;  talkID = 5;  break;
            case 19: topicID = 71;  talkID = 6;  break;
            case 20: topicID = 46;  talkID = 7;  break;
            case 21: topicID = 40;  talkID = 8;  break;
            case 22: topicID = 51;  talkID = 9;  break;
            case 23: topicID = 78;  talkID = 10; break;
            case 24: topicID = 62;  talkID = 11; break;
            case 25: topicID = 7;   talkID = 12; break;
            case 26: topicID = 22;  talkID = 13; break;
            case 27: topicID = 34;  talkID = 1;  break;
            case 28: topicID = 74;  talkID = 2;  break;
            case 29: topicID = 42;  talkID = 3;  break;
            case 30: topicID = 39;  talkID = 4;  break;
            case 31: topicID = 80;  talkID = 5;  break;
            case 32: topicID = 11;  talkID = 6;  break;
            case 33: topicID = 27;  talkID = 7;  break;
            case 34: topicID = 53;  talkID = 8;  break;
            case 35: topicID = 64;  talkID = 9;  break;
            case 36: topicID = 73;  talkID = 10; break;
            case 37: topicID = 50;  talkID = 11; break;
            case 38: topicID = 72;  talkID = 12; break;
            case 39: topicID = 85;  talkID = 13; break;
            case 40: topicID = 9;   talkID = 1;  break;
            case 41: topicID = 20;  talkID = 2;  break;
            case 42: topicID = 92;  talkID = 3;  break;
            case 43: topicID = 86;  talkID = 4;  break;
            case 44: topicID = 79;  talkID = 5;  break;
            case 45: topicID = 28;  talkID = 6;  break;
            case 46: topicID = 95;  talkID = 7;  break;
            case 47: topicID = 41;  talkID = 8;  break;
            case 48: topicID = 96;  talkID = 9;  break;
            case 49: topicID = 97;  talkID = 10; break;
            case 50: topicID = 122; talkID = 11; break;
            case 51: topicID = 120; talkID = 12; break;
            case 52: topicID = 100; talkID = 13; break;
            case 53: topicID = 108; talkID = 1;  break;
            default: topicID = 1;
        }
        for (i in $scope.topics) {
            if($scope.topics[i].id == topicID) {
                $scope.weeklyTopic = $scope.topics[i];
            }
            if (i < $scope.talks.length) {
                if($scope.talks[i].id == talkID) {
                    $scope.weeklyTalk = $scope.talks[i];
                }
            }
        }
    }
    getWeeklyTopic();
    // $rootScope.sidebarOverlay = false;
    // $scope.hideLoading();
}]);