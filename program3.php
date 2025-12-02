<?php
$students = array("Shahina","Alfiya","Rojina","Aneesa","Sabina");
echo"<h2>Array Before Sorting:</h2>";
print_r($students);
echo "<br><br>";

asort($students);
echo"<h2>Array After Ascending Sorting(asort):</h2>";
print_r($students);

echo "<br><br>";
arsort($students);
echo"<h2>Array After Descending Sorting(arsort):</h2>";
print_r($students);
?>