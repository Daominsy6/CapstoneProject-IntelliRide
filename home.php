<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IntelliRide - Dashboard</title>


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
                <a class="nav-link" href="home.php"
                    style="background-color: #4da3ff; color: white; padding: 10px; border-radius: 5px; display: block; text-decoration: none;">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <b><span>Dashboard</span></b></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="BusManagement.php">
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
                    <h2 class="m-0 font-weight text-primary">IntelliRide Dashboard</h2>
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



                    <!-- Content Row -->
                    <div class="row">
                        <!-- Map View -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Map View</div>
                                            <div id="map" style="height: 500px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bus Table -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Active Bus Table</div>
                                            <div id="busTableContainer">Loading table...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        let map;
                        let busMarkers = {}; // Object to store bus markers with their IDs as keys

                        function initMap() {
                            const start = { lat: 15.14687, lng: 120.76889 }; // Start point
                            const end = { lat: 15.02660, lng: 120.69133 }; // End point

                            const waypoints = [
                                { location: { lat: 15.045327, lng: 120.68977 }, stopover: false },
                                { location: { lat: 15.03332, lng: 120.68766 }, stopover: false },
                                { location: { lat: 15.03158, lng: 120.68962 }, stopover: false },
                                { location: { lat: 15.02966, lng: 120.68811 }, stopover: false },
                                { location: { lat: 15.02699, lng: 120.69097 }, stopover: false },
                            ];

                            map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 11,
                                center: { lat: 15.21068, lng: 120.81517 }, // Center map
                            });

                            // Request route with waypoints
                            const directionsService = new google.maps.DirectionsService();
                            const directionsRenderer = new google.maps.DirectionsRenderer();
                            directionsRenderer.setMap(map);

                            directionsService.route(
                                {
                                    origin: start,
                                    destination: end,
                                    waypoints: waypoints,
                                    travelMode: google.maps.TravelMode.DRIVING,
                                },
                                (response, status) => {
                                    if (status === "OK") {
                                        directionsRenderer.setDirections(response);
                                        startAutoRefresh(); // Start auto-refresh after map initialization
                                    } else {
                                        console.error("Directions request failed due to " + status);
                                    }
                                }
                            );
                        }

                        function fetchBusLocations() {
                            fetch("mobile_personnel/get_location.php")
                                .then((response) => {
                                    if (!response.ok) {
                                        throw new Error(`HTTP error! Status: ${response.status}`);
                                    }
                                    return response.json();
                                })
                                .then((data) => {
                                    // Filter out buses with bus_id = 0 or personnel_id = 0
                                    const validLocations = data.filter(
                                        (bus) => bus.bus_id !== 0 && bus.personnel_id !== 0
                                    );
                                    updateBusMarkers(validLocations);
                                })
                                .catch((error) => {
                                    console.error("Error fetching bus locations:", error);
                                });
                        }

                        function updateBusMarkers(locations) {
                            const activeBusIds = new Set();

                            // Update or create markers only for valid buses
                            locations.forEach((bus) => {
                                const busId = bus.bus_id;
                                const personnelId = bus.personnel_id;

                                // Skip buses with invalid personnel_id
                                if (personnelId === 0) {
                                    console.warn(`Skipping bus ID ${busId} due to invalid personnel ID.`);
                                    return;
                                }

                                const busLatLng = new google.maps.LatLng(bus.latitude, bus.longitude);
                                activeBusIds.add(busId);

                                // Determine the icon based on the status
                                let iconPath = "";
                                switch (bus.status) {
                                    case "Available":
                                        iconPath = "img/bus1.png"; // Icon for Available
                                        break;
                                    case "Standing":
                                        iconPath = "img/bus2.png"; // Icon for Standing
                                        break;
                                    case "Full":
                                        iconPath = "img/bus3.png"; // Icon for Full
                                        break;
                                    default:
                                        iconPath = "img/bus4.png"; // Default icon
                                }

                                // Include Bus ID and other details in the hover information
                                const titleInfo = `
            ID: BUS${bus.bus_id || "Unknown"}
            Plate Number: ${bus.plate_number || "Unknown"}
            Personnel Name: ${bus.personnel_name || "Unknown"}
            Contact: ${bus.contact || "Unknown"}
            Status: ${bus.status || "Unknown"}`;

                                if (busMarkers[busId]) {
                                    // Update existing marker
                                    busMarkers[busId].setPosition(busLatLng);
                                    busMarkers[busId].setIcon(iconPath);
                                    busMarkers[busId].setTitle(titleInfo.trim()); // Update hover information
                                } else {
                                    // Add new marker
                                    const marker = new google.maps.Marker({
                                        position: busLatLng,
                                        map: map,
                                        title: titleInfo.trim(), // Set hover information
                                        icon: iconPath,
                                    });
                                    busMarkers[busId] = marker;
                                }
                            });

                            // Remove markers for buses that are no longer active
                            Object.keys(busMarkers).forEach((busId) => {
                                if (!activeBusIds.has(parseInt(busId))) {
                                    busMarkers[busId].setMap(null); // Remove marker from map
                                    delete busMarkers[busId]; // Delete marker from memory
                                }
                            });
                        }


                        function applyStatusColors() {
                            const rows = document.querySelectorAll("#busTable tbody tr");

                            rows.forEach((row) => {
                                const statusCell = row.querySelector("td:nth-child(6)"); // 6th column (Status)
                                const status = statusCell.textContent.trim();

                                // Apply color based on status
                                switch (status) {
                                    case "Available":
                                        statusCell.style.color = "green";
                                        statusCell.style.fontWeight = "bold";
                                        break;
                                    case "Standing":
                                        statusCell.style.color = "orange";
                                        statusCell.style.fontWeight = "bold";
                                        break;
                                    case "Full":
                                        statusCell.style.color = "red";
                                        statusCell.style.fontWeight = "bold";
                                        break;
                                    default:
                                        statusCell.style.color = "gray"; // Unavailable
                                        statusCell.style.fontWeight = "normal"; // Reset font weight
                                        break;
                                }
                            });
                        }

                        function loadBusTable() {
                            fetch("mobile_personnel/bus_table.php")
                                .then((response) => {
                                    if (!response.ok) {
                                        throw new Error(`HTTP error! Status: ${response.status}`);
                                    }
                                    return response.text();
                                })
                                .then((html) => {
                                    const tableContainer = document.getElementById("busTableContainer");
                                    tableContainer.innerHTML = html; // Inject the PHP-generated table

                                    // Apply status colors after the table loads
                                    applyStatusColors();
                                })
                                .catch((error) => {
                                    console.error("Error loading the bus table:", error);
                                });
                        }

                        function startAutoRefresh() {
                            setInterval(() => {
                                fetchBusLocations(); // Refresh bus markers on the map
                                loadBusTable(); // Refresh the table
                            }, 1000); // Refresh every 1 second
                        }

                        // Locate specific bus from the table
                        document.addEventListener("click", function (event) {
                            if (event.target.matches(".locate-btn")) {
                                const busId = event.target.getAttribute("data-bus-id");
                                const lat = parseFloat(event.target.getAttribute("data-lat"));
                                const lng = parseFloat(event.target.getAttribute("data-lng"));

                                if (!busId || isNaN(lat) || isNaN(lng)) {
                                    console.error("Invalid bus data for location.");
                                    return;
                                }

                                const busLatLng = new google.maps.LatLng(lat, lng);

                                // Center map on the selected bus
                                map.setCenter(busLatLng);
                                map.setZoom(14);

                                // Scroll to the top of the page
                                window.scrollTo({
                                    top: 0,
                                    behavior: "smooth", // Smooth scrolling
                                });

                                // Highlight the bus marker
                                if (busMarkers[busId]) {
                                    busMarkers[busId].setAnimation(google.maps.Animation.BOUNCE);
                                    setTimeout(() => busMarkers[busId].setAnimation(null), 2000); // Stop animation after 2 seconds
                                } else {
                                    console.warn(`No marker found for bus ID: ${busId}`);
                                }
                            }
                        });

                        document.addEventListener("DOMContentLoaded", () => {
                            loadBusTable(); // Load the table when the page is ready
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
                            <div class="modal-body">Select "Logout" below if you are ready to end your current
                                session.
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





                <style>
                    /* Basic modal styling */
                    .modal {
                        display: none;
                        position: fixed;
                        z-index: 1000;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        overflow: auto;
                        background-color: rgba(0, 0, 0, 0.5);
                    }

                    .modal-content {
                        background-color: white;
                        margin: 15% auto;
                        padding: 20px;
                        border: 1px solid #888;
                        width: 50%;
                        text-align: center;
                        box-shadow: 0px 0px 10px 0px black;
                    }

                    .close {
                        color: red;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                        cursor: pointer;
                    }

                    .close:hover,
                    .close:focus {
                        color: darkred;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    .modal-title {
                        color: red;
                        font-weight: bold;
                    }

                    .message {
                        color: orange;

                    }
                </style>
                <script>
                    let lastNotificationId = null;

                    // Function to fetch the latest notification
                    function checkForNotifications() {
                        fetch('mobile_personnel/get_latest_notification.php')
                            .then(response => response.json())
                            .then(data => {
                                if (data.error) {
                                    console.log(data.error);
                                } else {
                                    // Check if the notification is new
                                    if (!lastNotificationId || lastNotificationId !== data.id) {
                                        lastNotificationId = data.id;
                                        showNotificationModal(data);
                                    }
                                }
                            })
                            .catch(error => console.error('Error fetching notifications:', error));
                    }

                    // Function to show the modal
                    function showNotificationModal(notification) {
                        const modal = document.getElementById("notificationModal");
                        const modalContent = document.getElementById("modalContent");

                        // Set notification details in the modal
                        modalContent.innerHTML = `
            <h2 class="modal-title">New Emergency Notification</h2>
            <p><strong>Bus ID:</strong> ${notification.bus_id} (${notification.bus_plate})</p>
            <p><strong>Personnel ID:</strong> ${notification.personnel_id} (${notification.personnel_name})</p>
            <p class="message"><strong>Message:</strong> ${notification.message}</p>
            <p><strong>Timestamp:</strong> ${notification.created_at}</p>
        `;

                        // Display the modal
                        modal.style.display = "block";
                    }

                    // Close the modal and delete the notification
                    function closeModal() {
                        const modal = document.getElementById("notificationModal");
                        modal.style.display = "none";

                        // Send request to delete the notification
                        if (lastNotificationId) {
                            fetch('mobile_personnel/delete_notification.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify({ id: lastNotificationId }),
                            })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        console.log("Notification deleted successfully");
                                    } else {
                                        console.error("Error deleting notification:", data.error);
                                    }
                                })
                                .catch(error => console.error('Error deleting notification:', error));
                        }
                    }

                    // Poll for notifications every 5 seconds
                    setInterval(checkForNotifications, 5000);
                </script>



                <div id="notificationModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <div id="modalContent"></div>
                    </div>
                </div>









                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>


                <!--Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; IntelliRide 2024</span>
                        </div>
                    </div>
                </footer>
            </div>





            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <!-- Popper.js and Bootstrap JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

            <!-- Google Maps API -->
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAshpZuxWg8H_Ev6ELnO--J6vph7bQ8Wvc&callback=initMap"
                async defer></script>

            <!-- Leaflet and related plugins -->
            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
            <script src="https://unpkg.com/leaflet-realtime@2.0.2/dist/leaflet-realtime.min.js"></script>
            <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>


            <!-- jQuery UI Library -->
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

            <!-- Custom Scripts -->
            <script src="js/sb-admin-2.min.js"></script>
            <!-- Custom fonts for this template-->
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="css/sb-admin-2.min.css" rel="stylesheet">



</body>

</html>