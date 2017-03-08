<?php
include "db.php";

$empid = $_POST["empid"];
$sql = "SELECT * FROM employee WHERE id = '$empid'";
$result = mysql_query($sql, $link);

if($result == false) {
  echo '<a href="login.php">Error: cannot execute query</a>';
  exit;
}

$num_rows = mysql_num_rows($result);
if($num_rows > 0)
{	
	 echo "<table><tr><th>ID</th><th>Name</th></tr>";
	 
	while($row = mysql_fetch_array($result)) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>";
    }
	 echo "</table>";
}
else
  echo "0 results";

mysql_free_result($result);
mysql_close($link);

?>