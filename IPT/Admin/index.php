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
          <li class="nav-item">
            <a class="nav-link-active" href="index.php">
              <button class="btn btn-block text-left">Dashboard</button>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link-active" href="profile.php">
              <button class="btn btn-block text-left">Profile</button>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link-active" href="table.php">
              <button class="btn btn-block text-left">
                Tables with Java
              </button>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link-active" href="adduser.php">
              <button class="btn btn-block text-left">Add User</button>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link-active" href="../login.php">
              <button class="btn btn-block text-left">Logout</button>
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