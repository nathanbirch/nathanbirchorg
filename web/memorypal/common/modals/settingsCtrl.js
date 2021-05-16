"use strict";

var settingsModal = angular.module('modal.settingsModal',[]);

settingsModal.controller('settingsModalCtrl',['$scope', '$rootScope', '$uibModalInstance', 'themes', 'getTheme', 'changeTheme', function ($scope, $rootScope, $uibModalInstance, themes, getTheme, changeTheme){
    $scope.originalOccurrence = angular.copy($scope.OccurrenceOpened);
    $scope.themes = themes;
    $scope.getTheme = getTheme;
    $scope.changeTheme = changeTheme;
    $scope.changeTheme();
    $scope.slides = [0,1,2];
    $scope.tempItems = angular.copy($rootScope.items);
    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(theme, flag){
        var resp = {theme:theme,
                    flag:flag,
                    items:$scope.tempItems};
        $uibModalInstance.close(resp);
    };

    $scope.ok = function(){
        $uibModalInstance.close(encodeURIComponent($scope.singleItemFilter));
    };
    $scope.getFile = function () {
        fileReader.readAsDataUrl($scope.file, $scope)
           .then(function(result) {
                $scope.originalOccurrence.img = result;
            });
    };
    $scope.removeImg = function() {
        $scope.originalOccurrence.img = "";
    }
    $scope.changeSlideIndex = function(index) {
        $scope.carouselIndex = index;
    }
}]);