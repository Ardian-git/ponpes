<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Document</title>

</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="cek_login.php" method="POST">
                            <div class="container mt-3">
                                <div style="text-align: center;">
                                    <h1>Login</h1>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-control">
                                </div>
                                <p>Jika belum memiliki akun, silahkan<a href="form_register.php"> Register disini </a></p>
                                <div>
                                    <input type="submit" value="login" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>