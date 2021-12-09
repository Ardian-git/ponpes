<?php 
include('koneksi.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Input-Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body" style="background:#EDEDED;">
                <h2 style="text-align:center;">Form Input Berita</h2>
                <form action="simpan-berita.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="konten" ></textarea>
                    </div>

                    <div class="form-group">
                        <label>Cover</label>
                        <input type="file" name="cover" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success form-control">Tambah</button>
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