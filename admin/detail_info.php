<?php
include('header.php'); 
include('koneksi.php');

$id=$_GET['id'];
$query=mysqli_query($kon, "SELECT * FROM t_info_pendaftaran where id='$id' LIMIT 1");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


    <h1>Halaman Detail InfoP</h1>
    <hr>

    <a href="edit_p.php?id=<?php echo $data[0]['id']; ?>" class="btn btn-success">Edit</a>
    <a href="hapus_p.php?id=<?php echo $data[0]['id']; ?>" class="btn btn-danger">Hapus</a>
    <a href="info_pendaftaran.php" class="btn btn-dark">Kembali</a>

    <table border="1" class="table table-hover mt-2">
        <tr>
            <th>Id</th>
            <td colspan="3"><?php echo $data[0]['id']; ?></td>
        </tr>

        <tr>
            <th>Cover</th>
            <td colspan="3"><img src="../info_p/<?php echo $data[0]['cover']; ?>" style="max-width:400px;"></td>
        </tr>

        <tr>
            <th>Deskripsi</th>
            <td colspan="3"><?php echo $data[0]['deskripsi']; ?></td>
        </tr>

        <tr>
            <th>Tanggal</th>
            <td colspan="3"><?php echo $data[0]['tanggal']; ?></td>
        </tr>


    </table>


<?php include('footer.php'); ?>