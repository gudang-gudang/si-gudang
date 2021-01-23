<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Stok</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="nama_barang" class="form-control">
                                    <option value="Kardus">Kardus</option>
                                    <option value="Inner">Inner</option>
                                    <option value="Outer">Outer</option>
                                </select>
                            </div>
                        </div>
                    
                       
                         <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                               <div class="form-group">
                            <label for="jumlah_barang" class="col-sm-3 control-label">Jumlah Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_barang" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Barang" required>
                            </div>
                        </div>
                       

                        <!--Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Stok</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=stok&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Stok
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
 
  $nama=$_POST['nama_barang'];
    $tanggal=$_POST['tanggal'];
    $jumlah=$_POST['jumlah_barang'];
  
  
    //buat sql
    $sql="INSERT INTO tb_barang VALUES ('','$nama','$tanggal','$jumlah')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Stok Error");
    if ($query){
        echo "<script>window.location.assign('?page=stok&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
