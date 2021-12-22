<?php 
include('header.php');
include('admin/koneksi.php');

$query=mysqli_query($kon, "SELECT * FROM berita limit 3");
$data=mysqli_fetch_all($query, MYSQLI_ASSOC);
$query=mysqli_query($kon, "SELECT * FROM berita limit 1");
$data1=mysqli_fetch_all($query, MYSQLI_ASSOC);

$query=mysqli_query($kon, "SELECT * FROM karya_santri where kategori='cerpen' limit 1");
$data2=mysqli_fetch_all($query, MYSQLI_ASSOC);
$query=mysqli_query($kon, "SELECT * FROM karya_santri where kategori='cerpen' limit 1");
$data3=mysqli_fetch_all($query, MYSQLI_ASSOC);

$query=mysqli_query($kon, "SELECT * FROM artikel limit 3");
$data4=mysqli_fetch_all($query, MYSQLI_ASSOC);
$query=mysqli_query($kon, "SELECT * FROM artikel limit 1");
$data5=mysqli_fetch_all($query, MYSQLI_ASSOC);

$query=mysqli_query($kon, "SELECT * FROM karya_santri where kategori='puisi' limit 1");
$data6=mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
        <div class="row" style="margin-top:105px;">
            <div class="col-md-8">
                <h4 style="color:#93B5C6;">Headline</h4>
                <div class="shadow p-3 mb-5 bg-white rounded">

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <?php foreach($data1 as $baris) { ?>
                                <div class="carousel-item active">
                                    <p style="font-size:small; color:white; position: absolute; top:290px; left:20px;"><a href="kbt.php"><span class="badge badge-dark">Berita</span></a> <?php echo $baris['tanggal']; ?></p>           
                                    <h2 style="color:white; position: absolute; top:310px; left:20px;"><a href="berita.php?id=<?php echo $baris['id_berita']; ?>" style="color:white"><?php echo $baris['judul']; ?></a></h2>                           
                                    <img src="admin/img/<?php echo $baris['cover']; ?>" class="d-block w-100" style="max-height:450px">                               
                                </div>
                            <?php } ?>

                            <?php foreach($data3 as $cerpen) { ?>
                                <div class="carousel-item">
                                    <p style="font-size:small; color:white; position: absolute; top:310px; left:20px;"><span class="badge badge-dark">Cerpen</span> <?php echo $cerpen['tanggal']; ?></p>           
                                    <h2 style="color:white; position: absolute; top:330px; left:20px;"><a href="cerpen.php?id=<?php echo $cerpen['id_karya']; ?>" style="color:white"><?php echo $cerpen['judul']; ?></a></h2>
                                    <img src="admin/img_kry/<?php echo $cerpen['cover']; ?>" class="d-block w-100" style="max-height:450px">
                                </div>
                            <?php } ?>

                            <?php foreach($data5 as $ul) { ?>
                                <div class="carousel-item">
                                    <p style="font-size:small; color:white; position: absolute; top:310px; left:20px;"><a href="kbt.php"><span class="badge badge-dark">Artikel</span></a> <?php echo $ul['tanggal']; ?></p>           
                                    <h2 style="color:white; position: absolute; top:330px; left:20px;"><a href="artikel.php?id=<?php echo $ul['id_artikel']; ?>" style="color:white"><?php echo $ul['judul']; ?></a></h2>
                                    <img src="admin/ti_img/<?php echo $ul['cover']; ?>" class="d-block w-100" style="max-height:450px">
                                </div>
                            <?php } ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                
                </div>
            </div>

            <div class="col-md-4">
                <h5 style="color:#93B5C6;">
                    Berita Terbaru
                </h5>
                <?php foreach($data as $row) { ?>
                <div class="shadow-sm p-3 mt-2 bg-white rounded">
                    <div class="row">
                        <div class="col-md-4">                          
                                <img src="admin/img/<?php echo $row['cover']; ?>" width="100px">                                                          
                        </div>

                        <div class="col-md-8">
                        
                            <a href="berita.php?id=<?php echo $row['id_berita']; ?>" style="color:black" class="outline-primary"><?php echo $row['judul']; ?></a><br>
                            <p style="font-size:small"><a href="k_berita.php"><span class="badge badge-dark">Berita</span></a><?php echo $row['tanggal']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                 
            </div>
        </div>

    <hr style="height: 2px; background:#93B5C6;">

        <div class="row mt-2">
            <div class="col-md-8">
                <h5 style="color:#93B5C6;">Karya santri</h5>

                <?php foreach($data2 as $baris) { ?>
                    <div class="shadow p-3 mt-1 bg-white rounded">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="admin/img_kry/<?php echo $baris['cover']; ?>" width=" 210px">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <a href="cerpen.php?id=<?php echo $baris['id_karya']; ?>" style="color:black"><h4><?php echo $baris['judul']; ?></h4></a>
                                <p><a href="kcerpen.php"><span class="badge badge-dark">Cerpen</span></a> <?php echo $baris['tanggal']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php foreach($data6 as $pu) { ?>
                    <div class="shadow p-3 mt-1 bg-white rounded">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="admin/img_kry/<?php echo $pu['cover']; ?>" width=" 210px">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <a href="puisi.php?id=<?php echo $pu['id_karya']; ?>" style="color:black"><h4><?php echo $pu['judul']; ?></h4></a>
                                <p><a href="kpuisi.php"><span class="badge badge-dark">Puisi</span></a> <?php echo $pu['tanggal']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
            </div>

            <div class="col-md-4">
                <h5 style="color:#93B5C6;">Galeri</h5>
                
            </div>
        </div>

    <hr style="height: 2px; background:#93B5C6;">

    <h5 style="color:#93B5C6; text-align:center;">Artikel</h5>
    

        <div class="row">
        <?php foreach($data4 as $ti) { ?>
            <div class="col-md-4">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="admin/ti_img/<?php echo $ti['cover']; ?>" width=" 315px">
                            </div>
                            <div class="card" style="width:300px;  position:absolute; top:120px; left:23px;">
                                <a href="artikel.php?id=<?php echo $ti['id_artikel']; ?>" style="color:black; padding:5px;"><b><?php echo $ti['judul']; ?></b></a>
                                <p style="font-size:small; padding:5px;"><a href="k_artikel.php"><span class="badge badge-dark">Artikel</span></a> <?php echo $ti['tanggal']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>


    
    
<?php 
include('footer.php') 
?>    