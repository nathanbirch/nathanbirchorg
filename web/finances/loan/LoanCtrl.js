financesApp.controller('LoanCtrl', function($scope) {

	// DECLARE Empty Object
	$scope.loan = {
		amount:"",
		apr:"",
		years:"",
		monthlyPayment:"",
		totalPayment:"",
		totalinterest:""
	}
	window.onload = function() {
	    // If the browser supports localStorage and we have some stored data
	    if (window.localStorage && localStorage.loan_amount) {  
	        $scope.loan.amount.value = localStorage.loan_amount;
	        $scope.loan.apr.value    = localStorage.loan_apr;
	        $scope.loan.years.value  = localStorage.loan_years;
	    }
	}    
	$scope.save = function(amount, apr, years) {
    localStorage.loan_amount = amount;
    localStorage.loan_apr = apr;
    localStorage.loan_years = years;
	};
  $scope.calculate = function() {
    $scope.calculated = true;
    // Look up the input and output elements in the document
    var amount        = $scope.loan.amount;
    var apr           = $scope.loan.apr;
    var years         = $scope.loan.years;
    var payment       = $scope.loan.monthlyPayment;
    var total         = $scope.loan.totalPayment;
    var totalinterest = $scope.loan.totalinterest;
    
    var principal = parseFloat($scope.loan.amount);
    var interest = parseFloat($scope.loan.apr) / 100 / 12;
    var payments = parseFloat($scope.loan.years) * 12;

    var x = Math.pow(1 + interest, payments);   // Math.pow() computes powers
    var monthly = (principal*x*interest)/(x-1);

    if (isFinite(monthly)) {
        // Fill in the output fields, rounding to 2 decimal places
        $scope.loan.monthlyPayment = monthly.toFixed(2);
        $scope.loan.totalPayment   = (monthly * payments).toFixed(2);
        $scope.loan.totalinterest  = ((monthly*payments)-principal).toFixed(2);

        // Save the user's input so we can restore it the next time they visit
        $scope.save($scope.loan.amount, $scope.loan.apr, $scope.loan.years);


        $scope.chart(principal, interest, monthly, payments);
    }
    else {  
        $scope.loan.monthlyPayment = "";
        $scope.loan.totalPayment   = ""
        $scope.loan.totalinterest  = "";
        $scope.chart();                       // With no arguments, clears the chart
    }
	};

// Chart monthly loan balance, interest and equity in an HTML <canvas> element.
// If called with no arguments then just erase any previously drawn chart.
  $scope.chart = function(principal, interest, monthly, payments) {
    var graph = document.getElementById("graph"); // Get the <canvas> tag
    graph.width = graph.width;  // Magic to clear and reset the canvas element

    // If we're called with no arguments, or if this browser does not support
    // graphics in a <canvas> element, then just return now.
    if (arguments.length == 0 || !graph.getContext) return;

    // Get the "context" object for the <canvas> that defines the drawing API
    var g = graph.getContext("2d"); // All drawing is done with this object
    var width = graph.width, height = graph.height; // Get canvas size

    // These functions convert payment numbers and dollar amounts to pixels
    function paymentToX(n) { return n * width/payments; }
    function amountToY(a) { return height-(a * height/(monthly*payments*1.05));}

    // Payments are a straight line from (0,0) to (payments, monthly*payments)
    g.moveTo(paymentToX(0), amountToY(0));         // Start at lower left
    g.lineTo(paymentToX(payments),                 // Draw to upper right
             amountToY(monthly*payments));
    g.lineTo(paymentToX(payments), amountToY(0));  // Down to lower right
    g.closePath();                                 // And back to start
    g.fillStyle = "#A80000";                          // Light red
    g.fill();                                      // Fill the triangle
    g.font = "bold 12px sans-serif";               // Define a font
    g.fillText("Total Interest Payments", 20,20);  // Draw text in legend

    // Cumulative equity is non-linear and trickier to chart
    var equity = 0;
    g.beginPath();                                 // Begin a new shape
    g.moveTo(paymentToX(0), amountToY(0));         // starting at lower-left
    for(var p = 1; p <= payments; p++) {
        // For each payment, figure out how much is interest
        var thisMonthsInterest = (principal-equity)*interest;
        equity += (monthly - thisMonthsInterest);  // The rest goes to equity
        g.lineTo(paymentToX(p),amountToY(equity)); // Line to this point
    }
    g.lineTo(paymentToX(payments), amountToY(0));  // Line back to X axis
    g.closePath();                                 // And back to start point
    g.fillStyle = "#00CC66";                         // Now use green paint
    g.fill();                                      // And fill area under curve
    g.fillText("Total Equity", 20,35);             // Label it in green

    // Loop again, as above, but chart loan balance as a thick black line
    var bal = principal;
    g.beginPath();
    g.moveTo(paymentToX(0),amountToY(bal));
    for(var p = 1; p <= payments; p++) {
        var thisMonthsInterest = bal*interest;
        bal -= (monthly - thisMonthsInterest);     // The rest goes to equity
        g.lineTo(paymentToX(p),amountToY(bal));    // Draw line to this point
    }
    g.lineWidth = 3;                               // Use a thick line
    g.stroke();                                    // Draw the balance curve
    g.fillStyle = "black";                         // Switch to black text
    g.fillText("Loan Balance", 20,50);             // Legend entry

    // Now make yearly tick marks and year numbers on X axis
    g.textAlign="center";                          // Center text over ticks
    var y = amountToY(0);                          // Y coordinate of X axis
    for(var year=1; year*12 <= payments; year++) { // For each year
        var x = paymentToX(year*12);               // Compute tick position
        g.fillRect(x-0.5,y-3,1,3);                 // Draw the tick
        if (year == 1) g.fillText("Year", x, y-5); // Label the axis
        if (year % 5 == 0 && year*12 !== payments) // Number every 5 years
            g.fillText(String(year), x, y-5);
    }

    // Mark payment amounts along the right edge
    g.textAlign = "right";                         // Right-justify text
    g.textBaseline = "middle";                     // Center it vertically
    var ticks = [monthly*payments, principal];     // The two points we'll mark
    var rightEdge = paymentToX(payments);          // X coordinate of Y axis
    for(var i = 0; i < ticks.length; i++) {        // For each of the 2 points
        var y = amountToY(ticks[i]);               // Compute Y position of tick
        g.fillRect(rightEdge-3, y-0.5, 3,1);       // Draw the tick mark
        g.fillText(String(ticks[i].toFixed(0)),    // And label it.
                   rightEdge-5, y);
    }
	}	
});