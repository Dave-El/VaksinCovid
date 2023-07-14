<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satu Sehat | Login</title>
    <link rel="icon" href="pics/logo.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        .btn-secondary.gray-button {
            background-color: gray;
            /* Set the initial background color */
            color: white;
            /* Set the initial text color */
            transition: background-color 0.3s;
            /* Add a smooth transition effect */
        }

        .btn-secondary.gray-button:hover {
            background-color: green;
            /* Change the background color on hover */
        }
    </style>
</head>

<body style="height:100vh; background-image: url(pics/vaksin2.jpeg);background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow" style="background-color: transparent;">
                    <div class="card-body">
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "<div class='alert alert-danger' role='alert'>Username / Password Yang Anda Masukkan Salah! </div>";
                            }
                        }
                        ?>

                        <h2 class="card-title text-center mt-2 mb-4 fs-1 text-light">Login</h2>

                        <form action="loginAction.php" method="post" class="col-10 mx-auto">
                            <div class="form-group mt-3">
                                <label for="name" class="form-label text-light">Username</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group mt-3">
                                <label for="password" class="form-label text-light">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group mt-4 mb-3">
                                <input type="submit" name="login" value="Login" class="form-control btn btn-secondary gray-button">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>