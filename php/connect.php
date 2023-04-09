<?php
$username = $_POST['username'];
$password = $_POST['password'];

//database connection
$conn = new mysqli('localhost', 'root', 'APT1040');
if ($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);

}
else{
    $stmt = $conn->prepare("insert into Log in(username, password)
    values(?,?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    echo "Log in successful...";
    $stmt ->close();
    $conn ->close();
}



?>
