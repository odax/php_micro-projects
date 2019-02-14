<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OTPay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Overtime Paycheck Calculator</h1>
    <form action="paycheck.php" method="get">
        Hourly Rate: <input type="decimal" name="rate">
        Hours Worked: <input type="decimal" name="hours">
        Overtime Rate: <input type="decimal" name="overtimeRate">
        Hours until Overtime: <input type="decimal" name="hoursTO">
        State Tax(%): <input type="decimal" name="stateTax">
        Federal Tax(%): <input type="decimal" name="fedTax">
        <input type="submit">
    </form>
    <?php
    //declare all of the variables
    $rate = $_GET["rate"];
    $hours = $_GET["hours"];
    $overtimeRate = $_GET["overtimeRate"];
    $hoursTO = $_GET["hoursTO"];
    $stateTax = $_GET["stateTax"];
    $fedTax = $_GET["fedTax"];
    
    //here is the calculation
    //calc normal pay
    $normalPay = $hoursTO * $rate;
    //calc OT pay
    $oTPay = ($hours - $hoursTO) * ($rate * $overtimeRate);
    //pre-tax total
    $preTaxTotal = $normalPay + $oTPay;
    //convert tax-rates
    $convertedStateTax = $stateTax / 100;
    $convertedFedTax = $fedTax / 100;
    //total taxed
    $totalTaxed = ($preTaxTotal * $convertedStateTax) + ($preTaxTotal * $convertedFedTax);
    //post tax total
    $postTaxTotal = $preTaxTotal - $totalTaxed;
    echo "<p>You will be paid $postTaxTotal this pay period.</p>";
    ?>
</body>
</html>