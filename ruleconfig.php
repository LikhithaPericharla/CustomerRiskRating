<?php
$db = mysqli_connect('localhost', 'root', '', 'dbshack');
$query = "SELECT * FROM rules";
    $results = mysqli_query($db, $query);
?>

<html>
<head> 
<title>Rules configuration</title>
</head>
   
<body>
  <center><table>
<tr>
<th>ID</th>
<th>Rule description  </th>

<th> Risk type</th>
<?php
while($rows=mysqli_fetch_assoc($results)){
echo "<tr>";
echo"<td>".$rows['id']."</td>";
echo"<td>".$rows['rule_desc']."</td>";
echo"<td>".$rows['risk_type']."</td>";
echo '</tr>';
}
?>
  </table></center>


</body>
</html>