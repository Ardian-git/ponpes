<?php
include('header.php'); 
include('koneksi.php');

$id=$_GET['id'];
$query=mysqli_query($kon, "SELECT pertanyaan.isi_p, pertanyaan.jawaban, pertanyaan.tanggal, pertanyaan.id_p, t_user.username 
from pertanyaan inner join t_user on t_user.id_user=pertanyaan.id_user ");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


    <h1>Halaman komentar</h1>
    <hr>

    
    <a href="komentar.php" class="btn btn-dark">Kembali</a>

    <table border="1" class="table table-hover mt-2">
    
        
        <tr>
            <th>pengirim</th>
            <td colspan="3"><?php echo $data[0]['username']; ?></td>
        </tr>

        <tr>
            <th>komentar</th>
            <td colspan="3"><?php echo $data[0]['isi_p']; ?></td>
        </tr>

        <tr>
            <th>tanggal</th>
            <td colspan="3"><?php echo $data[0]['tanggal']; ?></td>
        </tr>

        <tr>
            <th>jawaban</th>
            <td colspan="3"><?php echo $data[0]['jawaban']; ?></td>
        </tr>

    </table>
    
    <form action="simpan_j-komen.php" method="POST">
    <input type="hidden" name="id" value=<?php echo $data[0]['id_p']; ?>>
        <div class="form-group">
            <textarea name="jkomen" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Kirim</button>
        </div>
    </form>
<?php include('footer.php'); ?>