<html>
<head>
    <title>Simple Electricity Bill</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    Enter Units: 
    <input type="number" name="units" required>
    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if (isset($_POST['calculate'])) {

    $units = $_POST['units'];
    $rate = 3.5; 
    $bill = $units * $rate;

    echo "<h3>Total Bill: ₹ $bill</h3>";
}
?>

</body>
</html>
