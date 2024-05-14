<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                    <li class="nav-item">
                        <a class="nav-link-active" href="index.php">
                            <button class="btn btn-block text-left" style="font-family: Poppins, sans-serif;">
                                Dashboard
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="profile.php">
                            <button class="btn btn-block text-left" style="font-family: Poppins, sans-serif;">
                                Profile
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="table.php">
                            <button class="btn btn-block text-left" style="font-family: Poppins, sans-serif;">
                                Tables with Java
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="adduser.php">
                            <button class="btn btn-block text-left" style="font-family: Poppins, sans-serif;">
                                Add User
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-active" href="../login.php">
                            <button class="btn btn-block text-left">Logout</button>
                        </a>
                    </li>
                </ul>
            </nav>
            <!----END NAVABAR-->

            <!--Starting Input-->
            <main role="min" class="col=md=9 ml-sm-auto col-lg-10 px-nd-4" style="margin-top: 10px; padding-right: 30px;">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add User</h3>
                        </div>
                        <div class="card-body">
                            <form id="userInfoForm">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-id-card"></i></span>
                                    <input type="number" class="form-control" id="stud_id" placeholder="Student ID" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-circle"></i></span>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-email"></i></span>
                                    <input type="email" class="form-control" id="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-counter"></i></span>
                                    <input type="number" class="form-control" id="age" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker"></i></span>
                                    <input type="text" class="form-control" id="address" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <button style="width: 100%;" class="btn btn-primary" type="button" onclick="adduser()"><i class="mdi mdi-content-save-outline"></i>Save</button>
                            </form>
                        </div>
                    </div>

                    <!-- Search bar here -->
                    <div class="input-group mb-3" style="margin-top: 10px; margin-left: 10px;">
                        <button class="input-group-text">Search for..</button>
                        <input style="width: 300px; border-radius: 0 5px 5px 0;" type="text" id="Input">
                    </div>

                    <!-- Input will end here -->
                    <div id="liveAlert" style="margin-top: 10px;"></div>
                    <!-- The table will be constructed -->
                    <div class="card" style="margin-top: 10px;">
                        <div class="card-body">
                            <table class="table table-bordered" id="userTable">
                                <thead>
                                    <tr class="header">
                                        <th scope="col">Student ID</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Adress</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="userTableBody">
                                    <!-- the data will be residing -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <!-- ends here -->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                function adduser() {

                    let stud_id = $("#stud_id").val();
                    let fname = $("#fname").val();
                    let lname = $("#lname").val();
                    let email = $("#email").val();
                    let age = $("#age").val();
                    let address = $("#address").val();

                    if (stud_id !== "") {
                        let newRow = $("<tr></tr>");

                        newRow.append(`
            <td>${stud_id}</td>
            <td>${fname} ${lname}</td>
            <td>${email}</td>
            <td>${age}</td>
            <td>${address}</td>
            <td>
                <button class="btn btn-warning editBtn" type="button" value="Edit"><i class="mdi mdi-pencil"></i></button>
                <button class="btn btn-danger deleteUserBtn" type="button" value="Delete"><i class="mdi mdi-delete"></i></button>
            </td>
          `);

                        $("#userTableBody").append(newRow);
                        $("#liveAlert").html('<div class="alert alert-success" role="alert">Data has been added!</div>');

                    } else {
                        $("#liveAlert").html('<div class="alert alert-danger" role="alert">Please fill in the required data!</div>');
                    }


                    $(document).ready(function() {
                        $(document).on("click", ".editBtn", function() {
                            $("#btn1").text("Update");
                            $("#stud_id").val(stud_id);
                            $("#fname").val(fname);
                            $("#lname").val(lname);
                            $("#email").val(email);
                            $("#age").val(age);
                            $("#address").val(address);


                            $(this).closest("tr").remove();
                        })
                    });

                    $("#stud_id, #fname, #lname, #age, #address, #email").val("");

                }

                function deleteUser() {
                    var confirmation = confirm("are you sure you want to delete this data?");
                    if (confirmation) {
                        $(this).closest("tr").remove();
                        $("#liveAlert").html('<div class="alert alert-warning" role="alert">Data Has Been Deleted!</div>');
                    }
                }
                $(document).ready(function() {
                    $(document).on("click", ".btn-danger", deleteUser);
                });

                // here you can search the user
                $(document).ready(function() {
                    $("#Input").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#userTableBody tr").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>