testApp.controller('SenhaCtrl', function($scope, $http, $rootScope) {

  $scope.generateSenha = function(baseUrlToUse) {
    // ****************************************** PART 1 ******************************************
    // ****************************************** PART 1 ******************************************
    // Get first two characters of baseUrlToUse
    var a = String.fromCharCode(baseUrlToUse[0].charCodeAt() + 1)
    a += String.fromCharCode(baseUrlToUse[1].charCodeAt() + 1)
    $scope.a = a;
    // ****************************************** PART 2 ******************************************
    // ****************************************** PART 2 ******************************************
    // Get 5 digit number from baseUrlToUse (first Two numbers * 4 repeated until length is 5)
    var b_fake = baseUrlToUse.length;
    var b_fake_2 = baseUrlToUse.length * 4;
    var b = baseUrlToUse.length * 4;
    b = String(b)
    if (b.length < 6) {
      for (i = 0; i < b.length; i++) {
        var b_temp = b[i];
        b = b.concat(b_temp);
        if(b.length == 5) {
          break;
        }
      }
    }
    // Generate random characters inside of b
    // This will change the first three numbers in b to special characters that are found by using their shift keys. 
    // Three exceptions to this: 2 will be !, 9 will be _, and 0 will be +.
    var b_temp_2 = "";
    for (i = 0; i < 3; i++) {
      b_temp_2 += $scope.generateCharacters(b[i]);
    }
    b_temp_2 += b.slice(-2);
    $scope.b = b_temp_2;
    // ****************************************** PART 3 ******************************************
    // ****************************************** PART 3 ******************************************
    // String from part a to Uppercase
    $scope.c = $scope.a.toUpperCase();
    // ****************************************** PART 4 ******************************************
    // ****************************************** PART 4 ******************************************
    // Last three numbers from b incremented up 1
    var d = b.slice(-3);
    var d_temp = 0;
    var d_temp_2 = "";
    for (i = 0; i < d.length; i++) {
      d_temp = parseInt(d[i]) + 1;
      d_temp_2 += d_temp.toString();
    }
    $scope.d = d_temp_2;
    // ****************************************** PART 5 ******************************************
    // ****************************************** PART 5 ******************************************
    // Put first 4 values together to create the senha.
    console.log("******************* baseUrlToUse: "  + baseUrlToUse + " *******************")
    console.log("A: " + $scope.a + "\n>>>>First two characters of baseUrlToUse shifted forward 1.");
    console.log("B: " + $scope.b + "\n>>>>Length of baseUrlToUse(" + b_fake + ") * 4(" + b_fake_2 + "), repeated until int.length is equal to 5(" + b + "), and first three numbers changed to special chars.");
    console.log("C: " + $scope.c + "\n>>>>A to Uppercase.");
    console.log("D: " + $scope.d + "\n>>>>Last three numbers of B each incremented by one.");
    $scope.senha = $scope.a + $scope.b + $scope.c + $scope.d;
    console.log("Senha completed: " + $scope.senha);
  }
 
  $scope.generateCharacters = function(characterToChange) {
    var return_value = "";
    switch (characterToChange) {
      case "0":
          return_value = "+";
          break;
      case "1":
          return_value = "!";
          break;
      case "2":
          return_value = "!";
          break;
      case "3":
          return_value = "#";
          break;
      case "4":
          return_value = "$";
          break;
      case "5":
          return_value = "%";
          break;
      case "6":
          return_value = "^";
          break;
      case "7":
          return_value = "&";
          break;
      case "8":
          return_value = "*";
          break;
      case "9":
          return_value = "_";
          break;
    }
    return return_value;
  }  
  $scope.generateSenha_2 = function(fullURL) {
    var url = document.createElement('a');
    url.href = fullURL;
    if(url.host.indexOf('www' >= 0)) {
      var new_url = url.host.replace(/^[^.]*./, '');
      var new_url_2 = new_url.substring(0, new_url.indexOf('.'));
    }
    else {
      var new_url_2 = new_url.substring(0, new_url.indexOf('.'));
    }
    $scope.generateSenha(new_url_2);
    // $scope.generateSenha();
  }

});	