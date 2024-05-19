<?php
// Include your database connection code here
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

if (isset($_POST['stud_id'])) {
    $stud_id = $_POST['stud_id'];
    
    // Prepare the SQL statement
    $sql = "SELECT * FROM students WHERE stud_id=?";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("i", $stud_id);
    
    // Execute the prepared statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo json_encode($user);
    } else {
        echo json_encode(['error' => 'No user found']);
    }
    
    // Close the prepared statement
    $stmt->close();
} else {
    echo json_encode(['error' => 'No stud_id provided']);
}

// Close the database connection
$conn->close();
?>
