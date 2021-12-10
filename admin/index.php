                        
                        <?php 
                        include('header.php');
                        
                        $query=mysqli_query($kon, "SELECT * FROM berita");
                        $data=mysqli_fetch_all($query, MYSQLI_ASSOC);
                        ?>
                        
                        <h1 class="mt-2">Data Berita</h1>
                        <hr>
                        <a href="tambah-berita.php" class="btn btn-success">Tambah Data</a>
                        <!-- <table border="1" class="table table-hover mt-2"> -->
                        <table id="datatablesSimple">
                            <tr style="text-align:center;">
                                <th >No</th>
                                <th>Judul</th>
                                <th>Cover</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                            <?php $nomor=1;
                            foreach($data as $row) { ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $nomor ?></td>
                                <td><?php echo $row['judul']; ?></td>
                                <td><img src="img/<?php echo $row['cover']; ?>" style="max-width:80px;"></td>
                                <td><?php echo $row['tanggal']; ?></td>
                                <td style="text-align:center;">
                                    <a href="detail_berita.php?id=<?php echo $row['id_berita']; ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                            <?php $nomor++; } ?>
                        </table>
                        
                        
                        <?php
                        include('footer.php');
                        ?>