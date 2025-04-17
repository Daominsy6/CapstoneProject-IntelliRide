<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IntelliRide - Personnel Management</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon">
                    <img src="img/white_bus_icon.png" alt="Your Logo" style="width: 40px; height: auto;">
                </div>
                <div class="sidebar-brand-text mx-3">IntelliRide</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="BusManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Bus Management</span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="PersonnelManagement.php"
                    style="background-color: #4da3ff; color: white; padding: 10px; border-radius: 5px; display: block; text-decoration: none;">
                    <i class="fas fa-fw fa-cog"></i>
                    <span><b>Personnel Management</b></span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="PassengerManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Passenger Management</span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="TransactionManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Transactions Management</span>
                </a>

            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                system
            </div>





            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="LocationAndFare.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Location and Fare Management</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h2 class="m-0 font-weight text-primary">Personnel Management</h2>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#accountSettingsModal">
                                    <i class="fas fa-user-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Account Settings
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                </div>


                <!-- Page Heading -->
                <a target="_blank" href="https://datatables.net"></a>

                <!-- CRUD OPERATIONS -->

                <!-- Personnel Data Section -->
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Personnel Data
                                    </div>

                                    <div class="d-flex align-items-right">
                                        <!-- Combined Dropdown and Search Input -->
                                        <div class="input-group mr-2" style="width: auto;">
                                            <select id="columnSelect" class="custom-select" style="width: auto;"
                                                onchange="clearSearch()">
                                                <option value="firstName">First Name</option>
                                                <option value="lastName">Last Name</option>
                                                <option value="position">Position</option>
                                                <option value="number">Number</option>
                                                <option value="email">Email</option>
                                                <option value="date">Starting Date</option>

                                            </select>
                                            <input type="text" id="employeeSearch" class="form-control"
                                                placeholder="Search..." onkeyup="searchEmployee()">
                                        </div>
                                        <!-- Add Employee button -->
                                        <button class="btn btn-primary mr-2" data-toggle="modal"
                                            data-target="#addEmployeeModal">Add Personnel</button>
                                        <!-- Edit Selected Employee button -->
                                        <button class="btn btn-warning text-white mr-2"
                                            onclick="editSelectedEmployee()">Edit Selected</button>
                                        <!-- Delete Selected Employee button -->
                                        <button class="btn btn-danger" onclick="deleteSelectedEmployees()">Delete
                                            Selected</button>
                                    </div>
                                    <br>
                                    <div id="employeeTableContainer">Loading table...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    $(document).ready(function () {
                        loadEmployeeData(); // Load employee data on page load
                    });

                    // Function to load employee data
                    function loadEmployeeData() {
                        $.ajax({
                            url: 'CRUD/read_personnel.php',
                            method: 'GET',
                            success: function (data) {
                                $('#employeeTableContainer').html(data); // Dynamically load the employee table
                            },
                            error: function (xhr, status, error) {
                                console.error("Error loading data:", error);
                            }
                        });
                    }



                    function clearSearch() {
                        // Clear the search input when the dropdown changes
                        document.getElementById("employeeSearch").value = '';
                        searchEmployee(); // Optionally call searchEmployee to refresh the table
                    }

                    function searchEmployee() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("employeeSearch");
                        filter = input.value.toLowerCase();
                        table = document.getElementById("employeeTable");
                        tr = table.getElementsByTagName("tr");
                        var columnIndex;

                        // Determine which column to search based on the selected option
                        switch (document.getElementById("columnSelect").value) {
                            case 'firstName':
                                columnIndex = 2; // First Name column
                                break;
                            case 'lastName':
                                columnIndex = 3; // Last Name column
                                break;
                            case 'position':
                                columnIndex = 4; // Position column
                                break;
                            case 'number':
                                columnIndex = 5; // Number column
                                break;
                            case 'email':
                                columnIndex = 6; // Email column
                                break;
                            case 'date':
                                columnIndex = 7; // Email column
                                break;
                            default:
                                columnIndex = 2; // Default to First Name
                        }

                        for (i = 1; i < tr.length; i++) { // Start from 1 to skip header row
                            td = tr[i].getElementsByTagName("td")[columnIndex]; // Use selected column index
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                tr[i].style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? "" : "none";
                            }
                        }
                    }

                    function addEmployee() {
                        // Serialize the form data
                        var formData = $('#addEmployeeForm').serialize();

                        // AJAX request to submit the form data
                        $.ajax({
                            type: 'POST',
                            url: 'CRUD/add_personnel.php', // The PHP file that handles the insertion
                            data: formData,
                            success: function (response) {
                                // Display the success message
                                $('#message').html(response);
                                document.getElementById('addEmployeeForm').reset(); // Reset the form
                                $('#addEmployeeModal').modal('hide'); // Hide the modal
                                loadEmployeeData(); // Refresh the employee table after adding
                                window.location.reload();
                            },
                            error: function (xhr, status, error) {
                                $('#message').html("An error occurred: " + error);
                            }
                        });
                    }

                    // Function to edit selected employee
                    function editSelectedEmployee() {
                        const selectedCheckboxes = $('#employeeTable input[type="checkbox"]:checked');

                        if (selectedCheckboxes.length !== 1) {
                            // Show the modal instead of alert
                            $('#selectEmployeeModal').modal('show');
                            return;
                        }

                        const selectedEmployeeId = selectedCheckboxes.data('employee-id');

                        // Retrieve data from the selected row
                        const row = selectedCheckboxes.closest('tr');
                        $('#editEmployeeForm').data('employee-id', selectedEmployeeId);

                        $('#editEmployeeFirstName').val(row.find('td:eq(2)').text());
                        $('#editEmployeeLastName').val(row.find('td:eq(3)').text());
                        $('#editEmployeePosition').val(row.find('td:eq(4)').text());
                        $('#editEmployeeNumber').val(row.find('td:eq(5)').text());
                        $('#editEmployeeEmail').val(row.find('td:eq(6)').text());
                        $('#editEmployeePassword').val(row.find('td:eq(8)').text());

                        $('#editEmployeeModal').modal('show');
                    }

                    // Function to save the edited employee data
                    function saveEditedEmployee() {
                        const employeeId = $('#editEmployeeForm').data('employee-id');
                        const formData = $('#editEmployeeForm').serialize() + '&id=' + employeeId;

                        $.ajax({
                            type: 'POST',
                            url: 'CRUD/update_personnel.php',
                            data: formData,
                            success: function (response) {
                                $('#message').html(response); // Display success or error message
                                $('#editEmployeeModal').modal('hide'); // Hide modal after update
                                loadEmployeeData(); // Refresh employee table
                            },
                            error: function (xhr, status, error) {
                                $('#message').html("An error occurred: " + error); // Display error message
                            }
                        });
                    }



                    $(document).ready(function () {
                        // Function to open delete confirmation modal with selected employee IDs
                        window.deleteSelectedEmployees = function () {  // Make function globally accessible
                            var selectedEmployeeIds = [];
                            $('#employeeTable input[type="checkbox"]:checked').each(function () {
                                selectedEmployeeIds.push($(this).data('employee-id'));
                            });

                            if (selectedEmployeeIds.length === 0) {
                                // Open the notification modal instead of proceeding to deletion
                                $('#noSelectionModal').modal('show');
                                return;
                            }

                            // Store selected IDs in modal data attribute and open the deletion confirmation modal
                            $('#deleteEmployeeModal').data('selectedEmployeeIds', selectedEmployeeIds).modal('show');
                        };

                        // Event listener for the confirm delete button in the deletion confirmation modal
                        $('#confirmDeleteButton').on('click', function () {
                            var selectedEmployeeIds = $('#deleteEmployeeModal').data('selectedEmployeeIds');

                            $.ajax({
                                type: 'POST',
                                url: 'CRUD/delete_personnel.php',
                                data: { ids: selectedEmployeeIds },
                                success: function (response) {
                                    $('#message').html(response);
                                    $('#deleteEmployeeModal').modal('hide'); // Close modal after deletion
                                    loadEmployeeData(); // Refresh employee table
                                },
                                error: function (xhr, status, error) {
                                    $('#message').html("An error occurred: " + error);
                                }
                            });
                        });
                    });


                </script>

                <script>
                    // Function to toggle the visibility of passwords
                    function togglePassword(employeeId) {
                        const passwordField = document.getElementById(`password-${employeeId}`);
                        const icon = document.getElementById(`toggleIcon-${employeeId}`);

                        if (passwordField.type === "password") {
                            passwordField.type = "text";
                            icon.classList.replace("fa-eye", "fa-eye-slash");
                        } else {
                            passwordField.type = "password";
                            icon.classList.replace("fa-eye-slash", "fa-eye");
                        }
                    }
                </script>

                <style>
                    .password-field {
                        border: none;
                        color: grey;
                        font-weight: bold;
                    }

                    button {
                        background: none;
                        border: none;
                        cursor: pointer;
                    }
                </style>








                <!-- Add Employee Modal -->
                <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog"
                    aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addEmployeeModalLabel">Add Personnel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    onclick="clearAddEmployeeModal()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="addEmployeeForm">
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" name="firstName" id="firstName"
                                            placeholder="Enter First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" name="lastName" id="lastName"
                                            placeholder="Enter Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <input type="text" class="form-control" name="position" id="position"
                                            placeholder="Enter Position" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Number</label>
                                        <input type="text" class="form-control" name="number" id="number"
                                            placeholder="Enter Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" id="password"
                                            placeholder="Enter Password" required>
                                    </div>
                                    <div id="message"></div> <!-- This div will display messages -->
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="clearAddEmployeeModal()"
                                    data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" onclick="addEmployee()">Add
                                    Personnel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function clearAddEmployeeModal() {
                        document.getElementById('addEmployeeForm').reset(); // Clear form fields
                        document.getElementById('message').innerText = ''; // Clear message
                    }

                    // Optional: Clear fields when the modal is hidden
                    $('#addEmployeeModal').on('hidden.bs.modal', function () {
                        clearAddEmployeeModal();
                    });
                </script>

                <!-- Notification Modal(editing) -->
                <div class="modal fade" id="selectEmployeeModal" tabindex="-1" role="dialog"
                    aria-labelledby="selectEmployeeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="selectEmployeeModalLabel">Selection Required</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Please select exactly one employee to edit.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Edit Personnel Modal -->
                <div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog"
                    aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editEmployeeModalLabel">Edit Personnel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editEmployeeForm">
                                    <div class="form-group">
                                        <label for="editEmployeeFirstName">First Name</label>
                                        <input type="text" class="form-control" id="editEmployeeFirstName"
                                            name="firstName" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editEmployeeLastName">Last Name</label>
                                        <input type="text" class="form-control" id="editEmployeeLastName"
                                            name="lastName" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editEmployeePosition">Position</label>
                                        <input type="text" class="form-control" id="editEmployeePosition"
                                            name="position" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editEmployeeNumber">Number</label>
                                        <input type="text" class="form-control" id="editEmployeeNumber" name="number"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editEmployeeEmail">Email</label>
                                        <input type="email" class="form-control" id="editEmployeeEmail" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editEmployeePassword">Password</label>
                                        <input type="text" class="form-control" id="editEmployeePassword"
                                            name="password" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" onclick="saveEditedEmployee()">Update
                                    Employee</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Notification Modal for No Selection -->
                <div class="modal fade" id="noSelectionModal" tabindex="-1" role="dialog"
                    aria-labelledby="noSelectionModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="noSelectionModalLabel">No Selection</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Please select at least one personnel to delete.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteEmployeeModal" tabindex="-1" role="dialog"
                    aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteEmployeeModalLabel">Confirm Deletion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete the selected personnel(s)?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" id="confirmDeleteButton" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>



                <script>
                    function verifyCurrentAccount() {
                        const admin = document.getElementById('verifyAdmin').value;
                        const password = document.getElementById('verifyPassword').value;
                        const verifyMessage = document.getElementById('verifyMessage');

                        // Send data to the server to verify current account
                        fetch('CRUD/verify_account.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ admin: admin, password: password }),
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    // Clear the message and hide the verification form
                                    verifyMessage.innerText = '';
                                    document.getElementById('verifyForm').style.display = 'none';

                                    // Show the update form
                                    document.getElementById('updateForm').style.display = 'block';
                                } else {
                                    verifyMessage.innerText = 'Incorrect admin or password. Please try again.';
                                }
                            })
                            .catch((error) => {
                                console.error('Error:', error);
                                verifyMessage.innerText = 'An error occurred while verifying.';
                            });
                    }

                    function updateAccount() {
                        const newAdmin = document.getElementById('newAdmin').value;
                        const newPassword = document.getElementById('newPassword').value;

                        // Send the updated account details to the server
                        fetch('CRUD/update_account.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ admin: newAdmin, password: newPassword }),
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    alert('Account updated successfully!');
                                    location.reload();
                                } else {
                                    alert('Failed to update account.');
                                }
                            })
                            .catch((error) => {
                                console.error('Error:', error);
                                alert('An error occurred while updating the account.');
                            });
                    }
                </script>


                <!-- Account Settings Modal -->
                <div class="modal fade" id="accountSettingsModal" tabindex="-1" role="dialog"
                    aria-labelledby="accountSettingsModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="accountSettingsModalLabel">Verify Your Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="verifyForm">
                                    <div class="form-group">
                                        <label for="verifyAdmin">Current Admin</label>
                                        <input type="text" class="form-control" id="verifyAdmin"
                                            placeholder="Enter your current admin username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="verifyPassword">Current Password</label>
                                        <input type="password" class="form-control" id="verifyPassword"
                                            placeholder="Enter your current password" required>
                                    </div>
                                    <div id="verifyMessage" class="text-danger"></div>
                                    <button type="button" class="btn btn-primary"
                                        onclick="verifyCurrentAccount()">Verify</button>
                                </form>

                                <!-- Hidden form for updating admin details -->
                                <div id="updateForm" style="display: none;">
                                    <form>
                                        <div class="form-group">
                                            <label for="newAdmin">New Admin Username</label>
                                            <input type="text" class="form-control" id="newAdmin"
                                                placeholder="Enter new admin username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="newPassword">New Password</label>
                                            <input type="password" class="form-control" id="newPassword"
                                                placeholder="Enter new password" required>
                                        </div>
                                        <button type="button" class="btn btn-success" onclick="updateAccount()">Update
                                            Account</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="index.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const scrollToTopButton = document.querySelector('.scroll-to-top');

                        if (scrollToTopButton) {
                            scrollToTopButton.addEventListener('click', function (event) {
                                event.preventDefault(); // Prevent the default anchor behavior
                                window.scrollTo({
                                    top: 0,
                                    behavior: 'smooth' // Smooth scrolling
                                });
                            });
                        }
                    });
                </script>


                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; IntelliRide 2024</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    </div>
    </body>
    <!-- End of Footer -->
    <!-- End of Content Wrapper -->


    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    </body>

</html>