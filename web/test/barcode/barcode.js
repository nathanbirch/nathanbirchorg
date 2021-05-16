testApp.controller('BarcodeCtrl', function($scope, $rootScope) {

  $scope.someVariable = "Angular is a go, sir.";

  $scope.function1 = function () {
    console.log("Fired from function1");
    var t1 = {
      someArray : [],
      anotherArray : [],
      score : 15
    }
    return t1;
  }
  $scope.function2 = function () {
    console.log("Fired from function2");
    var t2 = {
      someArray : [],
      anotherArray : [],
      score : 25
    }
    return t2;
  }
  $scope.function3 = function () {
    console.log("Fired from function3");
    var t3 = {
      someArray : [],
      anotherArray : [],
      score : 35
    }
    return t3;
  }


  $scope.THEfunction = function(f1, f2, f3) {
    // declare the following arrays to place the data from the services about to be called from the parameters of the function
    var barcodeTypes = [];
    var barcodeScores = [];
    // dynamically assign values from services being called in parameters to the barcodeTypes and barcodeScores arrays
    for (i = 0; i < arguments.length; i++) {
      barcodeTypes[i] = arguments[i]();
      barcodeScores[i] = barcodeTypes[i].score;
    }
    // print out each of the objects that resulted from service calls
    console.log("printing barcode objects: " + barcodeTypes + "\nprinting barcode scores: " + barcodeScores);

    // get the max value of the array of barcode scores
    var indexOfMaxValue = 0;
    for (i = 0; i < barcodeScores.length; i++) {
      if (barcodeScores[i] > 0) {
        indexOfMaxValue = i;
      }
    } 
    $scope.barcodeTypes = barcodeTypes;
    $scope.barcodeScores = barcodeScores;
    $scope.indexOfMaxValue = indexOfMaxValue;
    // assign the highest scoring barcode type to the variable $scope.generatedDetails
    $scope.generatedDetails = barcodeTypes[indexOfMaxValue];
    console.log("printing indexOfMaxValue: " + indexOfMaxValue);
    console.log("printing barcode with max value: " + $scope.generatedDetails);
  }

});	