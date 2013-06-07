<!DOCTYPE html>
<html>
<body>
<?php
$con=mysqli_connect("localhost","root","sqlrule","cdcol");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM cds");

while($row = mysqli_fetch_array($result))
  {
  echo $row['titel'] . " " . $row['jahr'];
  echo "<br>";
  }
?>

<script src="http://code.jquery.com/jquery-2.0.0.js" type="text/javascript" ></script>
</body>
