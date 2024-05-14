<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Change Password</title>
</head>

<body>
    <form action="login.php">
        <div class="d-flex align-items-center justify-text-center" style="min-height: 100vh; margin: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="card text-center" style="width: 21rem;">
                            <div class="card-body">
                                <h3 style="padding-left: 10px;">Change Password</h3>
                                <div style="margin-bottom: 20px;">
                                    <img style="margin: auto; width: 100px; height: 100px;" src="Images/buksu-logo-min-1024x1024.png" alt="photo">
                                </div>
                                <input style="width: 300px;" type="Password" class="form-control" placeholder="New Password" required><br>
                                <input style="width: 300px;" type="password" class="form-control" placeholder="Confirm Password" required><br>
                                <button style="width: 300px;" type="submit" class="btn btn-primary">Confirm</button><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>