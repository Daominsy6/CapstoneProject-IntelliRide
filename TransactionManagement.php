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
                <a class="nav-link collapsed" href="TransactionManagement.php"
                    style="background-color: #4da3ff; color: white; padding: 10px; border-radius: 5px; display: block; text-decoration: none;">
                    <i class="fas fa-fw fa-cog"></i>
                    <b><span>Transactions Management</span></b>
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
                    <h2 class="m-0 font-weight text-primary">Transaction Management</h2>
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


                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Bus Transaction Table
                                    </div>

                                    <!-- Bus Selection and Date Range Picker -->
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="input-group mr-3" style="width: auto;">
                                            <label for="busTransactionSelect" class="mr-2 align-self-center">Select
                                                Bus:</label>
                                            <select id="busTransactionSelect" class="custom-select"
                                                style="width: auto;">
                                                <option value="">Select a bus</option>
                                                <option value="all">All Buses</option> <!-- All Buses Option -->
                                            </select>
                                        </div>
                                        <div class="input-group mr-3" style="width: auto;">
                                            <label for="startDate" class="mr-2 align-self-center">Start Date:</label>
                                            <input type="date" id="startDate" class="form-control">
                                        </div>
                                        <div class="input-group mr-3" style="width: auto;">
                                            <label for="endDate" class="mr-2 align-self-center">End Date:</label>
                                            <input type="date" id="endDate" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Expenses Input and Compute Button -->
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="input-group mr-3" style="width: auto;">
                                            <label for="expensesInput" class="mr-2 align-self-center">Enter
                                                Expenses:</label>
                                            <input type="number" id="expensesInput" class="form-control"
                                                placeholder="₱0.00" step="0.01" min="0">
                                        </div>
                                        <button class="btn btn-success" id="computeTotalEarningsButton">Compute Total
                                            Earnings</button>
                                    </div>

                                    <!-- Total Earnings Display -->
                                    <div class="mt-3">
                                        <h6 class="text-primary">Total Earnings: <span
                                                id="busTotalEarnings">₱0.00</span></h6>
                                    </div>

                                    <!-- Export Buttons -->
                                    <div class="mt-3 mb-3">
                                        <button class="btn btn-primary" id="exportExcelBtn">Export to Excel</button>
                                        <button class="btn btn-danger" id="exportPdfBtn">Export to PDF</button>
                                    </div>

                                    <!-- Transactions Table Container -->
                                    <div id="busTransactionTableContainer" class="mt-3">Select a bus to view
                                        transactions.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Compute without Selecting a Bus -->
                <div class="modal fade" id="computeErrorModal" tabindex="-1" aria-labelledby="computeErrorModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="computeErrorModalLabel">Error</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Please select a bus to compute total earnings.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Include JS libraries -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const startDateInput = document.getElementById("startDate");
                        const endDateInput = document.getElementById("endDate");
                        const transactionTableContainer = document.getElementById("busTransactionTableContainer");
                        const busTotalEarnings = document.getElementById("busTotalEarnings");
                        const busSelect = document.getElementById("busTransactionSelect");
                        const expensesInput = document.getElementById("expensesInput");

                        // Automatically set the date inputs to today's date
                        const today = getTodayDate();
                        startDateInput.value = today;
                        endDateInput.value = today;
                        startDateInput.setAttribute("max", today);
                        endDateInput.setAttribute("max", today);

                        // Load the list of buses
                        loadBusOptions();

                        // Event listeners for bus selection, date range changes
                        busSelect.addEventListener("change", handleBusSelection);
                        startDateInput.addEventListener("change", handleDateRangeSelection);
                        endDateInput.addEventListener("change", handleDateRangeSelection);

                        // Event listener for the Compute button
                        document.getElementById("computeTotalEarningsButton").addEventListener("click", computeTotalEarningsHandler);

                        // Event listeners for export buttons
                        document.getElementById("exportExcelBtn").addEventListener("click", exportToExcel);
                        document.getElementById("exportPdfBtn").addEventListener("click", exportToPDF);

                        function handleBusSelection() {
                            const selectedBusId = busSelect.value;
                            const startDate = startDateInput.value;
                            const endDate = endDateInput.value;

                            // Reset total earnings and table content
                            busTotalEarnings.innerText = "₱0.00";
                            transactionTableContainer.innerHTML = "Select a bus to view transactions.";

                            if (selectedBusId) {
                                loadBusTransactions(selectedBusId, startDate, endDate);
                            }
                        }

                        function handleDateRangeSelection() {
                            const selectedBusId = busSelect.value;
                            const startDate = startDateInput.value;
                            const endDate = endDateInput.value;

                            if (selectedBusId) {
                                loadBusTransactions(selectedBusId, startDate, endDate);
                            }
                        }

                        function computeTotalEarningsHandler() {
                            const tableRows = transactionTableContainer.querySelectorAll("table tbody tr");
                            let totalAmount = 0;

                            tableRows.forEach(row => {
                                // Find the "Amount" column dynamically
                                const amountCell = row.querySelector("td:nth-child(n)"); // Select any td, we will identify the amount column dynamically

                                // Loop through all table rows and check for the correct column
                                const columns = row.querySelectorAll("td");
                                columns.forEach((column, index) => {
                                    if (column.textContent.includes("₱")) { // Check if column contains the currency symbol, this should be the amount column
                                        // Extract and calculate the amount
                                        const amount = parseFloat(column.textContent.replace('₱', '').replace(',', '').trim());
                                        if (!isNaN(amount)) {
                                            totalAmount += amount;
                                        }
                                    }
                                });
                            });

                            // Subtract expenses from total earnings
                            const expensesAmount = parseFloat(expensesInput.value) || 0;
                            const netEarnings = totalAmount - expensesAmount;

                            // Update total earnings display
                            busTotalEarnings.innerText = `₱${netEarnings.toFixed(2)}`;
                        }


                        function loadBusOptions() {
                            fetch("earning/get_buses.php")
                                .then(response => response.json())
                                .then(buses => {
                                    buses.forEach(bus => {
                                        busSelect.innerHTML += `<option value="${bus.id}">Bus ${bus.id} - ${bus.plateNumber}</option>`;
                                    });

                                    if (busSelect.value) {
                                        loadBusTransactions(busSelect.value, startDateInput.value, endDateInput.value);
                                    }
                                })
                                .catch(error => console.error("Error loading buses:", error));
                        }

                        function loadBusTransactions(busId, startDate, endDate) {
                            const body = `busId=${busId}&fromDate=${startDate}&toDate=${endDate}`;

                            fetch("earning/get_bus_transactions.php", {
                                method: "POST",
                                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                                body: body,
                            })
                                .then(response => response.text())
                                .then(html => {
                                    if (html.trim() === "") {
                                        transactionTableContainer.innerHTML = `<table class='table table-bordered'>
                            <thead>
                                <tr>
                                    <th>Personnel ID</th>
                                    <th>Pick-Up Point</th>
                                    <th>Destination</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td colspan="5">No transactions found for the selected date range.</td></tr>
                            </tbody>
                        </table>`;
                                    } else {
                                        // Ensure dates are formatted properly before inserting into table
                                        const formattedHtml = formatTableDates(html);
                                        transactionTableContainer.innerHTML = formattedHtml;
                                    }
                                })
                                .catch(error => console.error("Error loading transactions:", error));
                        }

                        function getTodayDate() {
                            const today = new Date();
                            const year = today.getFullYear();
                            const month = String(today.getMonth() + 1).padStart(2, '0');
                            const day = String(today.getDate()).padStart(2, '0');
                            return `${year}-${month}-${day}`;
                        }

                        // Format Date to YYYY-MM-DD without time
                        function formatDate(dateStr) {
                            const date = new Date(dateStr);

                            // Ensure the date is valid
                            if (isNaN(date.getTime())) {
                                console.error("Invalid date: " + dateStr); // Log invalid dates
                                return dateStr; // If invalid, return the original date string
                            }

                            // Return date in the format YYYY-MM-DD (no time)
                            const year = date.getFullYear();
                            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
                            const day = String(date.getDate()).padStart(2, '0');

                            return `${year}-${month}-${day}`; // Return formatted date as string
                        }

                        // Format all dates in the table as strings (YYYY-MM-DD)
                        function formatTableDates(htmlContent) {
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(htmlContent, 'text/html');

                            // Select all date cells (5th column in the table)
                            const dateCells = doc.querySelectorAll("td:nth-child(5)");

                            dateCells.forEach(cell => {
                                const dateText = cell.textContent.trim();
                                const formattedDate = formatDate(dateText);
                                cell.textContent = formattedDate; // Set the cell text as the formatted date
                            });

                            return doc.body.innerHTML; // Return the updated HTML content
                        }


                        function exportToExcel() {
                            const table = transactionTableContainer.querySelector("table");
                            const totalAmount = busTotalEarnings.innerText.trim(); // Get the computed total from the display

                            if (table) {
                                const clonedTable = table.cloneNode(true);

                                // Add header rows dynamically
                                const headerRow = clonedTable.createTHead().insertRow(0);
                                const logoPlaceholder = "AE";
                                const title = "ARAYAT EXPRESS TRANSACTION";
                                const exportDate = new Date().toLocaleDateString();

                                headerRow.insertCell(0).textContent = logoPlaceholder;
                                headerRow.insertCell(1).textContent = title;
                                headerRow.insertCell(2).textContent = `Exported Date: ${exportDate}`;
                                headerRow.insertCell(3).textContent = "";
                                headerRow.insertCell(4).textContent = "";

                                headerRow.cells[1].colSpan = 3;

                                // Add a footer row for the total amount
                                const footerRow = clonedTable.createTFoot().insertRow(0);
                                footerRow.insertCell(0).textContent = "";
                                footerRow.insertCell(1).textContent = "";
                                footerRow.insertCell(2).textContent = "Total Amount:";
                                footerRow.insertCell(3).textContent = totalAmount; // Use the total amount from the web
                                footerRow.insertCell(4).textContent = "";

                                // Convert the modified table to a workbook
                                const wb = XLSX.utils.table_to_book(clonedTable, { sheet: "Sheet1" });

                                // Write the workbook to a file
                                XLSX.writeFile(wb, "arayat_express_transactions.xlsx");
                            } else {
                                alert("No table data to export.");
                            }
                        }







                        function exportToPDF() {
                            const table = transactionTableContainer.querySelector("table");

                            if (table) {
                                // Create a wrapper div
                                const wrapper = document.createElement("div");

                                // Get the computed total amount from the displayed total earnings
                                const totalAmountText = busTotalEarnings.innerText.trim(); // Use the total from the web

                                // Add header information
                                const exportDate = new Date().toLocaleDateString();
                                const header = `
            <div style="text-align: center; margin-bottom: 10px;">
                <img src="img/AElogo.png" alt="Logo" style="width: 80px; height: auto; margin-bottom: 10px;">
                <h2 style="margin: 5px 0;">ARAYAT EXPRESS TRANSACTION</h2>
                <p style="margin: 5px 0;"><strong>Exported Date:</strong> ${exportDate}</p>
                <p style="margin: 5px 0;"><strong>Bus:</strong> ${busSelect.options[busSelect.selectedIndex]?.text || "N/A"}</p>
                <p style="margin: 5px 0;"><strong>Date Range:</strong> ${startDateInput.value || "N/A"} to ${endDateInput.value || "N/A"}</p>
                <p style="margin: 5px 0;"><strong>Expenses:</strong> ₱${expensesInput.value || "N/A"}</p>
                <p style="margin: 5px 0;"><strong>Total Amount:</strong> ${totalAmountText}</p> <!-- Use the total amount from the web -->
            </div>
        `;
                                wrapper.innerHTML = header;

                                // Append the table
                                wrapper.appendChild(table.cloneNode(true));

                                // Export to PDF
                                const opt = {
                                    margin: 0.5,
                                    filename: "arayat_express_transactions.pdf",
                                    html2canvas: { scale: 2 },
                                    jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
                                };
                                html2pdf().from(wrapper).set(opt).save();
                            } else {
                                alert("No table data to export.");
                            }
                        }





                    });
                </script>




                <!-- Transaction Data Section -->
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Transaction Data
                                    </div>

                                    <div class="d-flex align-items-right">
                                        <!-- Combined Dropdown and Search Input -->
                                        <div class="input-group mr-2" style="width: auto;">
                                            <select id="columnSelect" class="custom-select" style="width: auto;"
                                                onchange="clearSearch()">
                                                <option value="personnelId">Personnel ID</option>
                                                <option value="busId">Bus ID</option>
                                                <option value="pickupPoint">Pick-up Point</option>
                                                <option value="destination">Destination</option>
                                                <option value="date">Date</option>
                                            </select>
                                            <input type="text" id="transactionSearch" class="form-control"
                                                placeholder="Search..." onkeyup="searchTransaction()">
                                        </div>
                                        <button class="btn btn-danger" onclick="deleteSelectedTransactions()">Delete
                                            Selected</button>
                                    </div>
                                    <br>
                                    <div id="transactionTableContainer">Loading table...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <script>
                    $(document).ready(function () {
                        loadTransactionData(); // Load transaction data on page load

                        // Start auto-refresh
                        startAutoRefresh();

                        // Function to load transaction data
                        function loadTransactionData(column = 'Id', value = '') {
                            $.ajax({
                                url: 'CRUD/read_transaction.php',
                                method: 'POST', // Change to POST
                                data: { column: column, value: value }, // Send the selected column and value
                                success: function (data) {
                                    $('#transactionTableContainer').html(data);
                                },
                                error: function (xhr, status, error) {
                                    console.error("An error occurred while loading data: " + error);
                                }
                            });
                        }

                        // Function to clear the search input
                        window.clearSearch = function () {
                            $('#transactionSearch').val(''); // Clear the search input
                            loadTransactionData(); // Load all data without search
                        };

                        // Function to search transactions
                        window.searchTransaction = function () {
                            const searchValue = $('#transactionSearch').val();
                            const selectedColumn = $('#columnSelect').val();
                            loadTransactionData(selectedColumn, searchValue); // Call the load function with search parameters
                        };

                        // Function to open delete confirmation modal with selected transaction IDs
                        window.deleteSelectedTransactions = function () {
                            const selectedTransactionIds = [];
                            $('#transactionTable input[type="checkbox"]:checked').each(function () {
                                selectedTransactionIds.push($(this).data('transaction-id'));
                            });

                            if (selectedTransactionIds.length === 0) {
                                $('#noSelectionModal').modal('show');
                                return;
                            }

                            console.log("Selected Transaction IDs: ", selectedTransactionIds);
                            $('#confirmDeleteModal').data('selectedTransactionIds', selectedTransactionIds).modal('show');
                        };

                        // Confirm delete and send AJAX request to delete selected transactions
                        $('#confirmDeleteButton').on('click', function () {
                            const selectedTransactionIds = $('#confirmDeleteModal').data('selectedTransactionIds');

                            if (!selectedTransactionIds || selectedTransactionIds.length === 0) {
                                console.error("No transaction IDs selected for deletion.");
                                return;
                            }

                            $.ajax({
                                type: 'POST',
                                url: 'CRUD/delete_transaction.php',
                                data: { transactionIds: selectedTransactionIds },
                                success: function (response) {
                                    console.log("Delete response:", response); // Log server response for debugging
                                    $('#message').html(response);
                                    $('#confirmDeleteModal').modal('hide'); // Close modal after deletion
                                    loadTransactionData(); // Refresh the transaction table
                                },
                                error: function (xhr, status, error) {
                                    console.error("AJAX Error:", xhr.responseText); // Log error details for debugging
                                    $('#message').html("An error occurred: " + xhr.responseText);
                                }
                            });
                        });

                        // Function to start auto-refresh
                        function startAutoRefresh() {
                            setInterval(() => {
                                const searchValue = $('#transactionSearch').val(); // Preserve search input
                                const selectedColumn = $('#columnSelect').val(); // Preserve selected column
                                loadTransactionData(selectedColumn, searchValue); // Reload table with current filters
                            }, 5000); // Refresh every 5 seconds
                        }
                    });
                </script>



            </div>

            <!-- Modals for Delete Confirmation and No Selection Alert -->
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
                            Please select at least one transaction to delete.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
                aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete the selected transaction(s)?
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


    <!-- End of Footer -->
    <!-- End of Content Wrapper -->


    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#" id="scrollToTopButton">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JavaScript for scroll-to-top functionality -->
    <script>
        // Show or hide the button based on scroll position
        window.addEventListener("scroll", function () {
            const scrollToTopButton = document.getElementById("scrollToTopButton");
            if (window.scrollY > 100) { // Show button after scrolling down 100px
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        });

        // Scroll smoothly to the top when the button is clicked
        document.getElementById("scrollToTopButton").addEventListener("click", function (e) {
            e.preventDefault(); // Prevent default anchor behavior
            window.scrollTo({
                top: 0,
                behavior: "smooth" // Smooth scrolling
            });
        });
    </script>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!--  for exel export-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

    <!--  for pdf export-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>


    </body>

</html>