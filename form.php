<?php
 $con = mysqli_connect("localhost","root","","tutorial_db");
 // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/*$result = mysqli_query($con,"SELECT  * from register");
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"].  "<br>";
	
  }
} else {
  echo "0 results";
}*/
$id=$_POST["id"];
$name=$_POST["name"];

$sql = "INSERT INTO register (id, name, email, Password)
VALUES ('$id','$name' , 'john@example.com','123')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
mysqli_close($con);
?>
 