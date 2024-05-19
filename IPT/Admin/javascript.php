<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap-5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>Table</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="../Images/buksu-logo-min-1024x1024.png" alt="logo" class="logo"><span class="span">BUKSU SYSTEM</span>
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

            <main role="min" class="col=md=9 ml-sm-auto col-lg-10 px-nd-4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card text-left">
                            <div class="card-body">
                                <div>
                                    <img src="../Images/profile.jpg" class="rounded-circle">
                                    <table class="table table-border">
                                        <tr>
                                            <th>Name:</th>
                                            <th>Ubald Jones L. Tuquib</th>
                                            <th>Student Id</th>
                                            <th>2201102322</th>
                                        </tr>
                                        <tr>
                                            <th>Year:</th>
                                            <th>2nd Year</th>
                                            <th>Section Code</th>
                                            <th>T193</th>
                                        </tr>
                                    </table>
                                    </img>
                                </div>
                            </div>
                            <div>
                                <h1 class="schedule">My Class Schedule</h1>
                            </div>
                            <table class="table-border">
                                <thead>
                                    <tr>
                                        <th class="units" rowspan="2">Units</th>
                                        <th class="te" rowspan="2">Unit Title</th>
                                        <th class="tt" rowspan="2">Teaching </th>
                                        <th class="units" colspan="4">Theory Marks</th>
                                    <tr>
                                        <td class="units">R level</td>
                                        <td class="no">U level</td>
                                        <td class="units">A level</td>
                                        <td class="no">Total Marks</td>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="tb">I</td>
                                        <td class="ta">Intro to Computing</td>
                                        <td class="te">5</td>
                                        <td class="ta">4</td>
                                        <td class="te">4</td>
                                        <td class="tt">0</td>
                                        <td id="total" class="ta"></td>
                                    </tr>

                                    <tr>
                                        <td class="ta">II</td>
                                        <td class="tb">Computer Programming</td>
                                        <td class="ta">6</td>
                                        <td class="tb">2</td>
                                        <td class="ts">6</td>
                                        <td class="tt">0</td>
                                        <td id="totals" class="ts"></td>
                                    </tr>

                                    <tr>
                                        <td class="tb">III</td>
                                        <td class="ts">Integrative Programming</td>
                                        <td class="ta">6</td>
                                        <td class="ts">4</td>
                                        <td class="te">0</td>
                                        <td class="ts">8</td>
                                        <td id="totalss" class="ta"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="tb">Total</td>
                                        <td id="totalsss" class="units"></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <script>
                function myFunction() {
                    document.getElementById("demo1").innerHTML = "Paragraph changed";
                }
            </script>

            <script>
                window.onload = function() {
                    calculateTotal();
                }

                function calculateTotal() {
                    document.getElementById("total").innerHTML = 4 + 4;
                    document.getElementById("totals").innerHTML = 2 + 6;
                    document.getElementById("totalss").innerHTML = 4 + 0 + 8;
                    document.getElementById("totalsss").innerHTML = 8 + 8 + 12;
                }
            </script>
</body>

</html>