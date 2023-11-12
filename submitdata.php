<?php
$server= "localhost";
$username= "root";
$password = "";
$dbname= "multistep";
// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// require_once "database.php";

$email = $_POST['email'];
$password = $_POST['password'];
$termcondition = $_POST['termcondition'];
$sql= "INSERT INTO `gbu_user` (`email`, `password`,`termcondition`) VALUES ('$email', '$password', '$termcondition')";
// echo $sql;

    if($conn->query($sql)==true){
        header("Location: ../landing_page/Landing_page.html");
        exit();
    //echo "Successfully Inserted";
}
else{
    echo "Error: $sql <br> $conn->error";
}
$conn->close();
?>

