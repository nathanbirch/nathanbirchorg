"use strict";

var singleOccurrenceModal = angular.module('modal.singleOccurrence',[]);

singleOccurrenceModal.controller('modalSingleOccurrenceCtrl',['$scope', '$uibModalInstance', 'singleOccurrence', 'indx', 'fileReader', function ($scope, $uibModalInstance, singleOccurrence, indx, fileReader){
	$scope.showingSingleOccurrence = singleOccurrence;
	$scope.showingSingleOccurrence.prettyDate = $scope.addTimeStampAndWeekday($scope.showingSingleOccurrence.date);
	$scope.index = indx;

    $scope.dismiss = function(){
        $uibModalInstance.dismiss('cancel');
    };
    $scope.close = function(){
        $uibModalInstance.close();
    };
    $scope.getFile = function () {
        fileReader.readAsDataUrl($scope.file, $scope)
           .then(function(result) {
                $scope.showingSingleOccurrence.img = result;
            });
    };
    $scope.ok = function(){
        $uibModalInstance.close(encodeURIComponent($scope.singleOccurrenceFilter));
    };
}]);