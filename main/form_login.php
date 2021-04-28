<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>GOLFJKT</title>
</head>

<body>
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-10 mx-auto">
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin">

                            <div class="form-row">
                                <div class="form-label-group col-md-6">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="form-label-group col-md-6">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required >
                                    <label for="inputPassword">Password</label>
                                </div>

                            </div>


                            <hr>

                            <div class="form-label-group">
                                <input type="text" id="inputUserame" class="form-control" placeholder="Username" required >
                                <label for="inputUserame">Username</label>
                            </div>
                            <div class="form-label-group">
                                <input type="text" id="inputTelp" class="form-control" placeholder="No Telepon" required>
                                <label for="inputTelp">No Telepon</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" id="inputAlamat" class="form-control" placeholder="Alamat" required>
                                <label for="inputAlamat">Alamat</label>
                            </div>


                            <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Register</button>
                            <a class="d-block text-center mt-2 small" href="#">Sign In</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #bac964;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: white;font-family: Monument;">GOLFJKT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link " href="../index.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="jadwal.php" style="color: white;">Jadwal</a>
                    <a class="nav-item nav-link" href="pesan_lapangan.php" style="color: white;">Transaksi</a>
                    <a class="nav-item nav-link " href="klasemen.php" style="color: white;">Klasemen</a>
                    <a class="nav-item nav-link " href="scanqr.php" style="color: white;">Scan QR</a>
                </div>
            </div>
        </div>
    </nav> -->
    <div class="container">
        <div class="login-container" style="margin-top: 1.2%;">

            <div class="row">
                <div class="col-md-6 loginForm">
                    <a href="../index.php" style="margin-top: 2%;" class="btn btn-dark btn-circle">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <div class="container" style="align-content: center;">
                        <h3>Login</h3>
                        <form method="POST" action="aksi_login.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required autofocus />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            <div class="form-group">
                                <a href="#" class="ForgetPwd">Forget Password?</a>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6 registerForm">
                    <h3>Register</h3>
                    <form method="POST" action="aksi_register.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>

                        </div>


                        <hr>
                        <div class="form-group">
                            <input type="password" id="inputPassword" name="pass1" class="form-control" placeholder="Konfirmasi Password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="inputUserame" name="nama" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="inputNama" name="level" class="form-control" placeholder="Jabatan" required>
                        </div>

                        <div class="form-group">
                            <input type="text" id="inputTelp" name="telp" class="form-control" placeholder="No Telepon" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>