<?php
include "db.php";

$empid = $_POST["empid"];
$empname = $_POST["empname"];
$sql = "INSERT INTO employee VALUES ('$empid', '$empname')";
$result = mysql_query($sql, $link);

if($result == false) {
  echo 'Error: cannot execute query';
  exit;
}
else {
  echo "Registered successfully!";
  echo "<br/>";
  echo "<a href='index.php'>Go to Search page.</a>";
  }


mysql_close($link);

?>