<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ex";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $donorID = $_POST["donorID"]; 
    $name = $_POST["name"];
    $bloodType = $_POST["bloodType"];
    $contact = $_POST["contact"];
    $donationDate = $_POST["donationDate"]; 
    $eligibility = $_POST["eligibility"];
    $sql = "INSERT INTO donors (DonorID, name, blood_type, contact, donation_date, eligibility) VALUES ('$donorID', '$name', '$bloodType', '$contact', '$donationDate', '$eligibility')";
    if ($conn->query($sql) === TRUE) {
        echo "New donor record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>