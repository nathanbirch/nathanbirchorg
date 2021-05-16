"use strict";

var editOccurrenceModal = angular.module('modal.editOccurrence',[]);

editOccurrenceModal.controller('modalEditOccurrenceCtrl',['$scope', '$uibModalInstance', 'singleOccurrence', 'indx', 'fileReader', function ($scope, $uibModalInstance, singleOccurrence, indx, fileReader){
    $scope.originalOccurrence = angular.copy($scope.OccurrenceOpened);
    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(){
        $uibModalInstance.close($scope.originalOccurrence);
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
}]);