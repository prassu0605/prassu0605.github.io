<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "blood bank";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username= $_POST["username"]; 
    $password= $_POST["password"];
    $sql = "INSERT INTO login page (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location:login.html');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>