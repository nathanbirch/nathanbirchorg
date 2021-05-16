"use strict";

var deleteAllModal = angular.module('modal.deleteAll',[]);

deleteAllModal.controller('modalDeleteAllCtrl',['$scope', '$uibModalInstance', function ($scope, $uibModalInstance){
    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(){
        $uibModalInstance.close();
    };
}]);