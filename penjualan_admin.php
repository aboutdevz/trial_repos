<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="penjualan.css">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3>CRUD Penjualan</h3>
    <table class="table table-dark table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi Barang</th>
            <th>Link IMG</th>
        </tr>
    </thead>
        <?php include 'includes/conn_incl.php'; include 'includes/conn_incl.php';  ?> 
        <?php $data =  mysqli_query($conn,"select * from produk_tb"); ?>
        <?php $i=1;?>
        <?php while($d = mysqli_fetch_array($data)){?>
            <?php ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo ($d["produk_nama"]);?></td>
                <td><?php echo ($d["produk_harga"]);?></td>
                <td><?php echo ($d["produk_descr"]);?></td>
                <td><?php echo ($d["produk_img"]);?></td>
            </tr>
        <?php $i++;}?>
        
        </div>
        
<div class="container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <button class="btn btn-dark mb-1" type = "submit" name="btn_tmbh">Tambah</button>
        <button class="btn btn-dark mb-1" type = "submit" name="btn_update">Update</button>
        <button class="btn btn-dark mb-1" type = "submit" name="btn_hapus">Hapus</button>
        <button class="btn btn-dark mb-1" type = "submit" name="btn_refresh">Refresh</button>
        <input class="form-control mb-2" type="text" name="search_barang" placeholder="Search...">
        <button class="btn btn-dark mb-1" type = "submit" name="btn_enter_src">Enter</button>
        <input class="form-control mb-2"  type="text" name="ID" placeholder="ID" disabled>
        <input class="form-control mb-2" type="text" name="nama_barang" placeholder="Nama Barang" value="">
        <input class="form-control mb-2" type="text" name="harga_barang" placeholder="Harga">
        <input class="form-control mb-2" type="text" name="descr_barang" placeholder="Deskripsi">
        <input class="form-control mb-2" type="text" name="img_barang" placeholder="Link IMG">
        </form>
        </div>
    </table>
    <?php
    if(isset($_POST['btn_tmbh'])){
        $produk_nama = $_POST['nama_barang'];
        $produk_harga = $_POST['harga_barang'];
        $produk_descr = $_POST['descr_barang'];
        $produk_img = $_POST['img_barang'];
        mysqli_query($conn,"insert into produk_tb(produk_nama,produk_harga,produk_descr,produk_img) values ('$produk_nama','$produk_harga','$produk_descr','$produk_img')");
        mysqli_query($conn,"select* from produk_tb");
    }
    if(isset($_POST['btn_refresh'])){
        $query = "SELECT top 1000 from produk_tb";
        mysqli_query($conn,$query);
        mysqli_query($conn,"alter table produk_tb AUTO_INCREMENT=0");
    }
    if(isset($_POST['btn_hapus'])){
        $query = "SELECT top 1000 from produk_tb";
        mysqli_query($conn,$query);
        $search = $_POST['search_barang'];
        mysqli_query($conn,"delete from produk_tb where produk_nama ='$search' ");
        
    }
    if(isset($_POST['btn_update'])){
        $produk_nama = $_POST['nama_barang'];
        $produk_harga = $_POST['harga_barang'];
        $produk_descr = $_POST['descr_barang'];
        $produk_img = $_POST['img_barang'];
        $search = $_POST['search_barang'];
        $query = "update produk_tb set produk_harga = '$produk_harga' , produk_descr = '$produk_descr' , produk_img = '$produk_img' where produk_nama = '$search'";
        mysqli_query($conn,$query);
    }
    if(isset($_POST['btn_enter_src'])){
        view();
    }
    ?>

</body>
</html>