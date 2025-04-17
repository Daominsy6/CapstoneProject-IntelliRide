<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/loginstyle.css" rel="stylesheet"> <!-- Updated path for your custom CSS -->
</head>

<body style="background: linear-gradient(90deg, #49dff3, #3c66d8);">
    <div class="container"
        style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column; text-align: center;">
        <!-- Title Section -->
        <div style="margin-bottom: 20px;">
            <h1 style="font-size: 36px; font-weight: bold; color: white;">IntelliRide Web Admin Page</h1>

            <h3 style="font-size: 24px; color: white;">Admin Login</h3>
        </div>

        <div class="screen">
            <div class="screen__content">
                <img src="img/bluebusicon.png" alt="Your Logo" style="width: 80px; height: 80px; margin-bottom: 20px;">

                <form class="login" onsubmit="loginAdmin(event)"> <!-- Added onsubmit to call loginAdmin -->
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" id="adminUsername" class="login__input" placeholder="Admin" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" id="adminPassword" class="login__input" placeholder="Password" required>
                    </div>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>



    <script>
        function loginAdmin(event) {
            event.preventDefault(); // Prevent the default form submission

            const username = document.getElementById('adminUsername').value;
            const password = document.getElementById('adminPassword').value;

            console.log("Admin Username: ", username);
            console.log("Password: ", password);

            fetch('CRUD/account_login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ admin: username, password: password }),
            })
                .then(response => response.json())
                .then(data => {
                    console.log("Response data:", data);
                    if (data.success) {
                        window.location.href = 'home.php';
                    } else {
                        // Set the error message in the modal
                        document.getElementById('loginFailureMessage').textContent = data.message || "Invalid username or password. Please try again.";

                        // Show the modal
                        $('#loginFailureModal').modal('show');
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                    document.getElementById('loginFailureMessage').textContent = 'An error occurred during login. Please try again.';
                    $('#loginFailureModal').modal('show');
                });
        }
    </script>


    <!-- Login Failure Modal -->
    <div class="modal fade" id="loginFailureModal" tabindex="-1" role="dialog" aria-labelledby="loginFailureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginFailureModalLabel">Login Failed</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="loginFailureMessage">Invalid username or password. Please try again.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>