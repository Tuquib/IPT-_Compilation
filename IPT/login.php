<?php
// Start the session
session_start();

// Check if the form is submitted via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file here
    include_once "config.php"; // Adjust the path according to your file structure

    // Check if email and password are set and not empty
    if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // Prepare a select statement
        $sql = "SELECT id, email, name, password, role FROM users WHERE email = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);

            // Set parameters
            $param_email = $_POST['email'];

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if email exists, if yes then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($id, $email, $name, $hashed_password, $role);
                    if ($stmt->fetch()) {
                        if (password_verify($_POST['password'], $hashed_password)) {
                            // Password is correct, so start a new session

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["role"] = $role;
                            $_SESSION["name"] = $name;

                            // Redirect user based on role
                            switch ($role) {
                                case 'Student':
                                    header("Location: Student/index.php");
                                    break;
                                case 'Faculty':
                                    header("Location: Faculty/index.php");
                                    break;
                                case 'Admin':
                                    header("Location: Admin/Adduser.php");
                                    break;
                                default:
                                    header("Location: index.php");
                                    break;
                            }
                        } else {
                            // Password is not valid, display a generic error message
                            echo "<div class='alert alert-danger' role='alert>'Invalid email or password.</div>";
                        }
                    }
                } else {
                    // Email doesn't exist, display a generic error message
                    echo "<div class='alert alert-danger' role='alert>'Invalid email or password.</div>";
                }
            } else {
                // Display an error message if execution failed
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signup.php" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <script>
            // Check if the session alert exists
            <?php if (isset($_SESSION['alert'])) { ?>
                // Create a Bootstrap alert dynamically
                var alertMessage = '<?php echo $_SESSION['alert']; ?>';
                var alertHTML = '<div class="alert alert-dismissible fade show" role="alert">' + alertMessage +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

                // Append the alert to the document body
                document.body.insertAdjacentHTML('beforeend', alertHTML);

                // Clear the session alert
                <?php unset($_SESSION['alert']); ?>
            <?php } ?>
        </script>

        <form method="post">
            <div class="d-flex align-items-center justify-text-center" style="min-height: 100vh; margin: 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            <div class="card text-center" style="width: 21rem;">
                                <div class="card-body">
                                    <h1 style="padding-left: 10px;">LOGIN</h1>
                                    <div style="margin-bottom: 20px;">
                                        <img style="margin: auto; width: 100px; height: 100px;" src="Images/buksu-logo-min-1024x1024.png" alt="photo">
                                    </div>
                                    <input style="width: 300px;" type="email" class="form-control" name="email" placeholder="Email Address" required><br>
                                    <input style="width: 300px;" type="password" class="form-control" name="password" placeholder="Password" required><br>
                                    <button style="width: 300px;" type="submit" class="btn btn-primary">LOGIN</button><br>
                                    <p>Forgot Password? <a href="forgot-password.php">Click Here</p>
                                    <p>Do you have an Account?<a href="signup.php">SignUp</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>