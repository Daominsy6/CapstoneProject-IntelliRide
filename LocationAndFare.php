<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IntelliRide - Location and fare Management</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                <a class="nav-link collapsed" href="BusManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Bus Management</span>
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
                <a class="nav-link" href="LocationAndFare.php"
                    style="background-color: #4da3ff; color: white; padding: 10px; border-radius: 5px; display: block; text-decoration: none;">
                    <i class="fas fa-fw fa-table"></i>
                    <b><span>Location and fare Management</span></b></a>
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
                    <h2 class="m-0 font-weight text-primary">Location and Fare Management</h2>
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
                    <a target="_blank" href="https://datatables.net"></a>

                    <!-- Include Bootstrap CSS and JS for modal functionality -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



                    <div class="row">
                        <!-- Fare Calculator Section -->
                        <div class="col-xl-8 col-md-8 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Fare Calculator
                                            </div>
                                            <br>
                                            <form id="fareCalculatorForm">
                                                <div class="form-group">
                                                    <label for="fromLocation">From:</label>
                                                    <select id="fromLocation" class="form-control">
                                                        <!-- From location options will be dynamically loaded -->
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="toLocation">To:</label>
                                                    <select id="toLocation" class="form-control">
                                                        <!-- To location options will be dynamically loaded -->
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-success mr-2"
                                                        onclick="computeFare()">Compute Fare</button>
                                                    <button type="button" class="btn btn-primary mr-2"
                                                        id="applyDiscountButton" onclick="applyDiscount()">Apply
                                                        Discount</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        onclick="resetFields()">Reset Fields</button>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fareDisplay">Calculated Fare:</label>
                                                    <p id="fareDisplay" class="form-control">₱0.00</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                fetchLocations(); // Fetch and populate the dropdowns on page load
                            });

                            // Fetch locations and populate the dropdowns
                            function fetchLocations() {
                                fetch('CRUD/fetch_locations.php')
                                    .then(response => response.json())
                                    .then(data => {
                                        const fromDropdown = document.getElementById('fromLocation');
                                        const toDropdown = document.getElementById('toLocation');

                                        data.forEach(location => {
                                            const option = `<option value="${location.post_km}">${location.location}</option>`;
                                            fromDropdown.innerHTML += option;
                                            toDropdown.innerHTML += option;
                                        });
                                    })
                                    .catch(error => console.error("Error fetching locations:", error));
                            }

                            // Compute fare based on selected locations
                            function computeFare() {
                                const fromKm = parseInt(document.getElementById('fromLocation').value);
                                const toKm = parseInt(document.getElementById('toLocation').value);

                                if (isNaN(fromKm) || isNaN(toKm)) {
                                    alert('Please select valid locations.');
                                    return;
                                }

                                fetch('CRUD/fetch_fare_calcu.php')
                                    .then(response => response.json())
                                    .then(settings => {
                                        const regularFare = parseFloat(settings.regular);
                                        const increasePerKm = parseFloat(settings.increase);

                                        let fare = regularFare;

                                        // Check if the selected locations are the same
                                        if (fromKm === toKm) {
                                            // Display only the regular fare
                                            document.getElementById('fareDisplay').innerText = `₱${regularFare.toFixed(2)}`;
                                        } else {
                                            // Calculate distance in KM
                                            const distanceKm = Math.abs(toKm - fromKm);

                                            // Calculate fare with additional cost for distances beyond 4 KM
                                            if (distanceKm > 4) {
                                                fare += (distanceKm - 4) * increasePerKm;
                                            }

                                            document.getElementById('fareDisplay').innerText = `₱${fare.toFixed(2)}`;
                                        }

                                        // Enable the Apply Discount button
                                        document.getElementById('applyDiscountButton').disabled = false;
                                    })
                                    .catch(error => console.error("Error fetching fare settings:", error));
                            }

                            // Apply discount to the calculated fare
                            function applyDiscount() {
                                const fareText = document.getElementById('fareDisplay').innerText;
                                const fare = parseFloat(fareText.replace('₱', ''));

                                if (isNaN(fare) || fare === 0) {
                                    alert('Please compute the fare first.');
                                    return;
                                }

                                fetch('CRUD/fetch_fare_calcu.php')
                                    .then(response => response.json())
                                    .then(settings => {
                                        const discountPercent = parseFloat(settings.discount);

                                        // Calculate discounted fare
                                        const discountedFare = fare - (fare * (discountPercent / 100));
                                        document.getElementById('fareDisplay').innerText = `₱${discountedFare.toFixed(2)}`;

                                        // Disable Apply Discount button after applying
                                        document.getElementById('applyDiscountButton').disabled = true;
                                    })
                                    .catch(error => console.error("Error applying discount:", error));
                            }

                            // Reset all fields and fare display
                            function resetFields() {
                                document.getElementById('fromLocation').selectedIndex = 0;
                                document.getElementById('toLocation').selectedIndex = 0;
                                document.getElementById('fareDisplay').innerText = '₱0.00';
                                document.getElementById('applyDiscountButton').disabled = false; // Enable discount button
                            }
                        </script>


                        <!-- Right Side Cards -->
                        <div class="col-xl-4 col-md-4">
                            <!-- Regular Fare -->
                            <div class="card shadow mb-4" style="padding: 10px;">
                                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Regular Fare:</h6>
                                    <div class="d-flex align-items-center">
                                        <p id="regularFareDisplay" class="m-0 mr-3">₱14.00</p>
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#editRegularFareModal">Edit Fare</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Regular Fare Modal -->
                            <div class="modal fade" id="editRegularFareModal" tabindex="-1" role="dialog"
                                aria-labelledby="editRegularFareModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form id="editRegularFareForm">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editRegularFareModalLabel">Edit Regular Fare
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="regularFare">Regular Fare Amount</label>
                                                    <input type="number" class="form-control" id="regularFare"
                                                        name="regularFare" min="0" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success"
                                                    onclick="updateRegularFare()">Save
                                                    changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <script>
                                // Function to load the regular fare initially
                                function loadRegularFare() {
                                    fetch('CRUD/fetch_regular.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.status === 'success' && data.regular !== null && !isNaN(data.regular)) {
                                                document.getElementById('regularFareDisplay').innerText = ' ₱' + parseFloat(data.regular).toFixed(2);
                                            } else {
                                                document.getElementById('regularFareDisplay').innerText = 'Error loading fare';
                                                console.error("Invalid data received:", data);
                                            }
                                        })
                                        .catch(error => {
                                            console.error("Error loading fare:", error);
                                            document.getElementById('regularFareDisplay').innerText = 'Error loading fare';
                                        });
                                }


                                // Function to update the regular fare value
                                function updateRegularFare() {
                                    const regularFareValue = document.getElementById('regularFare').value;

                                    if (!regularFareValue || isNaN(regularFareValue)) {
                                        alert("Please enter a valid number for the fare.");
                                        return;
                                    }

                                    fetch('CRUD/update_regular.php', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded'
                                        },
                                        body: 'regular=' + encodeURIComponent(regularFareValue)
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.status === 'success') {
                                                document.getElementById('regularFareDisplay').innerText = '₱' + parseFloat(data.regular).toFixed(2);
                                                const editRegularFareModal = document.getElementById('editRegularFareModal');
                                                editRegularFareModal.classList.remove('show');
                                                editRegularFareModal.setAttribute('aria-hidden', 'true');
                                                editRegularFareModal.style.display = 'none';
                                                document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
                                                window.location.reload();
                                            } else {
                                                alert('Error updating fare: ' + data.message);
                                                console.error(data.message);
                                            }
                                        })
                                        .catch(error => {
                                            console.error("An error occurred:", error);
                                            alert('An error occurred while updating the fare.');
                                        });
                                }

                                // Load the regular fare on page load
                                document.addEventListener('DOMContentLoaded', loadRegularFare);
                            </script>


                            <!-- Fare Discount -->
                            <div class="card shadow mb-4" style="padding: 10px;">
                                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Fare Discount:</h6>
                                    <div class="d-flex align-items-center">
                                        <p id="discountDisplay" class="m-0 mr-3">20%</p>
                                        <button class="btn btn-warning" style="background-color: orange; color: white;"
                                            data-toggle="modal" data-target="#editDiscountModal">Edit Discount</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Discount Modal -->
                            <div class="modal fade" id="editDiscountModal" tabindex="-1" role="dialog"
                                aria-labelledby="editDiscountModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form id="editDiscountForm">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editDiscountModalLabel">Edit Discount</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="discount">Discount Percentage (%)</label>
                                                    <input type="number" class="form-control" id="discount"
                                                        name="discount" min="0" max="100" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-orange"
                                                    style="background-color: orange; color: white;"
                                                    onclick="updateDiscount()">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <script>
                                // Function to load the discount initially
                                function loadDiscount() {
                                    fetch('CRUD/fetch_discount.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.status === 'success') {
                                                document.getElementById('discountDisplay').innerText = '  ' + data.discount + '%';
                                            } else {
                                                document.getElementById('discountDisplay').innerText = 'Error loading discount';
                                                console.error(data.message);
                                            }
                                        })
                                        .catch(error => {
                                            console.error("Error loading discount:", error);
                                            document.getElementById('discountDisplay').innerText = 'Error loading discount';
                                        });
                                }

                                // Function to update the discount value
                                function updateDiscount() {
                                    const discountValue = document.getElementById('discount').value;

                                    // AJAX request to update the discount
                                    fetch('CRUD/update_discount.php', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded'
                                        },
                                        body: 'discount=' + encodeURIComponent(discountValue)
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.status === 'success') {
                                                document.getElementById('discountDisplay').innerText = data.discount + '%'; // Update displayed discount

                                                // Close the modal by manually removing the 'show' class and hiding it
                                                const editDiscountModal = document.getElementById('editDiscountModal');
                                                editDiscountModal.classList.remove('show');
                                                editDiscountModal.setAttribute('aria-hidden', 'true');
                                                editDiscountModal.style.display = 'none';
                                                window.location.reload();

                                                // Also trigger a backdrop removal if it's still present
                                                document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
                                            } else {
                                                alert('Error updating discount: ' + data.message);
                                                console.error(data.message);
                                            }
                                        })
                                        .catch(error => {
                                            console.error("An error occurred:", error);
                                            alert('An error occurred while updating the discount.');
                                        });
                                }

                                // Load the discount on page load
                                document.addEventListener('DOMContentLoaded', loadDiscount);
                            </script>



                            <!-- Increase Fare -->
                            <div class="card shadow mb-4" style="padding: 10px;">
                                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Increase Fare:</h6>
                                    <div class="d-flex align-items-center">
                                        <p id="increaseFareDisplay" class="m-0 mr-3">₱2.25</p>
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#editIncreaseFareModal">Edit Increase</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Edit Increase Fare Modal -->
                    <div class="modal fade" id="editIncreaseFareModal" tabindex="-1" role="dialog"
                        aria-labelledby="editIncreaseFareModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form id="editIncreaseFareForm">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editIncreaseFareModalLabel">Edit Increase
                                            Fare
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="increaseFare">Increase Fare Amount</label>
                                            <input type="number" class="form-control" id="increaseFare"
                                                name="increaseFare" min="0" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger" onclick="updateIncreaseFare()">Save
                                            changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        // Function to load the increase fare initially
                        function loadIncreaseFare() {
                            fetch('CRUD/fetch_increase.php') // Correct endpoint
                                .then(response => response.json())
                                .then(data => {
                                    if (data.status === 'success' && data.increase !== null && !isNaN(data.increase)) {
                                        document.getElementById('increaseFareDisplay').innerText = '₱' + parseFloat(data.increase).toFixed(2);
                                    } else {
                                        document.getElementById('increaseFareDisplay').innerText = 'Error loading fare';
                                        console.error("Invalid data received:", data);
                                    }
                                })
                                .catch(error => {
                                    console.error("Error loading fare:", error);
                                    document.getElementById('increaseFareDisplay').innerText = 'Error loading fare';
                                });
                        }

                        // Function to update the increase fare value
                        function updateIncreaseFare() {
                            const increaseFareValue = document.getElementById('increaseFare').value;

                            if (!increaseFareValue || isNaN(increaseFareValue)) {
                                alert("Please enter a valid number for the fare.");
                                return;
                            }

                            fetch('CRUD/update_increase.php', { // Correct endpoint
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/x-www-form-urlencoded'
                                },
                                body: 'increase=' + encodeURIComponent(increaseFareValue)
                            })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.status === 'success') {
                                        document.getElementById('increaseFareDisplay').innerText = '₱' + parseFloat(data.increase).toFixed(2);

                                        // Close the modal
                                        const editIncreaseFareModal = document.getElementById('editIncreaseFareModal');
                                        editIncreaseFareModal.classList.remove('show');
                                        editIncreaseFareModal.setAttribute('aria-hidden', 'true');
                                        editIncreaseFareModal.style.display = 'none';

                                        // Also trigger a backdrop removal if it's still present
                                        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
                                        window.location.reload();
                                    } else {
                                        alert('Error updating fare: ' + data.message);
                                        console.error(data.message);
                                    }
                                })
                                .catch(error => {
                                    console.error("An error occurred:", error);
                                    alert('An error occurred while updating the fare.');
                                });
                        }

                        // Load the increase fare on page load
                        document.addEventListener('DOMContentLoaded', loadIncreaseFare);
                    </script>









                    <!-- Fare Table Section -->
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Location/Fare Table
                                        </div>

                                        <div class="d-flex align-items-right">

                                        </div>
                                        <br>
                                        <!-- Fare Table Container -->
                                        <div id="fareTableContainer" style="overflow-x: auto;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        $(document).ready(function () {
                            loadFareTable(); // Load fare data on page load

                            // Function to load fare data
                            function loadFareTable(locationId = '') {
                                $.ajax({
                                    url: 'CRUD/fetch_fare.php',
                                    method: 'POST',
                                    data: { locationId: locationId }, // Send the selected location ID (if any)
                                    success: function (data) {
                                        $('#fareTableContainer').html(data); // Populate the container with the fare table
                                    },
                                    error: function (xhr, status, error) {
                                        console.error("An error occurred while loading fare table: " + error);
                                    }
                                });
                            }

                            // Function to filter fares based on selected location
                            window.filterFares = function () {
                                const selectedLocationId = $('#locationFilter').val();
                                loadFareTable(selectedLocationId); // Load data based on selected location
                            };

                            // Function to reset filter and show all data
                            window.resetFilter = function () {
                                $('#locationFilter').val(''); // Clear the filter dropdown
                                loadFareTable(); // Reload all fare data
                            };

                            // Event listener for location selection
                            $('#locationFilter').on('change', function () {
                                filterFares();
                            });
                        });
                    </script>





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






                <!-- End of Main Content -->
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
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; IntelliRide 2024</span>
                        </div>
                    </div>
                </footer>
            </div>




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

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>

</html>