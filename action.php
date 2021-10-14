<?php

if( isset($_POST["submit"])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $nama_supplier = $_POST['nama_supplier'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];
    
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div id="form" class="pt-5">
        <div  class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8">
                    <h4>Id Barang = <?php echo $id_barang ?></h4>
                    <h4>Nama Barang = <?php echo $nama_barang ?></h4>
                    <h4>Jenis Barang = <?php echo $jenis_barang ?></h4>
                    <h4>Nama Supplier = <?php echo $nama_supplier ?></h4>
                    <h4>Merek = <?php echo $merek ?></h4>
                    <h4>Harga Barang = <?php echo $harga ?></h4>
                    <h4>Tanggal Masuk = <?php echo $tanggal ?></h4>
                </div>
            </div>
        </div>
    </div>
    
       
    
</body>
</html>