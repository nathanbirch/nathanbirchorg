var viewStats = angular.module('view.stats', ['ui.router', 'ngSanitize']);

viewStats.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('stats', {
        url: '/stats',
        views: {
            'footer': {
                controller: 'AppCtrl',
                templateUrl: 'common/footer.html'
            },
            'header': {
                controller: 'AppCtrl',
                templateUrl: 'common/header.html'
            },
            'main': {
                controller: 'StatsCtrl',
                templateUrl: 'stats/stats.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewStats.controller('StatsCtrl',['$scope', '$rootScope', '$timeout', '$location',
                      function   ( $scope,   $rootScope,   $timeout,   $location) {
    function getSelectedItem() {
        var urlP =  $location.search();
        if (urlP == 'undefined' || urlP === '[object Object]') {
            $scope.go('/home');
        } else {
            if (!$rootScope.items) {
                $scope.go('/home');
            } else {
                for (i in $rootScope.items) {
                    if ($rootScope.items[i].itemId == urlP.itemId) {
                        $scope.item = $rootScope.items[i];  
                        $scope.itemIndex = i;  
                    }
                }  
                // save most recent item selected
                for (i in $rootScope.items) {
                    if ($rootScope.items[i].itemId == $scope.item.itemId) {
                        $rootScope.items[i].mostRecent = true; 
                    } else {
                        $rootScope.items[i].mostRecent = false; 
                    }
                }
                if ($scope.item.Occurrences) {
                    loadCharts();
                }
            }
        } 
    }
    function loadCharts() {
        // get array items in order by date, most recent at the top
        var frequencyArray = [];
            $scope.proj = {};
        if ($scope.item.Occurrences.length > 1) {
            // $scope.item.Occurrences[0]
            for (i in $scope.item.Occurrences) {
                var currentOccurrence = {indx: i,
                                        date: $scope.item.Occurrences[i].date};
                frequencyArray.push(currentOccurrence);
            }
            // console.log(frequencyArray);
            // arraySortDateDescending(frequencyArray);
            // console.log(frequencyArray);
            getTimeOfDayChart();
            averagesChart();
            getFrequencyDayChart();
        } 
    }  
    function timesOfDay() { // to get the time of day or week when Occurrences most often happen
        this.todArr = [];
        this.todVal = 0;
        // var tempArrayForTimeAverages = [];
        // make hourly array
        this.hourlyArray = [0,0,0,0,0,0,
                            0,0,0,0,0,0,
                            0,0,0,0,0,0,
                            0,0,0,0,0,0];

        for (i=0; i < $scope.item.Occurrences.length; i++) {
            if (i < $scope.item.Occurrences.length) {
                var onlyTime = $scope.item.Occurrences[i].date.getHours();
                // tempArrayForTimeAverages.push($scope.item.Occurrences[i].date);
                this.hourlyArray[onlyTime]++;
                this.todArr.push(onlyTime);
            }
        }
        $scope.statHourArray = this.hourlyArray;
        // var testavvvv = getHourAverage(tempArrayForTimeAverages);
        // divide this array into four sections for the chart
        this.quadArr = [0,0,0,0]; // [12:00-5:59AM, 6:00-11:59AM; 12:00-5:59PM, 6:00-11:59PM];

        for (i=0; i<this.todArr.length; i++) {
            if (this.todArr[i] < 6) {
                this.quadArr[0]++;
            } else if (this.todArr[i] >= 6 && this.todArr[i] < 12) {
                this.quadArr[1]++;
            } else if (this.todArr[i] >= 12 && this.todArr[i] < 18) {
                this.quadArr[2]++;
            } else {
                this.quadArr[3]++;
            }
        }
        return this.quadArr;
    }

    function averagesChart() { // to get average 
        $scope.avgArr = [];
        this.avgVal = 0;
        for (i=0; i < $scope.item.Occurrences.length; i++) {
            if (i + 1 < $scope.item.Occurrences.length) {
                $scope.avgArr.push($scope.item.Occurrences[i].elapsed.raw);
                if ($scope.item.Occurrences[i].elapsed.raw) {
                    this.avgVal += $scope.item.Occurrences[i].elapsed.raw;    
                }
            }
        }
        var average = avgVal/$scope.avgArr.length;
        var mostRecentOccurrence = $scope.item.Occurrences[0].date;
        getMissedOccurrences(mostRecentOccurrence, average);
        // calculate next projected Occurrence based on this average
        $scope.proj.avgRaw = new Date(mostRecentOccurrence.getTime() + average); 
        $scope.proj.avg = $scope.addTimeStamp(new Date(mostRecentOccurrence.getTime() + average)); 

        average = $scope.makeSecondsPretty(average);
        $scope.avg1 = average;
        setAvgCountdown();
        return average;
    }
    function getMissedOccurrences(latestOccurrence, avgTime) {
        $scope.proj.missedOccurrenceArray = [];
        var timeFromOccurrenceToNow = new Date() - new Date(latestOccurrence);
        var numberOfMissedOccurrences = timeFromOccurrenceToNow / avgTime;
        for (i = 0; i < numberOfMissedOccurrences; i++) {
            var newVal = angular.copy(latestOccurrence);
            newVal = latestOccurrence.setMilliseconds(latestOccurrence.getMilliseconds() + avgTime*1);
            $scope.proj.missedOccurrenceArray.push(new Date(newVal));
        }
        $scope.proj.missedOccurrenceArray.reverse();
    }
    var setAvgCountdown = function() {
        setInterval(function() {
            $scope.proj.nextOcc = $scope.timeDifference(new Date(), new Date($scope.proj.avg));
            if ($scope.proj.nextOcc.indexOf("ago") > -1) {
                $scope.proj.nextOccPassed = $scope.proj.nextOcc;
                $scope.proj.nextOcc = $scope.proj.time;
            } else {
                $scope.proj.nextOccPassed = null;
            }
            $scope.$apply();
        }, 1000);
    }
    $scope.getCountdown = function(timestamp) {
        var countdown = 0;
        countdown = $scope.timeDifference(new Date(), new Date(timestamp));
        return countdown;
    }
    var getTimeOfDayChart = function() {
        $scope.sec = {};
        $scope.sec.labels = ["Early Morning (12-6)", "Late Morning (6-12)", "Early Afternoon (12-6)", "Evening (6-12)"];
        $scope.sec.data = timesOfDay();      
    }

    var calculateDaysOccured = function() {
        var weekdaysArrCount = [0,0,0,0,0,0,0];
        for (i=0; i < $scope.item.Occurrences.length; i++) {
            if (i < $scope.item.Occurrences.length) {
                var tempDateStr = $scope.item.Occurrences[i].date.toString().substr(0,3);
                switch (tempDateStr) {
                    case 'Sun':
                        weekdaysArrCount[0]++;
                        break;
                    case 'Mon':
                        weekdaysArrCount[1]++;
                        break;
                    case 'Tue':
                        weekdaysArrCount[2]++;
                        break;
                    case 'Wed':
                        weekdaysArrCount[3]++;
                        break;
                    case 'Thu':
                        weekdaysArrCount[4]++;
                        break;
                    case 'Fri':
                        weekdaysArrCount[5]++;
                        break;
                    case 'Sat':
                        weekdaysArrCount[6]++;
                }
            }
        }
        $scope.regularOccurrenceTime.day = weekdaysArrCount;
        return weekdaysArrCount;
    }

    var getFrequencyDayChart = function() {
        $scope.thr = {};
          $scope.thr.labels = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          $scope.thr.series = ['Series A'];
          $scope.thr.data = calculateDaysOccured();
          $scope.onClick = function (points, evt) {
            console.log(points, evt);
          };
          $scope.thr.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
          $scope.thr.options = {
            scales: {
              yAxes: [
                {
                  id: 'y-axis-1',
                  type: 'linear',
                  display: true,
                  position: 'left'
                },
                {
                  id: 'y-axis-2',
                  type: 'linear',
                  display: false,
                  position: 'right'
                }
              ]
            }
          };
        getFrequencyHourChart();
    }

    var getFrequencyHourChart = function() {
        $scope.fou = {};
          $scope.fou.labels = ["Midnight", "1:00 AM", "2:00 AM", "3:00 AM", "4:00 AM", "5:00 AM", "6:00 AM", "7:00 AM", "8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "Noon", "1:00 PM", "2:00 PM", "3:00 PM", "4:00 PM", "5:00 PM", "6:00 PM", "7:00 PM", "8:00 PM", "9:00 PM", "10:00 PM", "11:00 PM"];
          $scope.fou.series = ['Series A'];
          $scope.fou.data = $scope.statHourArray;
          $scope.regularOccurrenceTime.hour = $scope.fou.data;

          $scope.onClick = function (points, evt) {
            console.log(points, evt);
          };
          $scope.fou.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
          $scope.fou.options = {
            scales: {
              yAxes: [
                {
                  id: 'y-axis-1',
                  type: 'linear',
                  display: true,
                  position: 'left'
                },
                {
                  id: 'y-axis-2',
                  type: 'linear',
                  display: false,
                  position: 'right'
                }
              ]
            }
          };
        $scope.proj.time = $scope.addTimeStamp(getNextOccurrenceOfTime(new Date(), calculateMaxFromArray($scope.regularOccurrenceTime.hour)));
    }
    var calculateMaxFromArray = function(myArray) {
        var maxObj = {}
        maxObj.highest = 0;
        maxObj.count = 0;
        for (i in myArray) {
            if(myArray[i] > maxObj.highest) {
                maxObj.count = parseInt(myArray[i]);
                maxObj.highest = parseInt(i);
            } 
        }
        return maxObj.highest;
    }
    var getNextOccurrenceOfTime = function(now, hour) {
        var newDate = new Date();
        newDate.setHours(hour,0,0);
        if (newDate < now) {
            newDate.setDate(newDate.getDate() + 1);
        }
        return newDate;

    }
    $scope.getHeight = function(totalItems) {
        var h = (totalItems * 50) + 100;
        if (h < 400) { 
            h = 400;
        }
        var setHeight = 'height: ' + h + 'px';
        return setHeight;
    }
    $scope.addStatOccurrence = function() {
        var paramToPass = {
            itemId:$scope.itemIndex*1-1,
            OccurrenceToAdd:$scope.proj.avg
        }
        $scope.go('/item', paramToPass);
    }
    $scope.changeSlideIndex = function(index) {
        $scope.carouselIndex = index;
    }
    function init() {
        $scope.regularOccurrenceTime = {};
        $scope.getItems();
        getSelectedItem();
        $scope.slides = [0,1,2,3,4];
        $timeout(function () {
            $scope.loaded = true;
        }, 500); 
    }   
    init(); 
}]);