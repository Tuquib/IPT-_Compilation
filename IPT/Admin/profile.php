<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../bootstrap-5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Poppins
    :ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>

    <!----START NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="../Images/buksu-logo-min-1024x1024.png" alt="logo" style="padding-left: 0px; width: 40px; height: 40px;"><span style="padding-left: 10px; font-family: Poppins, sans-serif;">BUKSU SYSTEM</span>
        </a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <ul class="nav flex-column" style="margin-top: 20px;">
                    <li class="nav-item1 py-2 py-sm-0">
                        <a href="index.php" class="nav-link text-dark" aria-current="page">
                            <i class="fa fa-gauge"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item1 py-2 py-sm-0">
                        <a href="profile.php" class="nav-link text-dark" aria-current="page">
                            <i class="fa-solid fa-user"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item1 py-2 py-sm-0">
                        <a href="table.php" class="nav-link text-dark" aria-current="page">
                            <i class="fa-solid fa-table"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">Table</span>
                        </a>
                    </li>
                    <li class="nav-item1 py-2 py-sm-0">
                        <a href="javascript.php" class="nav-link text-dark" aria-current="page">
                            <i class="fa-brands fa-js"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">JavaScript</span>
                        </a>
                    </li>
                    <li class="nav-item1 py-2 py-sm-0">
                        <a href="calculator.php" class="nav-link text-dark" aria-current="page">
                            <i class="fa-solid fa-calculator"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">Calculator</span>
                        </a>
                    </li>
                    <li class="nav-item1 py-2 py-sm-0">
                        <a href="Adduser.php" class="nav-link text-dark" aria-current="page">
                            <i class="fa-solid fa-plus"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">Add Users</span>
                        </a>
                    </li>
                    <li class="nav-item1 py-2 py-sm-0">
                        <a href="add.php" class="nav-link text-dark" aria-current="page">
                            <i class="fa-solid fa-plus"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">Add Users PHP</span>
                        </a>
                    </li>
                    <li class="nav-item1 py-2 py-sm-0">
                        <a class="nav-link text-dark" href="../login.php" aria-current="page">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <span class="fs-5 ms-3 d-none d-sm-inline">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!----END NAVABAR-->

            <main role="min" class="col=md=9 ml-sm-auto col-lg-10 px-nd-4" style="margin-top: 10px; padding-right: 30px;">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="../Images/profile.jpg" class="rounded-circle" style="width: 150px; height: 150px;">
                                </div>
                                <h5>Ubald Jones L. Tuquib</h5>
                                <p class="card-text" style="text-align: left; font-size: small; font-style: italic;">Email Address<br><strong><span style="color:rgb(65, 65, 65); font-size: 14px; font-style: normal;">2201102322@student.buksu.edu.ph</strong></p>
                                <p class="card-text" style="text-align: left; font-size: small; font-style: italic;">Phone<br><strong><span style="font-size: 14px; font-style: normal;">09631308925</strong></p>
                                <p class="card-text" style="text-align: left; font-size: small; font-style: italic;">Address<br><strong><span style="font-size: 14px; font-style: normal;">Zone 3, Kisolon, Sumilao, Bukidnon</strong></p>
                                <p class="card-text" style="text-align: left; font-size: small; font-style: italic;">Social</p>
                                <div>
                                    <button class="btn rounded-circle btn-secondary"><i class="fa-brands fa-facebook"></i></button>
                                    <button class="btn rounded-circle btn-secondary"><i class="fa-brands fa-instagram"></i></button>
                                    <button class="btn rounded-circle btn-secondary"><i class="fa-brands fa-twitter"></i></button><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <label for="fname">Fullname:</label><br>
                                <input style="width: 300px;" type="text" id="fname" name="fname" value="Ubald Jones L.Tuquib" disabled><br>
                                <label for="lemail">Email:</label><br>
                                <input style="width: 300px;" type="text" id="lemail" name="lname" value="2201102322@student.buksu.edu.ph" disabled><br>
                                <label for="fpass">Password:</label><br>
                                <input style="width: 300px;" type="password" id="lpass" name="fname" value="yuwvgdwvagvdawvgv" disabled><br>
                                <label for="lphone">Phone Number:</label><br>
                                <input style="width: 300px;" type="number" id="lphone" name="lname" value="09631308925" disabled><br>
                                <label for="lmessage">Message</label><br>
                                <input style="height: 90px;" type="text" id="lname" name="lname" class="form-control">
                                <label for="lcountry">Select Country:</label><br>
                                <select style="width: 300px;" name="country" id="country">
                                    <option value="Philippines">Philippines</option>
                                    <option value="china">China</option>
                                    <option value="usa">USA</option>
                                    <option value="japan">Japan</option>
                                </select>
                                <br><br><button style="width: 200px; background-color: green;" type="submit" class="btn btn-primary">Update Profile</button><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jqsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrap.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!---Chart.js-->
    <script src="http://cdn.jsdelivr.net/npm/chart.js"></script>

    <!---Customs Scripts-->
    <script src="scripts.js"></script>

</body>

</html>