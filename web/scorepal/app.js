var memoryApp = angular.module('memoryApp', [
    'myDirectives',
    'ui.bootstrap',
    'ui.router',
    'ngSanitize',
    'dndLists',
    'ngAnimate',
    'ngCordova',
    'ngRoute',
    'moment-picker',
    'ngStorage',
    'view.home',
    'view.item',
    'view.stats',
    'chart.js',
    'angular-carousel',
    'angular-sortable-view',
    'modal.settingsModal'
]);

memoryApp.config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');
});

memoryApp.run(function($rootScope){
});
memoryApp.controller('AppCtrl', ['$scope', '$rootScope', '$state', '$route', '$location', '$anchorScroll', '$timeout', '$localStorage', '$q', '$uibModal',
          function    AppCtrl   ( $scope,   $rootScope,   $state,   $route,   $location,   $anchorScroll,   $timeout,   $localStorage,   $q,   $uibModal) {
   
    $scope.go = function(path, passedParams) {
        if (passedParams) {
            if (passedParams === 'loadRecent') { 
                for (i in $rootScope.items) {
                    if ($rootScope.items[i].mostRecent == true) {
                        passedParams = $rootScope.items[i].itemId;
                    }
                }
            }
            if (typeof passedParams !== 'object') {
                passedParams = {itemId:passedParams};
            }
            $location.path(path).search(passedParams);
            if($location.path(path) == '/item' && path == '/stats') {
                $rootScope.theItemToComeBackTo = passedParams;
            } 
        } else {
            $location.path(path);
        }
    };
    $scope.getItems = function () {
        if ($localStorage.theItems) {
           $rootScope.items = $localStorage.theItems;
        } 
        else {
          $rootScope.items = [];
        }
        // get date object back in if needed
        for (i in $rootScope.items) { // add date object again if it auto converted to a string for each Occurrence
            for (j in $rootScope.items[i].Occurrences)
            if (typeof $rootScope.items[i].Occurrences[j].date === 'string') {
                var newDate = new Date($rootScope.items[i].Occurrences[j].date)
                $rootScope.items[i].Occurrences[j].date = newDate;
            } else {}
        }
    } 
    $scope.location = $location;
    $scope.back = function() {
        if ($scope.location.$$path == '/item') {
            if ($rootScope.showingSingleOccurrence) {
                $rootScope.showingSingleOccurrence = undefined;
            } else {
                $scope.go('/home');
            }
        } else if ($scope.location.$$path == '/stats') {
            $scope.go('/item', $rootScope.theItemToComeBackTo);
        }
    }    
    $scope.close = function(result) {
        close(result, 500); // close, but give 500ms for bootstrap to animate
    };
    $scope.updateLocalStorage = function(item) {
        if (item) {
            for (i in $rootScope.items) {
                if ($rootScope.items[i].itemId == item.itemId) {
                    $rootScope.items[i] = item;
                }
            }
        }
        $localStorage.theItems = $rootScope.items;
    }
    $scope.getTheme = function(specificTheme) {
        $scope.themes = ['mainGrad_0','mainGrad_1','mainGrad_2','mainGrad_3','mainGrad_4','mainGrad_5','mainGrad_6','mainGrad_7','mainGrad_8','mainGrad_9','mainGrad_10','mainGrad_11','mainGrad_12','mainGrad_13'];

        if(!$localStorage.theme) {
            $localStorage.theme = $scope.themes[11];
        }
        if (specificTheme) {
            return specificTheme;
        } else {
            return $localStorage.theme;
        }
    }
    $scope.changeTheme = function(theme, saveFlag) {
        if(theme){
            $rootScope.setTempTheme = theme;
        } else {
            $rootScope.setTempTheme = $localStorage.theme;
        }
        if(saveFlag) {
            for (i in $scope.themes) {
                if(theme == $scope.themes[i]) {
                    $localStorage.theme = $scope.themes[i];
                }
            }
        }
        $scope.getTheme();
    }
    $scope.setCurrentTime = function() {
        var now = new Date();
        // var tempTimeStuff = {date:now,
        //                      new:$scope.addTimeStamp(now)};
        // $scope.ctrl = {date:now,
        //                new:$scope.addTimeStamp(now),
        //                det:'',
        //                input: $scope.addTimeStamp(now)};
        return $scope.addTimeStamp(now)
    }
    $scope.getToday = function() {
        var now = $scope.setCurrentTime()
        return $scope.cut(now, now.length - 6, now.length - 4);
    }
    $scope.cut = function(str, cutStart, cutEnd){
      return str.substr(0,cutStart) + str.substr(cutEnd+1);
    }    
    // THEMES END
    $scope.addTimeStamp = function(now) {
        // Create an array with the current month, day and time
      var date = [ now.getMonth() + 1, now.getDate(), now.getFullYear() ];

        // Create an array with the current hour, minute and second
      var time = [ now.getHours(), now.getMinutes(), now.getSeconds() ];

        // Determine AM or PM suffix based on the hour
      var suffix = ( time[0] < 12 ) ? "AM" : "PM";

        // Convert hour from military time
      time[0] = ( time[0] < 12 ) ? time[0] : time[0] - 12;

        // If hour is 0, set it to 12
      time[0] = time[0] || 12;

        // If seconds and minutes are less than 10, add a zero
      for ( var i = 1; i < 3; i++ ) {
        if ( time[i] < 10 ) {
          time[i] = "0" + time[i];
        }
      }

        // Return the formatted string
      return date.join("/") + " " + time.join(":") + " " + suffix;
    }
    $scope.timeDifference = function(current, previous) {
        var msPerMinute = 60 * 1000;
        var msPerHour = msPerMinute * 60;
        var msPerDay = msPerHour * 24;
        var msPerMonth = msPerDay * 30;
        var msPerYear = msPerDay * 365;

        if (previous > current) { // if we are going to calculate a time for the difference of a date in the future...
            var elapsed = previous - current;
            if (elapsed < msPerMinute) {
                return 'in ' + Math.round(elapsed/1000) + ' seconds';   
            }
            
            else if (elapsed < msPerHour) {
                return 'in ' + Math.round(elapsed/msPerMinute) + ' minutes';   
            }
            
            else if (elapsed < msPerDay ) {
                return 'in ' + Math.round(elapsed/msPerHour ) + ' hours';   
            }

            else if (elapsed < msPerMonth) {
                return 'in approximately ' + Math.round(elapsed/msPerDay) + ' days';   
            }
            
            else if (elapsed < msPerYear) {
                return 'in approximately ' + Math.round(elapsed/msPerMonth) + ' months';   
            }
            
            else {
                return 'in approximately ' + Math.round(elapsed/msPerYear ) + ' years';   
            }     
            
        } else if (current > previous) {
            var elapsed = current - previous;
            if (elapsed < msPerMinute) {
                return Math.round(elapsed/1000) + ' seconds ago';   
            }
            
            else if (elapsed < msPerHour) {
                return Math.round(elapsed/msPerMinute) + ' minutes ago';   
            }
            
            else if (elapsed < msPerDay ) {
                return Math.round(elapsed/msPerHour ) + ' hours ago';   
            }

            else if (elapsed < msPerMonth) {
                return 'approximately ' + Math.round(elapsed/msPerDay) + ' days ago';   
            }
            
            else if (elapsed < msPerYear) {
                return 'approximately ' + Math.round(elapsed/msPerMonth) + ' months ago';   
            }
            
            else {
                return 'approximately ' + Math.round(elapsed/msPerYear ) + ' years ago';   
            }            
        }
    }    
    $scope.addTimeStampAndWeekday = function(myDate) {
        var weekday = new Array(7);
        weekday[0] =  "Sunday";
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";

        var prettyDate = $scope.addTimeStamp(myDate);
        var wd = weekday[myDate.getDay()];
        prettyDate = wd + ", " + prettyDate;
        return prettyDate;
    }
    $scope.makeSecondsPretty = function(secondsVar) {
        var msPerMinute = 60 * 1000;
        var msPerHour = msPerMinute * 60;
        var msPerDay = msPerHour * 24;
        var msPerMonth = msPerDay * 30;
        var msPerYear = msPerDay * 365;
        var returnValue = '';
        
        if (secondsVar < msPerMinute) {
            if (Math.round(secondsVar/1000) == 1) {
                return Math.round(secondsVar/1000) + ' second';   
            } else {
                return Math.round(secondsVar/1000) + ' seconds';   
            }
        } else if (secondsVar < msPerHour) {
            if (Math.round(secondsVar/msPerMinute) == 1) {
                return Math.round(secondsVar/msPerMinute) + ' minute';
            } else {
                return Math.round(secondsVar/msPerMinute) + ' minutes';
            }   
        } else if (secondsVar < msPerDay ) {
            if (Math.round(secondsVar/msPerHour) == 1) {
                return Math.round(secondsVar/msPerHour) + ' hour';   
            } else {
                return Math.round(secondsVar/msPerHour) + ' hours';
            }   
        } else if (secondsVar < msPerMonth) {
            if (Math.round(secondsVar/msPerDay) == 1) {
                return 'approximately ' + Math.round(secondsVar/msPerDay) + ' day';   
            } else {
                return 'approximately ' + Math.round(secondsVar/msPerDay) + ' days';   
            }
        } else if (secondsVar < msPerYear) {
            if (Math.round(secondsVar/msPerMonth) == 1) {
                return 'approximately ' + Math.round(secondsVar/msPerMonth) + ' month';
            }   else {
                return 'approximately ' + Math.round(secondsVar/msPerMonth) + ' months';
            }
        } else {
            if (Math.round(secondsVar/msPerYear) == 1) {
                return 'approximately ' + Math.round(secondsVar/msPerYear) + ' year';   
           } else {
                return 'approximately ' + Math.round(secondsVar/msPerYear) + ' years';   
           }
        }

    }
    $scope.arraySortDateDescending = function(myArray) {
        myArray.sort(function(a,b){
        return new Date(b.date).getTime() - new Date(a.date).getTime() 
        });
    } 
    $scope.safeApply = function(fn) {
      var phase = this.$root.$$phase;
      if(phase == '$apply' || phase == '$digest') {
        if(fn && (typeof(fn) === 'function')) {
          fn();
        }
      } else {
        this.$apply(fn);
      }
    };
    $scope.openSettingsModal = function() {
        var defer = $q.defer();
        var settingsInstance = $uibModal.open({
            templateUrl: 'common/modals/settings.html',
            controller: 'settingsModalCtrl',
            size: 'lg',
            backdrop: 'static',
            resolve: {
                themes: function () {
                    return $scope.themes;
                },
                getTheme: function () {
                    return $scope.getTheme;
                },
                changeTheme: function () {
                    return $scope.changeTheme;
                }
            }
        });
        settingsInstance.result.then(function (response) {
            $scope.changeTheme(response.theme, response.flag);
            $rootScope.items = response.items;
            $localStorage.theItems = $rootScope.items;
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };  
    $scope.toggleReOrderItems = function() {
        if($location.path(path) != '/home'){
            $scope.go('/home');
        } 
        $scope.reOrderItems = !$scope.reOrderItems;
        $scope.safeApply();
    }
    var init = function() {
        $scope.colorOptions = ['#FEB2B2','#FEB2E5','#F4B2FE','#DDB2FE','#B2B5FE','#B2E0FE','#B2FEF4','#B2FEB7','#DBFEB2','#F9FEB2','#FEF4B2','#FEDBB2','#FEB7B2'];// find more at - http://www.quackit.com/css/css_color_codes.cfm
        // $scope.getTheme();
    }
    init();
}]);