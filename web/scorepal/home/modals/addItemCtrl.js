"use strict";

var addItemModal = angular.module('modal.addItem',[]);

addItemModal.controller('modalAddItemCtrl',['$scope', '$rootScope', '$uibModalInstance', function ($scope, $rootScope, $uibModalInstance){
    $scope.name = "";
    $scope.details= "";

    $scope.checkDuplicate = function(name) {
        for (i in $rootScope.items) {
            if ($rootScope.items[i].name == name) {
                $scope.duplicateName = 'Another item already has this name, please select a different name.';
                return true;
            } else {
                $scope.duplicateName = null;
            }
        }
        return false;
    }

    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(){
        var resp = {name:$scope.name,
                    details:$scope.details};
        $uibModalInstance.close(resp);
    };

}]);