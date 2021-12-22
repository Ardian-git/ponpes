<?php
session_start();
include('admin/koneksi.php');

$id= $_SESSION['username'];

$query = mysqli_query($kon, "SELECT id_user FROM t_user where username='$id' ");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Input-karya</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="admin/tinymce/js/tinymce/tinymce.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body" style="background:#EDEDED;">
                <h2 style="text-align:center;">Form Input Karya</h2>

                <form action="tambah_kiriman.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="konten" ></textarea>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control" >
                            <option value="cerpen">Cerpen</option>
                            <option value="puisi">Puisi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Cover</label>
                        <input type="file" name="cover" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" >
                    </div>

                    <?php foreach($data as $row) { ?>
                    <div class="form-group">
                        <label>Id User</label>
                        <input type="text" name="id" class="form-control" value="<?php echo $row ['id_user']; ?>" readonly>
                    </div>
                    <?php } ?>
                    
                    <div class="form-group">
                        <button class="btn btn-success">Kirim</button>
                        <a href="index.php" class="btn btn-dark">Kembali</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
 
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating', 
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name', 
         })
  </script>
</body>
</html>