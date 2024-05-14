<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.html" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    <form action="signup_check.php" method="post">
        <div class="d-flex align-items-center justify-text-center" style="min-height: 100vh; margin: 0;">
            <div class="container">

                <div class="card">

                    <div class="card-body">
                        <div class="alert">
                            <?php if (isset($_SESSION['success_message'])) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $_SESSION['success_message'] ?>
                                </div>
                                <?php unset($_SESSION['success_message']); ?>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['error_message'])) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $_SESSION['error_message'] ?>
                                </div>
                                <?php unset($_SESSION['error_message']); ?>
                            <?php endif; ?>

                        </div>
                        <div class="row">
                            <div class="col-md-4 mx-auto">
                                <div class="card text-center" style="width: 21rem;">
                                    <div class="card-body">
                                        <h1 style="padding-left: 10px;">Sign Up</h1>
                                        <div style="margin-bottom: 20px;">
                                            <img style="margin: auto; width: 100px; height: 100px;" src="Images/buksu-logo-min-1024x1024.png" alt="photo">
                                        </div>
                                        <input style="width: 300px;" type="text" class="form-control" name="name" placeholder="Full Name" required><br>
                                        <input style="width: 300px;" type="email" class="form-control" name="email" placeholder="Email" required><br>
                                        <input style="width: 300px;" type="number" class="form-control" name="age" placeholder="Age" required><br>
                                        <input style="width: 300px;" type="text" class="form-control" name="address" placeholder="Address" required><br>
                                        <input style="width: 300px;" type="text" class="form-control" name="gender" placeholder="Gender" required><br>
                                        <input style="width: 300px;" type="password" class="form-control" name="password" placeholder="Password" required><br>
                                        <input style="width: 300px;" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required><br>
                                        <select class="form-control" name="role" required>
                                            <option value="" selected="" disabled="">Select Role</option>
                                            <option value="Faculty">Faculty</option>
                                            <option value="Student">Student</option>
                                            <option value="Admin">Admin</option>
                                        </select><br>
                                        <button style="width: 300px;" type="submit" class="btn btn-primary">Sign Up</button><br>
                                        <p>Already have an Account? <a href="login.php">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>