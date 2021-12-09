<?php
include('header.php'); 
include('koneksi.php');

$id=$_GET['id'];
$query=mysqli_query($kon, "SELECT * FROM berita where id_berita='$id' LIMIT 1");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


    <h1>Halaman Detail</h1>
    <hr>

    <a href="edit.php?id=<?php echo $data[0]['id_berita']; ?>" class="btn btn-success">Edit</a>
    <a href="hapus.php?id=<?php echo $data[0]['id_berita']; ?>" class="btn btn-danger">Hapus</a>

    <table border="1" class="table table-hover mt-2">
        <tr>
            <th>Id</th>
            <td colspan="3"><?php echo $data[0]['id_berita']; ?></td>
        </tr>

        <tr>
            <th>Cover</th>
            <td colspan="3"><img src="img/<?php echo $data[0]['cover']; ?>"></td>
        </tr>

        <tr>
            <th>Judul</th>
            <td colspan="3"><?php echo $data[0]['judul']; ?></td>
        </tr>

        <tr>
            <th>konten</th>
            <td colspan="3"><?php echo $data[0]['isi_b']; ?></td>
        </tr>

        <tr>
            <th>Tanggal</th>
            <td colspan="3"><?php echo $data[0]['tanggal']; ?></td>
        </tr>


    </table>


<?php include('footer.php'); ?>