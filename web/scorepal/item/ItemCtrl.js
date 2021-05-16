var viewItem = angular.module('view.item', ['ui.router', 'ngSanitize', 'modal.singleOccurrence', 'modal.addOccurrence', 'modal.deleteItem', 'modal.editOccurrence', 'modal.editItem']);

viewItem.config(['$stateProvider',function ($stateProvider) {
    $stateProvider.state('item', {
        url: '/item',
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
                controller: 'ItemCtrl',
                templateUrl: 'item/item.html'
            }
        },
        data: { pageTitle: '' }
    });
}]);

viewItem.controller('ItemCtrl',['$scope', '$rootScope', '$timeout', '$location', '$q', '$uibModal', 'fileReader',
                     function  ( $scope,   $rootScope,   $timeout,   $location,   $q,   $uibModal,   fileReader) {
    function getSelectedItem() {
        var urlP =  $location.search();
        if (urlP == 'undefined' || urlP === '[object Object]') {
            $scope.go('/home');
        } else if (Object.keys(urlP).length === 0 && urlP.constructor === Object) { // empty object
            $scope.go('/home');
        } else {
            if (!$rootScope.items) {
                $scope.go('/home');
            } else {
                for (i in $rootScope.items) {
                    if ($rootScope.items[i].itemId == urlP.itemId) {
                        $scope.item = $rootScope.items[i];  
                        $scope.itemIndex = i;
                        if ($scope.item.Occurrences) {
                            if ($scope.item.Occurrences.length > 0) {
                               computeItemDetails(); 
                            }
                        }  
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
            }
            // check to see if adding occurrence from stats page.
            if (urlP.OccurrenceToAdd) {
                var details = "Occurrence added on " + $scope.addTimeStamp(new Date()) + ".";
                $scope.addOccurrence(urlP.OccurrenceToAdd, details);
                $location.url($location.path());
            }
        } 
    }
    $scope.changeItemColor = function(itemObj, color) {
        itemObj.color = color;
    }
    $scope.editItemSave = function(item) {
        $scope.item = item;
        $scope.updateLocalStorage($scope.item);
    }
    $scope.deleteItem = function() {
        $rootScope.items.splice($scope.indexOfItem, 1);
        $scope.updateLocalStorage();
        $timeout(function() {
            $scope.go('/home');
        }, 500);
    }
    $scope.addQuickOccurrence = function() {
        var now = {input:new Date()};
        $scope.addOccurrence(now);
    }
    $scope.addOccurrence = function(timeToAdd, details, imgInput) {
        // timeToAdd is input from item.html, timeToAdd.input is from Add New Occurrence Modal, details check is for adding from stats page.
        if (details && details.indexOf('Occurrence added on ') > -1) {
            var tempO = {input:timeToAdd};
            timeToAdd = tempO;
        }
        // check that each param exists, if it doesn't, create an empty spot for it.
        if (!timeToAdd || timeToAdd.input == null) {var now = new Date();} else {var now = new Date(timeToAdd.input);}
        if (details) {var newDetails = details;} else {var newDetails = '';}
        if (imgInput) {var newImage = imgInput;} else {var newImage = '';}

        var newInstance = {date:now,
                           new:$scope.addTimeStamp(now),
                           det:newDetails,
                           img:newImage}
        if (!$scope.item.Occurrences) {
            $scope.item.Occurrences = [];
            $scope.item.Occurrences.push(newInstance);
        } else {
            $scope.item.Occurrences.unshift(newInstance);
            if($scope.item.Occurrences.length === 2) {
                computeItemDetails(); 
            }
        }
        $scope.arraySortDateDescending($scope.item.Occurrences);

        // update elapsed properties of each Occurrence
        for (i=0; i<$scope.item.Occurrences.length; i++) {
            if ($scope.item.Occurrences.length > 1) {
                if (i + 1 < $scope.item.Occurrences.length) {
                    $scope.item.Occurrences[i].elapsed        = {};
                    $scope.item.Occurrences[i].elapsed.pretty = $scope.timeDifference($scope.item.Occurrences[i].date, $scope.item.Occurrences[i + 1].date);
                    $scope.item.Occurrences[i].elapsed.pretty = $scope.item.Occurrences[i].elapsed.pretty.replace('ago','');
                    $scope.item.Occurrences[i].elapsed.pretty = $scope.item.Occurrences[i].elapsed.pretty.replace('approximately','about');
                    $scope.item.Occurrences[i].elapsed.raw    = $scope.item.Occurrences[i].date - $scope.item.Occurrences[i + 1].date;
                }
            }
        }
        $scope.updateLocalStorage($scope.item);
    }

    $scope.deleteOccurrence = function(indx) {
        $scope.item.Occurrences.splice(indx, 1);
        $scope.updateLocalStorage($scope.item);
    }
    $scope.editOccurrence = function(occr, indx) {
        $scope.openEditOccurrenceModal(occr, indx);
        $scope.OccurrenceOpened = occr;
        $scope.OccurrenceOpened.input = $scope.OccurrenceOpened.new;
        $scope.OccurrenceOpened.rIndex = indx;
    }
    $scope.openOccurrence = function(occr, indx) {
        $rootScope.showingSingleOccurrence = occr;

    }
    $scope.closeOccurrence = function() {
        $rootScope.showingSingleOccurrence = undefined;
    }
    $scope.editOccurrenceSave = function() {
        $scope.OccurrenceOpened.date = new Date($scope.OccurrenceOpened.input);
        $scope.OccurrenceOpened.new = $scope.addTimeStamp($scope.OccurrenceOpened.date);
        $scope.item.Occurrences[$scope.OccurrenceOpened.rIndex] = $scope.OccurrenceOpened;
        $scope.arraySortDateDescending($scope.item.Occurrences);
        $scope.OccurrenceOpened = null;
        $scope.updateLocalStorage($scope.item);
    }
    var computeItemDetails = function() {
        if (typeof $scope.item.Occurrences[0].date === 'string') {
            var newDate = new Date($scope.item.Occurrences[0].date)
            $scope.item.Occurrences[0].date = newDate;
        }
        if (!$scope.item.Occurrences[0].date) {
            $scope.item.Occurrences[0].date = new Date($scope.item.Occurrences[0].input);
        }
        //Set informative values
        $scope.ItemDetails = {};
        $scope.ItemDetails.Recent = $scope.timeDifference(new Date(), $scope.item.Occurrences[0].date);
        $scope.ItemDetails.Total = $scope.item.Occurrences.length;

        setInterval(function() {
            $scope.ItemDetails.Recent = $scope.timeDifference(new Date(), $scope.item.Occurrences[0].date);
            $scope.ItemDetails.Total = $scope.item.Occurrences.length;
            $scope.$apply();
        }, 1000);

    }
    $scope.openSingleOccurrenceModal = function(occr, indx) {
        var defer = $q.defer();
        var statusFilterInstance = $uibModal.open({
            templateUrl: 'item/modals/singleOccurrence.html',
            controller: 'modalSingleOccurrenceCtrl',
            size: 'sm',
            backdrop: 'static',
            scope: $scope,
            resolve: {
                singleOccurrence: function () {
                  return occr;
                },
                indx: function() {
                  return indx;
                }
            }
        });
        statusFilterInstance.result.then(function (response) {
            defer.resolve([{
                key: 'partNumber',
                value: response
            }]);
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };
    $scope.openEditItemModal = function() {
        var defer = $q.defer();
        var statusFilterInstance = $uibModal.open({
            templateUrl: 'item/modals/editItem.html',
            controller: 'modalEditItemCtrl',
            size: 'sm',
            backdrop: 'static',
            scope: $scope
        });
        statusFilterInstance.result.then(function (response) {
            $scope.editItemSave(response);
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };
    $scope.openEditOccurrenceModal = function(occr, indx) {
        var defer = $q.defer();
        var statusFilterInstance = $uibModal.open({
            templateUrl: 'item/modals/editOccurrence.html',
            controller: 'modalEditOccurrenceCtrl',
            size: 'sm',
            backdrop: 'static',
            scope: $scope,
            resolve: {
                singleOccurrence: function () {
                  return occr;
                },
                indx: function() {
                  return indx;
                }
            }
        });
        statusFilterInstance.result.then(function (response) {
            $scope.OccurrenceOpened = response;
            $scope.editOccurrenceSave();
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };
    $scope.openDeleteItemModal = function() {
        var defer = $q.defer();
        var statusFilterInstance = $uibModal.open({
            templateUrl: 'item/modals/deleteItem.html',
            controller: 'modalDeleteItemCtrl',
            size: 'sm',
            backdrop: 'static',
            scope: $scope
        });
        statusFilterInstance.result.then(function (response) {
            for (i in $rootScope.items) {
                if ($rootScope.items[i].itemId == response.itemId) {
                    $scope.indexOfItem = i;
                    break;
                }
            }  
            $scope.deleteItem();
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };
    $scope.openAddOccurrenceModal = function() {
        var defer = $q.defer();
        var statusFilterInstance = $uibModal.open({
            templateUrl: 'item/modals/addOccurrence.html',
            controller: 'modalAddOccurrenceCtrl',
            size: 'sm',
            backdrop: 'static',
            scope: $scope
        });
        statusFilterInstance.result.then(function (response) {
            $scope.addOccurrence(response.ctrl, response.instanceDetails, response.img);
        }, function(error) {
            defer.reject();
        }).then(function () {
        });
        return defer.promise;
    };

    $scope.getFile = function () {
        fileReader.readAsDataUrl($scope.file, $scope)
           .then(function(result) {
                $scope.imageSrc = result;
            });
    };

    var init = function() {
        $scope.dontShowCurrentTime = false;
        $scope.getItems();
        getSelectedItem();
    }   
    init(); 
}]);