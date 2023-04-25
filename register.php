<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cchaithanya83";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user input from the registration form
$username="";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Create SQL query to insert user data into the database
$sql = "INSERT INTO users (username, email, password)
VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
