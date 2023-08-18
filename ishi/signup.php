<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "matrimony"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$fullname = $_POST['Name'];
$dateofbirth = $_POST['date'];
$gender = $_POST['gender'];
$email = $_POST['EMail'];
$telephone = $_POST['Telephone'];
$stateofresidence = $_POST['state'];
$sql = "INSERT INTO userdata (fullname, dateofbirth, gender, email, telephone, stateofresidence) VALUES ('$fullname', '$dateofbirth', '$gender', '$email', '$telephone', '$stateofresidence')";
if (mysqli_query($conn, $sql)) {
  echo "<script>alert('New record created successfully!')</script>";
  header('Location: membership plans.html'); 
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
