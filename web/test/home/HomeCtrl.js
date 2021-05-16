testApp.controller('HomeCtrl', function($scope) {


  function getWeekNumber(d) {
    // Copy date so don't modify original
    d = new Date(+d);
    d.setHours(0,0,0);
    // Set to nearest Thursday: current date + 4 - current day number
    // Make Sunday's day number 7
    d.setDate(d.getDate() + 4 - (d.getDay()||7));
    // Get first day of year
    var yearStart = new Date(d.getFullYear(),0,1);
    // Calculate full weeks to nearest Thursday
    var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
    // Return array of year and week number
    return [d.getFullYear(), weekNo];
  }
  function init() {
    getWeekNumber();
    // HOME PAGE IDEAS - have a weekly study topic for each week of the year using the function above. 
    // Have another search, 'what are you in the mood for?'
    // Have a fun box for questions to only search questions
  }
  init();
}).directive('confirmOnExit', function() {
    return {
      link: function($scope, elem, attrs) {
        window.onbeforeunload = function(){
          if ($scope.myForm.$dirty) {
            return "You have unsaved changes, do you want to stay on the page?";
          }
        }
        $scope.$on('$stateChangeStart', function(event, next, current) {
          if ($scope.myForm.$dirty) {
            if(!confirm("You have unsaved changes, do you want to stay on the page?")) {
              event.preventDefault();
            }
          }
        });
      }
    };
});	