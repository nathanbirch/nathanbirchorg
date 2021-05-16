"use strict";

var addOccurrenceModal = angular.module('modal.addOccurrence',[]);

addOccurrenceModal.controller('modalAddOccurrenceCtrl',['$scope', '$uibModalInstance', 'fileReader', function ($scope, $uibModalInstance, fileReader){
    $scope.dontShowCurrentTime = false;
    $scope.occurrenceCreationObj = {};
    $scope.instanceDetails = "";
    $scope.instanceImage = "";
    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(){
        var resp = {ctrl:$scope.occurrenceCreationObj,
                    instanceDetails:$scope.instanceDetails,
                    img:$scope.instanceImage};
        $uibModalInstance.close(resp);
    };

    $scope.ok = function(){
        $uibModalInstance.close(encodeURIComponent($scope.addOccurrenceFilter));
    };
    
    $scope.clearTimeObject = function() {
        $scope.dontShowCurrentTime = true;
        $scope.ctrl = null;
    };
    $scope.getFile = function () {
        fileReader.readAsDataUrl($scope.file, $scope)
           .then(function(result) {
                $scope.instanceImage = result;
            });
    };
}]);