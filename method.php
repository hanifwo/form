<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icon@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="method.css"/>
    <title>Form</title>
</head>
<body>
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">
                    <form action="action.php" method="POST">
                        
                        <div class="form-group mb-2">
                            <label for="id_barang">Id Barang</label>
                            <input id="id_barang" class="form-control" type="text" name="id_barang" placeholder="Id Barang">
                        </div>
                        
                        <div class="form-group mb-2">
                            <label for="nama_barang">Nama barang</label>
                            <input id="nama_barang" class="form-control" type="text" name="nama_barang" placeholder="Nama Barang">
                        </div>

                        <div class="form-group mb-2">
                            <label for="jenis_barang">Jenis Barang</label>
                            <input id="jenis_barang" class="form-control" type="text" name="jenis_barang" placeholder="Jenis Barang"/>
                        </div>

                        <div class="form-group mb-2">
                            <label for="nama_supplier">Nama Supplier</label>
                            <input id="nama_supplier" class="form-control" type="text" name="nama_supplier" placeholder="Nama Supplier"/>
                        </div>

                        <div class="form-group mb-2">
                            <label for="merek">Merek</label>
                            <input id="merek" class="form-control" type="text" name="merek" placeholder="Merek"/>
                        </div>

                        <div class="form-group mb-2">
                            <label for="harga">Harga</label>
                            <input id="harga" class="form-control" type="number" name="harga" placeholder="Harga"/>
                        </div>

                        <div class="form-group mb-2">
                            <label for="tanggal">Tanggal Masuk</label>
                            <input id="tanggal" class="form-control" type="date" name="tanggal"  placeholder=""/>
                        </div>
                        <input name="submit" type="submit" class="btn btn-primary" value="kirim" />


                    </form>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>