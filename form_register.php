<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    
</head>
<body class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <form method="POST" action="register.php">
                    <div class="form-group">
                        <label>Masukkan Nama User</label>
                        <input type="text" name="username" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label>Masukkan Password</label>
                        <input type="password" name="password" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label>Masukkan Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label>Masukkan Tlp</label>
                        <input type="text" name="tlp" class="form-control">
                    </div> 
                    <div>
                    <input type="submit" value="Daftar" class="btn btn-primary">
                    </div>
                </form>    
                </div>
            </div>
        </div>
    </div>
    

    </form>
</body>
</html>