var viewHome = angular.module('view.home', ['ui.router', 'ngSanitize', 'modal.addItem', 'modal.deleteAll']);

viewHome.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('home', {
        url: '/home',
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
                controller: 'HomeCtrl',
                templateUrl: 'home/home.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewHome.controller('HomeCtrl',['$scope', '$rootScope', '$localStorage', '$q', '$uibModal',
                    function   ( $scope,   $rootScope,   $localStorage,   $q,   $uibModal) {
    var that = this;

    this.isOpen = false;

    this.openCalendar = function(e) {
        e.preventDefault();
        e.stopPropagation();

        that.isOpen = true;
    };   

    $scope.openAddWindow = function() {
        $uibModal.open({
            templateUrl: 'common/modals/addItem.html',
            controller: 'modalCtrl',
        });
        // $scope.showAddForm = true;
    }
    $scope.openAddItemModal = function() {
        var defer = $q.defer();
        var addItemInstance = $uibModal.open({
            templateUrl: 'home/modals/addItem.html',
            controller: 'modalAddItemCtrl',
            size: 'sm',
            backdrop: 'static'
        });
        addItemInstance.result.then(function (response) {
            $scope.createItem(response.name, response.details);
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };  
    $scope.createItem = function (name,details) {
        // create new item from data
        var newItem = {name:name,
                       color:generateRandomColor(),
                       Occurrences:[]};
        if (details) {
            newItem.det = details;
        }
        // generate id
        var maxId = 0;
        if($rootScope.items) {
            $rootScope.items.map(function(obj){     
                if (obj.itemId > maxId) maxId = obj.itemId;    
            });
        }
        newItem.itemId = (maxId*1+1);
        if (!$rootScope.items) {
            $rootScope.items = [];
        }
        // store new item
        $rootScope.items.push(newItem);
        $scope.updateLocalStorage(newItem);

        $scope.go('/item', newItem.itemId);
    }    
    var generateRandomColor = function() {
        if ($rootScope.items) {
            var numTries = 0;
            for (i in $rootScope.items) {
                do {
                    var randomColor = Math.floor(Math.random() * $scope.colorOptions.length);
                    if ($rootScope.items[i].color == $scope.colorOptions[randomColor]) {
                        var match = false;
                    } else {
                        var match = true;
                    }
                    numTries++;
                } while(!match && numTries < 5); 
            }
        } else {
            var randomColor = Math.floor(Math.random() * $scope.colorOptions.length);

        }
        if (randomColor == undefined) {
            randomColor = 6;
        }        
        return $scope.colorOptions[randomColor];
    }
    $scope.removeItem = function (index) {
        $rootScope.items.splice(index, 1);
        $scope.updateLocalStorage();
    }
    $scope.openDeleteAllModal = function() {
        var defer = $q.defer();
        var addItemInstance = $uibModal.open({
            templateUrl: 'home/modals/deleteAll.html',
            controller: 'modalDeleteAllCtrl',
            size: 'sm',
            backdrop: 'static'
        });
        addItemInstance.result.then(function (response) {
            $scope.deleteAll();
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };  
    $scope.deleteAll = function() {
        $rootScope.items = null;
        $scope.updateLocalStorage();
    }
    var init = function() {
        $scope.getItems();
        $scope.name = "";
        $scope.details="";
        $scope.reOrderItems = false;
    }   
    init(); 
}]);