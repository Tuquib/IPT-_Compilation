<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../bootstrap-5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
</head>

<body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="../Images/buksu-logo-min-1024x1024.png" alt="logo" style="padding-left: 0px; width: 40px; height: 40px" /><span style="padding-left: 10px">BUKSU SYSTEM</span>
            </a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <ul class="nav flex-column">
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
            <!-- END NAVBAR -->

            <main role="main" class="col-md-5 ml-sm-auto col-lg-10 px-4">
                <div class="row">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>
                        <div class="d-flex"></div>
                        <main role="main" class="col-md-5 ml-sm-auto col-lg-10 px-4" style="margin-top: 10px"></main>
                    </div>
                    <div class="col-md mx-auto">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5>Sample Table</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2201102322</td>
                                                <td>Ubald Jones L. Tuquib</td>
                                                <td>2201102322@student.buksu.edu.ph</td>
                                                <td>20</td>
                                                <td>Male</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>220110890</td>
                                                <td>Nyx Jaci</td>
                                                <td>220110890@student.buksu.edu.ph</td>
                                                <td>20</td>
                                                <td>Female</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>