<?


$date=$_GET["date"];
$time=$_GET["time"];
$var=$_GET["field1"];
$var1=$_GET["field2"];


$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "bb";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

mysql_query("insert into alietiot values('user1',".$date.",".$time.",".$var.",".$var1.")");


?>