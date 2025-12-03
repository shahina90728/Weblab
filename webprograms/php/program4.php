
<?php
$players = array("Rohit Sharma", "Virat Kohli", "Jasprit Bumrah", "KL Rahul");
?>
<html>
<body>
<table border="1">
<tr>
<th>SL No</th>
<th>Player Name</th>
</tr>
<?php
$i = 1;
foreach ($players as $p) {
echo "<tr>";
echo "<td>$i</td>";
echo "<td>$p</td>";
echo "</tr>";
$i++;
}
?>
</table>
</body>
</html>


