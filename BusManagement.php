<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IntelliRide - Bus Management</title>

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

<body id="page-top">

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
                <a class="nav-link" href="BusManagement.php"
                    style="background-color: #4da3ff; color: white; padding: 10px; border-radius: 5px; display: block; text-decoration: none;">
                    <b><i class="fas fa-fw fa-cog"></i>
                        <span>Bus Management</span></b>
                </a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="PersonnelManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Personnel Management</span>
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
                    <h2 class="m-0 font-weight text-primary">Bus Management</h2>
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


                <!-- Active Bus Table Section -->
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Bus Data
                                    </div>

                                    <div class="d-flex align-items-right">
                                        <!-- Combined Dropdown and Search Input -->
                                        <div class="input-group mr-2" style="width: auto;">
                                            <select id="columnSelect" class="custom-select" style="width: auto;"
                                                onchange="clearSearch()">
                                                <option value="plate">Bus Plate</option>
                                                <option value="serial">Bus Serial</option>
                                                <option value="info">Bus Information</option>
                                            </select>
                                            <input type="text" id="busSearch" class="form-control"
                                                placeholder="Search..." onkeyup="searchBus()">
                                        </div>
                                        <button class="btn btn-primary mr-2" data-toggle="modal"
                                            data-target="#addBusModal">Add
                                            Bus</button>
                                        <button class="btn btn-warning text-white mr-2"
                                            onclick="editSelectedBuses()">Edit
                                            Selected</button>
                                        <button class="btn btn-danger" onclick="deleteSelectedBuses()">Delete
                                            Selected</button>
                                    </div>
                                    <br>
                                    <div id="busTableContainer">Loading table...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    $(document).ready(function () {
                        loadBusData();
                    });

                    function loadBusData() {
                        $.ajax({
                            url: 'CRUD/read_bus.php',
                            method: 'GET',
                            success: function (data) {
                                $('#busTableContainer').html(data);
                            },
                            error: function (xhr, status, error) {
                                console.error("An error occurred: " + error);
                                console.log(xhr.responseText);
                            }
                        });
                    }

                    function clearSearch() {
                        document.getElementById("busSearch").value = '';
                        searchBus();
                    }

                    function searchBus() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("busSearch");
                        filter = input.value.toLowerCase();
                        table = document.getElementById("busTable");
                        tr = table.getElementsByTagName("tr");
                        var columnIndex;

                        switch (document.getElementById("columnSelect").value) {
                            case 'plate':
                                columnIndex = 2;
                                break;
                            case 'serial':
                                columnIndex = 3;
                                break;
                            case 'info':
                                columnIndex = 4;
                                break;
                            default:
                                columnIndex = 2;
                        }

                        for (i = 1; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[columnIndex];
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                tr[i].style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? "" : "none";
                            }
                        }
                    }


                    function addBus() {

                        var formData = $('#addBusForm').serialize();

                        $.ajax({
                            type: 'POST',
                            url: 'CRUD/add_bus.php',
                            data: formData,
                            success: function (response) {
                                $('#message').html(response);
                                document.getElementById('addBusForm').reset();
                                $('#addBusModal').modal('hide');
                                loadBusData();
                                window.location.reload();
                            },
                            error: function (xhr, status, error) {
                                $('#message').html("An error occurred: " + error);
                            }
                        });
                    }

                    // Function to edit selected buses
                    function editSelectedBuses() {
                        // Get all selected checkboxes
                        window.editSelectedBuses = function () {
                            var selectedBusIds = [];
                            $('#busTable input[type="checkbox"]:checked').each(function () {
                                selectedBusIds.push($(this).data('bus-id'));
                            });

                            if (selectedBusIds.length !== 1) {
                                $('#editBusAlertModal').modal('show');
                                return;
                            }

                            // Populate the edit form with the selected bus data
                            const busId = selectedBusIds[0];
                            const row = $(`#busTable input[type="checkbox"][data-bus-id='${busId}']`).closest('tr');
                            const plateNumber = row.find('td:eq(2)').text(); // Bus Plate Number
                            const serialNumber = row.find('td:eq(3)').text(); // Bus Serial Number
                            const info = row.find('td:eq(4)').text(); // Bus Information

                            // Set the values in the edit form
                            $('#editBusPlate').val(plateNumber);
                            $('#editBusSerial').val(serialNumber);
                            $('#editBusInfo').val(info);
                            $('#editBusForm').data('bus-id', busId); // Store the bus ID in the form data

                            // Show the edit modal
                            $('#editBusModal').modal('show');
                        }
                    }

                    // Function to send the updated bus data
                    function editBus() {
                        const busId = $('#editBusForm').data('bus-id');
                        const formData = $('#editBusForm').serialize() + '&id=' + busId;

                        $.ajax({
                            type: 'POST',
                            url: 'CRUD/update_bus.php', // The PHP file that handles the update
                            data: formData,
                            success: function (response) {
                                $('#message').html(response);
                                $('#editBusModal').modal('hide'); // Hide the modal
                                loadBusData(); // Refresh the bus table after editing
                            },
                            error: function (xhr, status, error) {
                                $('#message').html("An error occurred: " + error);
                            }
                        });
                    }


                    $(document).ready(function () {
                        // Function to open delete confirmation modal with selected bus IDs
                        window.deleteSelectedBuses = function () {  // Make function globally accessible
                            var selectedBusIds = [];
                            $('#busTable input[type="checkbox"]:checked').each(function () {
                                selectedBusIds.push($(this).data('bus-id'));
                            });

                            if (selectedBusIds.length === 0) {
                                // Open the modal instead of alert
                                $('#deleteBusAlertModal').modal('show');
                                return;
                            }
                            // Store selected IDs in modal data attribute and open the modal
                            $('#deleteBusModal').data('selectedBusIds', selectedBusIds).modal('show');
                        };

                        // Event listener for the confirm delete button in the modal
                        $('#confirmDeleteButton').on('click', function () {
                            var selectedBusIds = $('#deleteBusModal').data('selectedBusIds');

                            $.ajax({
                                type: 'POST',
                                url: 'CRUD/delete_bus.php',
                                data: { busIds: selectedBusIds },
                                success: function (response) {
                                    $('#message').html(response);
                                    $('#deleteBusModal').modal('hide'); // Close modal after deletion
                                    loadBusData(); // Refresh bus table
                                },
                                error: function (xhr, status, error) {
                                    $('#message').html("An error occurred: " + error);
                                }
                            });
                        });
                    });



                </script>

            </div>
