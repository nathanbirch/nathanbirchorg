
<html ng-app="birchBoxApp" ng-controller="birchBoxController" ng-init="generateMovies()">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="mov.css">
        <script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.2/ui-bootstrap-tpls.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js"></script>
        <script type="text/javascript" src="mov.js"></script>
    </head>
    <header>
        <div class="wf">
            <span class=""><a ng-if="!loggedIn" href="" ng-click="openLoginModal()"><i class="fa fa-user"></i></a><span ng-if="loggedIn" class="ran1" style="">You are Logged in</span></span>
            <span class="">BirchBox<br></span>
            <div class="filterDrop dropdown">
                <button class="btn btn-info dropdown-toggle filterDropButton" type="button" data-toggle="dropdown" ng-click="menu.open = !menu.open">
                    <span class="h-display-sm">{{filteredResults.length}}</span>
                    <span class="h-display-lg">Filter {{filteredResults.length}} Results</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" ng-class="{open: menu.open}" ng-mouseleave="menu.open = false" ng-click="menu.open = false">
                    <li><input class="input-gen" type="text" ng-model="search.titleDisplay" placeholder="Search by title" autofocus></li>
                    <li><input class="input-gen" type="text" ng-model="actorSearch" placeholder="Search by characters"></li>
                    <li>
                        <table>
                            <tr>
                                <td class="lPad lpad1">Rating</td>
                                <td class="w46" ng-repeat="rating in ratingArray"><input type="checkbox" ng-model="rating.on" ng-change="checkRatingChange()" /><span class="b10">{{rating.name}}</span></label></td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr><td class="lPad">Min Time</td><td class="lPad">Max Time</td></tr>
                            <tr><td><input class="input-gen-small" type="text" ng-model="minTime" placeholder="h:mm"></td><td><input class="input-gen-small" type="text" ng-model="maxTime" placeholder="h:mm"></span></td></tr>
                        </table>
                    </li>
                    <li>
                        <table>
                            <tr><td class="lPad">Min Year</td><td class="lPad">Max Year</td></tr>
                            <tr><td><input class="input-gen-small" type="text" ng-model="minYear" placeholder="yyyy"></td><td><input class="input-gen-small" type="text" ng-model="maxYear" placeholder="yyyy"></span></td></tr>
                        </table>
                    </li>  
                    <li>
                        <table class="ml15">
                            <tr><td ng-repeat="genre in genreArray.slice(0,4)"><input type="checkbox" ng-model="genre.on" ng-change="checkChange()" /><span class="b10">{{genre.name}}</span></label></td></tr>
                            <tr><td ng-repeat="genre in genreArray.slice(4,8)"><input type="checkbox" ng-model="genre.on" ng-change="checkChange()" /><span class="b10">{{genre.name}}</span></label></td></tr>
                            <tr><td ng-repeat="genre in genreArray.slice(8,12)"><input type="checkbox" ng-model="genre.on" ng-change="checkChange()" /><span class="b10">{{genre.name}}</span></label></td></tr>
                        </table>
                    </li>
                    <li><button class="btn btn-default filtBtn" ng-click="clearFilterPreferences(); search.titleDisplay = ''">Clear Filters</button></li>
                </ul>
            </div>
        </div>
    </header>
    <body>
         <div class="mainContent" scroll>
            <div class="repeaterDiv" data-ng-repeat="movie in filteredResults = (movies | orderBy : 'titleFilter' | filter:{titleDisplay: search.titleDisplay} | filter:actorFilterFunction | filter:ratingFilterFunction | filter:yearFilterFunction | filter:runtimeFilterFunction | filter:genreFilterFunction) | limitTo:totalDisplayed">
                <div class="wrapper">
                    <img class="movImg repeated_movies" onload="this.style.opacity='1';" ng-src="{{movie.imgPath}}" ng-click="openInfo(movie, menu.open)"/>
                    <div ng-show="movie.editedFlag" class="corner-ribbon bottom-right sticky green shadow" onload="this.style.opacity='1';"><span style="padding-left:20px">Edited</span></div>
                    <div ng-show="movie.toEditFlag" class="corner-ribbon bottom-right sticky red shadow" onload="this.style.opacity='1';"><span style="padding-left:20px">Need to Edit</span></div>

                </div>
            </div>
            <!-- <button ng-click="loadMore()">Load More</button> -->
        </div>
        <br><br><br><br>
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close" ng-click="closeInfo()">X</span>
            <h1 class="movTitle" ng-if="selectedMovie.titleDisplay.length > 0" ng-bind="selectedMovie.titleDisplay"></h1>
            <table class="movie-info-table">
                <tr>
                    <td><img class='movImgSelected' ng-src="{{selectedMovie.imgPath}}"></td>
                    <td><p ng-if="selectedMovie.summary.length > 0"><span class="cap">Description:</span> <br><span ng-bind="selectedMovie.summary" class="regWid infoD"></span></p></td>
                    <td>
                        <p ng-if="selectedMovie.trailer.length > 0"><a href="{{selectedMovie.trailer}}" target="_blank">Youtube Trailer</a></p>
                        <p ng-if="selectedMovie.rating.length > 0">     <span class="cap">Rating:</span>  <span class="infoD" ng-bind="selectedMovie.rating"></span></p>
                        <p ng-if="selectedMovie.releaseYear.length > 0"><span class="cap">Year:</span>    <span class="infoD" ng-bind="selectedMovie.releaseYear"></span></p>
                        <p ng-if="selectedMovie.genre.length > 0">      <span class="cap">Genre:</span>   <span class="infoD" ng-bind="selectedMovie.genre"></span></p>
                        <p ng-if="selectedMovie.runTime.length > 0">    <span class="cap">Length:</span>  <span class="infoD" ng-bind="selectedMovie.runTime"></span></p>
                        <p ng-if="selectedMovie.editedFlag" class="cap infoE">Edited Version</p>
                    </td>
                </tr>
            </table>  
          </div>
        </div>
        <div id="loginModal" class="loginModal">
          <div class="loginModal-content">
            <span class="close" ng-click="closeInfo()">X</span>
            <h1 class="movTitle p3">Login</h1>
                    <input class="input-gen-lg loginInputs" type="text" ng-model="user" placeholder="Username" autofocus>
                    <input class="input-gen-lg loginInputs" type="password" ng-model="password" placeholder="Password" ng-enter="login()">
                <button class="btn btn-default btn-lg btn-info p3" ng-click="login()">Submit</button>
                <button class="btn btn-default btn-lg p4 fr" ng-click="cancelFunction()">Cancel</button>
                <span ng-show="loginValid || loginInvalid">     
                    <br><br>
                    <img ng-show="loginValid" src="icons/checkPos.png" class="loginImage">
                    <img ng-show="loginInvalid" src="icons/checkNeg.png" class="loginImage"><span class="loginText" ng-bind="responseMessage"></span>
                </span>
          </div>
        </div>
    </body>
</html>