<?php
include('header.php'); 
include('koneksi.php');

$id=$_GET['id'];
$query=mysqli_query($kon, "SELECT * FROM artikel where id_artikel='$id' LIMIT 1");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


    <h1>Halaman Detail Cerpen</h1>
    <hr>

    <a href="edit_artikel.php?id=<?php echo $data[0]['id_artikel']; ?>" class="btn btn-success">Edit</a> |
    <a href="hapus_artikel.php?id=<?php echo $data[0]['id_artikel']; ?>" class="btn btn-danger">Hapus</a> |
    <a href="artikel.php" class="btn btn-dark">Kembali</a>

    <table border="1" class="table table-hover mt-2">
        <tr>
            <th>Id</th>
            <td colspan="3"><?php echo $data[0]['id_artikel']; ?></td>
        </tr>

        <tr>
            <th>Cover</th>
            <td colspan="3"><img src="ti_img/<?php echo $data[0]['cover']; ?>" style="max-width:300px;"></td>
        </tr>

        <tr>
            <th>Judul</th>
            <td colspan="3"><?php echo $data[0]['judul']; ?></td>
        </tr>

        <tr>
            <th>Penulis</th>
            <td colspan="3"><?php echo $data[0]['penulis']; ?></td>
        </tr>

        <tr>
            <th>konten</th>
            <td colspan="3"><?php echo $data[0]['isi_a']; ?></td>
        </tr>

        <tr>
            <th>Tanggal</th>
            <td colspan="3"><?php echo $data[0]['tanggal']; ?></td>
        </tr>


    </table>


<?php include('footer.php'); ?>