</body>

</html>


<!-- Add Bus Modal -->
<div class="modal fade" id="addBusModal" tabindex="-1" role="dialog" aria-labelledby="addBusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBusModalLabel">Add Bus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="clearAddBusModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addBusForm">
                    <div class="form-group">
                        <label for="busPlate">Bus Plate Number</label>
                        <input type="text" class="form-control" name="busPlate" id="busPlate"
                            placeholder="Enter Bus Plate Number" required>
                    </div>
                    <div class="form-group">
                        <label for="busCode">Bus Serial Code</label>
                        <input type="text" class="form-control" name="busCode" id="busCode"
                            placeholder="Enter Bus Serial Code" required>
                    </div>
                    <div class="form-group">
                        <label for="busInfo">Information</label>
                        <input type="text" class="form-control" name="busInfo" id="busInfo"
                            placeholder="Enter Bus Information" required>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="clearAddBusModal()">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addBus()">Add Bus</button>
            </div>
        </div>
    </div>
</div>

<script>
    function clearAddBusModal() {
        document.getElementById('addBusForm').reset(); // Clear form fields
        document.getElementById('addMessage').innerText = ''; // Clear message
    }

    // Optional: Clear fields when the modal is hidden
    $('#addBusModal').on('hidden.bs.modal', function () {
        clearAddBusModal();
    });
</script>


<!-- Edit Bus Modal -->
<div class="modal fade" id="editBusModal" tabindex="-1" role="dialog" aria-labelledby="editBusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBusModalLabel">Edit Bus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="clearEditBusModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editBusForm">
                    <div class="form-group">
                        <label for="editBusPlate">Bus Plate Number</label>
                        <input type="text" class="form-control" id="editBusPlate" name="busPlate"
                            placeholder="Enter New Bus Plate Number" required>
                    </div>
                    <div class="form-group">
                        <label for="editBusSerial">Bus Serial Code</label>
                        <input type="text" class="form-control" id="editBusSerial" name="busSerial"
                            placeholder="Enter New Bus Serial Code" required>
                    </div>
                    <div class="form-group">
                        <label for="editBusInfo">Information</label>
                        <input type="text" class="form-control" id="editBusInfo" name="busInfo"
                            placeholder="Enter New Bus Information" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="editBus()">Update Bus</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Bus Alert Modal -->
<div class="modal fade" id="editBusAlertModal" tabindex="-1" role="dialog" aria-labelledby="editBusAlertModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBusAlertModalLabel">Edit Bus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Please select exactly one bus to edit.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Delete Confirmation Alert Modal -->
<div class="modal fade" id="deleteBusAlertModal" tabindex="-1" role="dialog" aria-labelledby="deleteBusAlertModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBusAlertModalLabel">Delete Buses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Please select at least one bus to delete.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteBusModal" tabindex="-1" role="dialog" aria-labelledby="deleteBusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBusModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the selected buse(s)?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>





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
                    <button type="button" class="btn btn-primary" onclick="verifyCurrentAccount()">Verify</button>
                </form>

                <!-- Hidden form for updating admin details -->
                <div id="updateForm" style="display: none;">
                    <form>
                        <div class="form-group">
                            <label for="newAdmin">New Admin Username</label>
                            <input type="text" class="form-control" id="newAdmin" placeholder="Enter new admin username"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" class="form-control" id="newPassword"
                                placeholder="Enter new password" required>
                        </div>
                        <button type="button" class="btn btn-success" onclick="updateAccount()">Update Account</button>
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
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="index.php">Logout</a>
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



<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; IntelliRide 2024</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

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