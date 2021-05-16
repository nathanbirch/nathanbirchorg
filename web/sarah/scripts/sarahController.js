angular.module('sarahApp', []).controller('sarahController', function($scope){

	$scope.helloMessage = "Hello Mohammad";
	$scope.angularTest = true;
	$scope.testAngularText = "this is some text to be injected on to the page...";
	$scope.someVariable = true;

	$scope.testFunction = function() {
		$scope.angularTest = false;
	}
	$scope.myTimer = function(){
	  //countdown();
	  setTimeout(function(){
	      document.getElementById('flyingLoginButton').className='btn btn-info wbutton logBut logButRun';
	      document.getElementById('flyingRegisterButton').className='btn btn-info wbutton regBut regButRun';
	      document.getElementById('flyingAboutButton').className='btn btn-info wbutton aboutBut aboutButRun';
	    }, 200);
	  setTimeout(
	    function() {
	      document.getElementById('flyingLoginButton').className='btn btn-info wbutton logBut logButRun logButRun2';
	      document.getElementById('flyingRegisterButton').className='btn btn-info wbutton regBut regButRun regButRun2';
	      document.getElementById('flyingAboutButton').className='btn btn-info wbutton aboutBut aboutButRun aboutButRun2';
	    }, 3200);
	} 
	$scope.signedInRun = function() {
		$scope.js_user_data = '<?php echo json_encode($php_data); ?>';
		$scope.user = JSON.parse($scope.js_user_data);

		//if ($scope.user) {
			$scope.hideLoginButton = true;
		//}
	}
    // $scope.openSignUpModal = function () {

    //     $scope.modalInstance = $modal.open({
    //         templateUrl: '/pages/explainAddEmailModal.php',
    //         controller: 'sarahController',
    //         windowClass: '',
    //         backdropClass: '',
    //         backdrop: 'static',
    //     resolve: {
    //         }
    //         });
    // };
});





// }]).directive('onlyNumbers', function () {
//     return {
//         require: 'ngModel',
//         link: function (scope, element, attr, ngModelCtrl) {
//             function fromUser(text) {
//                 if (text) {
//                     var transformedInput = text.replace(/[^0-9\.]/g, '');

//                     if (transformedInput !== text) {
//                         ngModelCtrl.$setViewValue(transformedInput);
//                         ngModelCtrl.$render();
//                     }
//                     return transformedInput;
//                 }
//                 return undefined;
//             }
//             ngModelCtrl.$parsers.push(fromUser);
//         }
//     };
// }).service('', function ($resource) {
//     return $resource("", {}, {
//         getData: { method: 'GET', params: {}, isArray: true }
//     });
// });