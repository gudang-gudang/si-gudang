<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_masuk WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data INVENTORY GUDANG</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                     <form class="form-horizontal" action="" method="post">
                      
                               <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-3">
                                <input type="varchar" name="nama_barang" class="form-control" id="inputEmail3" placeholder="Inputkan nama barang" required>
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
                                <input type="int" name="jumlah_barang" class="form-control" id="inputEmail3" placeholder="Inputkan jumlah Barang" required>
                            </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Barang</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
     $nama=$_POST['nama_barang'];
  $tanggal=$_POST['tanggal'];
  $jumlah=$_POST['jumlah_barang'];
    //buat sql
    $sql="UPDATE tb_masuk SET nama_barang= '$nama', tanggal='$tanggal', jumlah_barang='$jumlah' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=barang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



