<html>
<center><img src="logo.png" width="1200"  height="90" title="aliet"></img>
<head>
<center> <font color="red"> <h1>Andhra Loyola Institute of Engineering and Technology</h1> </font>

<font color="blue"> <h2>Department of Electronics and Communication Engineering.</h2> </font>





<?php

$con = mysql_connect("localhost","root","root");

mysql_select_db("bb", $con);
 
$result = mysql_query("SELECT * FROM alietiot");

  
echo "<table border='1'> 

<tr> 
<th>User</th>
<th>Date</th>
<th>Time</th>
<th>Temperature.c</th>
<th>Humidity %</th>
</tr>";


 
while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

    echo "<td>" . $row['id'] . "</td>";
$column[] = $row['id']; 
  echo "<td>" . $row['date'] . "</td>";
$column1[] = $row['date'];
  echo "<td>" . $row['time'] . "</td>";
$column2[] = $row['time'];
   echo "<td>" . $row['var'] . "</td>";
$column3[]=$row['var'];
   echo "<td>" . $row['var1'] . "</td>";
$column4[]=$row['var1'];

   echo "</tr>";

  }


mysql_close($con);


?>

</body>

</html>