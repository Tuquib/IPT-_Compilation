<!-- add.php -->
<?php

session_start();

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

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addUsers</title>

    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css"> <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


    <title>Calculator</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="../Images/buksu-logo-min-1024x1024.png" alt="logo" style="padding-left: 0px; width: 40px; height: 40px;"><span style="padding-left: 10px; font-family: Poppins, sans-serif;">BUKSU SYSTEM</span>
        </a>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-light col-auto col-md-4 col-lg-2 min-vh-100 d-flex d-flex-column justify-content-between">
                <div class="bg-light p-2">

                    <ul class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
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
                </div>
            </div>




            <main role="main" class="col-med-5 ml-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
                <div class="row">
                    <div class="col-md mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h2>User Information Form</h2>

                                <form id="userInfoForm">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-id-card"></i></span>
                                        <input type="number" class="form-control" id="stud_id" placeholder="Student ID*" aria-label="Student ID" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-account"></i></span>
                                        <input type="text" class="form-control" id="fname" placeholder="First Name" aria-label="First Name" aria-describedby="addon-wrapping" required>
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name" aria-label="Last Name" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-email-check"></i></span>
                                        <input type="email" class="form-control" id="email" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-counter"></i></span>
                                        <input type="number" class="form-control" id="age" placeholder="Age" aria-label="Age" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-map-marker"></i></span>
                                        <input type="text" class="form-control" id="address" placeholder="Address" aria-label="Address" aria-describedby="addon-wrapping" required>
                                    </div>
                                    <br>
                                    <button style="display: block; width: 100%; margin: 0 auto;" class="btn btn-primary" type="button" onclick="addUser()">Add User</button>
                                </form>

                                <br>
                                <div id="liveAlertPlaceholder"></div>
                                <h4>STUDENTS LIST</h4>
                                <table id="studentTable" class="table table-bordered secondary">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Age</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Check if there are any rows returned from the query
                                        if ($result->num_rows > 0) {
                                            // Output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row["stud_id"] . "</td>";
                                                echo "<td>" . $row["fname"] . " " . $row["lname"] . "</td>";
                                                echo "<td>" . $row["email"] . "</td>";
                                                echo "<td>" . $row["address"] . "</td>";
                                                echo "<td>" . $row["age"] . "</td>";
                                                echo "<td>";
                                                echo "<button class='btn btn-info edit-btn' type='button' value='Edit' style='margin-right: 4px;' onclick='openUpdateModal(" . $row["stud_id"] . ")'><i class='mdi mdi-pencil' ></i></button>";
                                                echo "<button class='btn btn-danger delete-btn' type='button' value='Delete' onclick='deleteUser(" . $row["stud_id"] . ")'><i class='mdi mdi-delete'></i></button>";
                                                echo "</td>";
                                                // Add actions here if needed
                                                echo "</tr>";
                                            }
                                            echo "</tbody></table>";

                                            // Echo out the DataTables initialization code here
                                            echo "<script>
                    $(document).ready(function() {
                        $('#studentTable').DataTable(); // Initialize DataTables for your table
                    });
                    </script>";
                                        } else {
                                            // If no rows are returned, display a message
                                            echo "<p>No data found.</p>";
                                        }

                                        // Check for errors in the SQL query execution
                                        if (!$result) {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update User Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="updateForm">
                                    <input type="hidden" id="update_stud_id" value="">
                                    <div class="form-group">
                                        <label for="update_fname">First Name</label>
                                        <input type="text" class="form-control" id="update_fname" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_lname">Last Name</label>
                                        <input type="text" class="form-control" id="update_lname" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_email">Email</label>
                                        <input type="email" class="form-control" id="update_email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_age">Age</label>
                                        <input type="number" class="form-control" id="update_age" placeholder="Age" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="update_address">Address</label>
                                        <input type="text" class="form-control" id="update_address" placeholder="Address" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="updateUser()">Save changes</button>

                            </div>
                        </div>
                    </div>
                </div>

            </main>


            <script>
                $(document).ready(function() {
                    $('#studentTable').DataTable(); // Initialize DataTables for your table
                });
            </script>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> <!-- DataTables JS -->
            <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script> <!-- DataTables Bootstrap 4 JS -->


            <script>
                function updateUser() {
                    // Get user input values
                    let stud_id = $("#update_stud_id").val();
                    let fname = $("#update_fname").val();
                    let lname = $("#update_lname").val();
                    let email = $("#update_email").val();
                    let age = $("#update_age").val();
                    let address = $("#update_address").val();

                    // Make AJAX request to update_user.php
                    $.ajax({
                        url: 'update_user.php',
                        method: 'POST',
                        data: {
                            stud_id: stud_id,
                            fname: fname,
                            lname: lname,
                            email: email,
                            age: age,
                            address: address
                        },
                        success: function(response) {
                            // Close the modal
                            $('#updateModal').modal('hide');
                            // Show success alert
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                            // Reload the page
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            // Display error message
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                        }
                    });
                }




                function validateEmail(email) {
                    // Regular expression pattern to check for "@" symbol
                    var pattern = /\S+@\S+\.\S+/;
                    return pattern.test(email);
                }

                function addUser() {
                    // Get user input values
                    let stud_id = $("#stud_id").val();
                    let fname = $("#fname").val();
                    let lname = $("#lname").val();
                    let email = $("#email").val();
                    let age = $("#age").val();
                    let address = $("#address").val();

                    // Check if any of the required fields are empty
                    if (stud_id === "" || fname === "" || lname === "" || email === "" || age === "" || address === "") {
                        // Display error message if any required field is empty
                        $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Please fill in all the required fields.</div>`);

                        return; // Exit function if any required field is empty
                    }

                    // Validate email
                    if (!validateEmail(email)) {
                        // Display error message if email is invalid
                        $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Please enter a valid email address.</div>`);
                        return; // Exit function if email is invalid
                    }

                    // Make AJAX request to add_user.php
                    $.ajax({
                        url: 'add_user.php',
                        method: 'POST',
                        data: {
                            stud_id: stud_id,
                            fname: fname,
                            lname: lname,
                            email: email,
                            age: age,
                            address: address
                        },
                        success: function(response) {
                            // Reload the page
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                            // Display success message after a short delay
                            setTimeout(function() {
                                location.reload();
                            }, 2000); // Adjust the delay time as needed
                        },

                        error: function(xhr, status, error) {
                            // Display error message
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                        }
                    });
                }

                function deleteUser(stud_id) {
                    var confirmation = confirm("Are you sure you want to delete this data?");
                    if (confirmation) {
                        // Make AJAX request to delete_user.php
                        $.ajax({
                            url: 'delete_user.php',
                            method: 'POST',
                            data: {
                                stud_id: stud_id
                            },
                            success: function(response) {
                                // Reload the page

                                $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                                // Display success message after a short delay
                                setTimeout(function() {
                                    location.reload();
                                }, 2000); // Adjust the delay time as needed
                            },
                            error: function(xhr, status, error) {
                                // Display error message
                                $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                            }
                        });
                    }
                }


                function openUpdateModal(stud_id) {
                    $.ajax({
                        url: 'get_user.php',
                        method: 'POST',
                        data: {
                            stud_id: stud_id
                        },
                        success: function(response) {
                            let user = JSON.parse(response);
                            $("#update_stud_id").val(user.stud_id);
                            $("#update_fname").val(user.fname);
                            $("#update_lname").val(user.lname);
                            $("#update_email").val(user.email);
                            $("#update_age").val(user.age);
                            $("#update_address").val(user.address);
                            $("#updateModal").modal('show');
                        },
                        error: function(xhr, status, error) {
                            $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                        }
                    });
                }

                // Rename the deleteUser function to avoid conflicts
                function deleteUserFromModal(stud_id) {
                    var confirmation = confirm("Are you sure you want to delete this data?");
                    if (confirmation) {
                        $.ajax({
                            url: 'delete_user.php',
                            method: 'POST',
                            data: {
                                stud_id: stud_id
                            },
                            success: function(response) {
                                $("#liveAlertPlaceholder").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            },
                            error: function(xhr, status, error) {
                                $("#liveAlertPlaceholder").html(`<div class="alert alert-danger" role="alert">Error: ${xhr.responseText}</div>`);
                            }
                        });
                    }
                }
            </script>
</body>

</html>