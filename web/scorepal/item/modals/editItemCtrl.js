"use strict";

var editItemModal = angular.module('modal.editItem',[]);

editItemModal.controller('modalEditItemCtrl',['$scope', '$uibModalInstance', function ($scope, $uibModalInstance){
    $scope.tempItem = angular.copy($scope.item);
    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(){
        $uibModalInstance.close($scope.tempItem);
    };

    $scope.ok = function(){
        $uibModalInstance.close(encodeURIComponent($scope.singleItemFilter));
    };
}]);