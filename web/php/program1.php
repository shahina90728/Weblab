<?php
$students = array("Binshad","anu","arun","ajay","sara");
echo "<h2>Array Before Sorting:</h2>";
print_r($students);
echo"<br><br>";
asort($students);
echo"<h2>Array after ascending sort (asort):</h2>";
print_r($students);

echo"<br><br>";
arsort($students);
echo"<h2>Array after descending sort (arsort):</h2>";
print_r($students);
?>
