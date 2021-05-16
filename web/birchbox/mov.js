var birchBoxApp = angular.module('birchBoxApp', [
    'ui.bootstrap',
    'ngSanitize'
]);
birchBoxApp.run(['$rootScope', function($rootScope) {
}]);
birchBoxApp.controller('birchBoxController', ['$scope', '$http', '$rootScope', '$filter', 'getMoviesService', '$timeout', '$window',
            function    birchBoxController    ($scope,   $http,   $rootScope,   $filter,   getMoviesService,   $timeout,   $window) {
  $rootScope.movies = [
    {
      "titleDisplay": "",
      "titleFilter": "",
      "imgPath": "",
      "genre": "",
      "runTime": "",
      "summary": "",
      "rating": "",
      "releaseYear": "",
      "trailer": ""
    }
  ];
  $scope.generateMovies = function(){
      getMoviesService.getMovies().then(function(response){
          $rootScope.movies = response.movies;
      }, function(error){
      });
  };
////////////////////////////// TESTING START ////////////////////////////////

//////////////////////////////  TESTING END  ////////////////////////////////
  $scope.totalDisplayed = 50;
  $scope.loadMore = function () {
    $scope.totalDisplayed += 50;  
    $scope.$apply();
  };
  var checkLoadMore = setInterval(function() {
    if ($scope.totalDisplayed < $rootScope.movies.length) {
      $scope.loadMore();
    } else {
      clearInterval(checkLoadMore);
    }
  }, 1000); 


  $timeout(function() {

    !function(window){
      var $q = function(q, res){
            if (document.querySelectorAll) {
              res = document.querySelectorAll(q);
            } else {
              var d=document
                , a=d.styleSheets[0] || d.createStyleSheet();
              a.addRule(q,'f:b');
              for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
                l[b].currentStyle.f && c.push(l[b]);

              a.removeRule(0);
              res = c;
            }
            return res;
          }
        , addEventListener = function(evt, fn){
            window.addEventListener
              ? this.addEventListener(evt, fn, false)
              : (window.attachEvent)
                ? this.attachEvent('on' + evt, fn)
                : this['on' + evt] = fn;
          }
        , _has = function(obj, key) {
            return Object.prototype.hasOwnProperty.call(obj, key);
          }
        ;

      function loadImage (el, fn) {
        var img = new Image()
          , src = el.getAttribute('data-src');
        img.onload = function() {
          if (!! el.parent)
            el.parent.replaceChild(img, el)
          else
            el.src = src;

          fn? fn() : null;
        }
        img.src = src;
      }

      function elementInViewport(el) {
        var rect = el.getBoundingClientRect()

        return (
           rect.top    >= 0
        && rect.left   >= 0
        && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
        )
      }

        var images = angular.copy($rootScope.movies)
          , query = $q(images.movies.imgPath)
          , processScroll = function(){
              for (var i = 0; i < images.length; i++) {
                if (elementInViewport(images[i])) {
                  loadImage(images[i], function () {
                    images.splice(i, i);
                  });
                }
              };
            }
          ;
        // Array.prototype.slice.call is not callable under our lovely IE8 
        for (var i = 0; i < query.length; i++) {
          images.push(query[i]);
        };

        processScroll();
        addEventListener('scroll',processScroll);

    }(this);

  }, 1000); 

////////////////////////////// TESTING ////////////////////////////////

  $scope.generateMoviesPython = function(){
      getMoviesService.getMovies().then(function(response){
          $rootScope.movies = response;
          for (i = 0; i < $rootScope.movies.length; i++) {
            // Modify Genres
            if($rootScope.movies[i].genre.indexOf(',') > -1) {
               $rootScope.movies[i].genre = $rootScope.movies[i].genre.substring(0, $rootScope.movies[i].genre.indexOf(','))
            }
            // Modify Runtimes
            if($rootScope.movies[i].runTime.charAt([0]) == '0') {
               $rootScope.movies[i].runTime = 'Less than 1 Hour';
            }
            else if($rootScope.movies[i].runTime.charAt([0]) == '1') {
               $rootScope.movies[i].runTime = '1-2 Hours';
            }
            else if($rootScope.movies[i].runTime.charAt([0]) == '2') {
               $rootScope.movies[i].runTime = '2-3 Hours';
            }
            else {
               $rootScope.movies[i].runTime = 'More than 3 Hours';
            }
          }
      }, function(error){
      });
  };
// CODE FOR THE MODALS    
  $scope.selectedMovie = {
    "titleDisplay": "",
    "titleFilter": "",
    "imgPath": "",
    "genre": "",
    "runTime": "",
    "summary": "",
    "rating": "",
    "releaseYear": "",
    "trailer": ""
  };
  $scope.openInfo = function (movie, menuOpenBool) {
    // TODO menuOpenBool is to prevent info dialog from opening when clicking out of filter dropdown.
    $scope.selectedMovie = movie;
      var modal = document.getElementById('myModal');
      modal.style.display = "block";
  };
  $scope.openLoginModal = function (movie) {
      var modal = document.getElementById('loginModal');
      modal.style.display = "block";
  };
  $scope.closeInfo = function () {
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
    var modal2 = document.getElementById('loginModal');
    modal2.style.display = "none";
    $scope.clearForm();
  };
  window.onclick = function (event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
      $scope.closeInfo();
    }
    var modal2 = document.getElementById('loginModal');
    if (event.target == modal2) {
      $scope.closeInfo();
    }
  };
  $scope.clearForm = function(){
    $scope.user = "";
    $scope.password = "";
  }   
//FILTERING RESULTS 
  $scope.clearFilterPreferences = function() {
    $scope.titleDisplay = "";
    $scope.actorSearch  = "";
    $scope.minTime      = "";
    $scope.maxTime      = "";
    $scope.minYear      = "";
    $scope.maxYear      = "";
    angular.forEach($scope.ratingArray, function (item) {
      item.on = null;
    });
    $scope.showAllRatings = true;
    angular.forEach($scope.genreArray, function (item) {
      item.on = null;
    });
    $scope.showAll = true;
  }  
//FILTER BY RATING
  $scope.ratingArray = [{ name: "G", on: false}, {name:"PG", on: false}, {name:"PG-13", on: false}];
  $scope.showAllRatings = true;
  $scope.checkRatingChange = function() {
      for(r in $scope.ratingArray){
          if($scope.ratingArray[r].on){
              $scope.showAllRatings = false;
              return;
          }
      }
      $scope.showAllRatings = true;
  };
  $scope.ratingFilterFunction = function(a) {
     if($scope.showAllRatings) { return true; }
     var sel = false;
      for(rating in $scope.ratingArray){
          var r = $scope.ratingArray[rating];
          if(r.name == "G") {
            if(a.rating.length == r.name.length){
              if(r.on){ sel = true;}
              else { return false;}
            }
          }  
          if(r.name == "PG") {
            if(a.rating.length == r.name.length){
              if(r.on){ sel = true;}
              else { return false;}
            }
          }  
          if(r.name == "PG-13") {
            if(a.rating.length == r.name.length){
              if(r.on){ sel = true;}
              else { return false;}
            }
          }  
      }
     return sel;
  };
// FILTER BY RELEASE YEAR    
  $scope.yearFilterFunction = function(movie){
      var regObj = new RegExp('[0-9]+');
      return (
        (!regObj.test($scope.minYear) || movie.releaseYear >= $scope.minYear)
        && (!regObj.test($scope.maxYear) || movie.releaseYear <= $scope.maxYear)
      )
  }
// FILTER BY MOVIE RUNTIME    
  $scope.runtimeFilterFunction = function(movie){
    var regObj = new RegExp('[0-9]+');
    return (
      (!regObj.test($scope.minTime) || movie.runTime >= $scope.minTime)
      && (!regObj.test($scope.maxTime) || movie.runTime <= $scope.maxTime)
    )
  }

// FILTER BY GENRE
  $scope.genreArray = [{ name: "Action", on: false}, {name:"Disney", on: false}, {name:"FFFF", on: false}, {name:"Kids", on: false}, {name:"Doc/Rel", on: false}, {name:"Music", on: false}, {name:"Holiday", on: false}, {name:"Drama", on: false}, {name:"Romance", on: false}, {name:"Comedy", on: false}, {name:"Fantasy", on: false}, {name:"Suspense", on: false}];
  $scope.showAll = true;
  $scope.checkChange = function() {
      for(g in $scope.genreArray){
          if($scope.genreArray[g].on){
              $scope.showAll = false;
              return;
          }
      }
      $scope.showAll = true;
  };
  $scope.genreFilterFunction = function(a) {
     if($scope.showAll) { return true; }
     var sel = false;
      for(genre in $scope.genreArray){
          var g = $scope.genreArray[genre];
          if(g.on){
              if(a.genre.indexOf(g.name) == -1){
                  return false;
              }else{
                  sel = true;
              }
          }           
      }
     return sel;
  };
// FILTER BY ACTORS
  $scope.actorSearch = '';
  $scope.actorFilterFunction = function(a) {
    b = a.summary.toUpperCase();
    var sel = false;
    if(b.indexOf($scope.actorSearch.toUpperCase()) == -1){
        return false;
    }else{
        sel = true;
    }
   return sel;
  };  
}]).service('getMoviesService', ['$http', '$q', '$rootScope', function($http, $q, $rootScope){
    var getMovies = function() {
        var deferred = $q.defer();
        $http.get('movies.json').success(function (data, status, headers, config) {
            deferred.resolve(data);
        }).error(function(data, status, headers, config){
            deferred.reject(status);
        });
        return deferred.promise;
    }
    return({
        getMovies: getMovies
    })
}]).directive('ngEnter', function () {
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
}).directive("scroll", function ($window) {
    return function(scope, element, attrs) {
        angular.element($window).bind("scroll", function() {
             if (this.pageYOffset >= 200) {
                 scope.loadMore();
                 console.log('Scrolled below header.');
             } else {
                 console.log('Header is in view.');
             }
            scope.$apply();
        });
    };
});