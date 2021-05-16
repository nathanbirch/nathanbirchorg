"use strict";

var deleteItemModal = angular.module('modal.deleteItem',[]);

deleteItemModal.controller('modalDeleteItemCtrl',['$scope', '$uibModalInstance', function ($scope, $uibModalInstance){
    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(){
        $uibModalInstance.close($scope.item);
    };

    $scope.ok = function(){
        $uibModalInstance.close(encodeURIComponent($scope.deleteItemFilter));
    };
}]);