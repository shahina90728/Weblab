<html>
<body>
<form method="post">
    Enter First Number: <input type="number" name="num1" required><br><br>
    Enter Second Number: <input type="number" name="num2" required><br><br>
    <input type="submit" value="Add">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    $sum = $a + $b;

    echo "<h3>Result: $a + $b = $sum</h3>";
}
?>
</body>
</html>
