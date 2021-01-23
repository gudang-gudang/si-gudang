<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Stok</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_barang WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                     <div class="text-center">
                        <h2>Iventory Barang </h2>
                        <h4>Jalan Mahoni No.30, Hessa, Sei Balai, Sendang Sari <br> Bunut, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Stok</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								 <tr>
                            <td width="200">Nama Barang</td> <td><?= $data['nama_barang'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Barang</td> <td><?= $data['jumlah_barang'] ?></td>
                        </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                     <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>SIAGIAN, S.Kom<strong></u><br>
                                        NIP.172099999
                                    </td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>