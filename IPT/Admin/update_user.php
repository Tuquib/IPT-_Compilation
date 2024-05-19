<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipt1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if all required fields are present
if(isset($_POST['stud_id'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['age'], $_POST['address'])) {
    $stud_id = $_POST['stud_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    // Prepare the SQL statement
    $sql = "UPDATE students SET fname=?, lname=?, email=?, age=?, address=? WHERE stud_id=?";
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("sssssi", $fname, $lname, $email, $age, $address, $stud_id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "User information updated successfully";
    } else {
        echo "Error updating user information: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Missing required fields";
}

// Close the database connection
$conn->close();
?>
