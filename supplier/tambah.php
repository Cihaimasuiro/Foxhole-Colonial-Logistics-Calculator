<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>

<body>
    <form action="aksitambah.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <center>
            <label>Form Tambah Data Supplier</label>
        </center>
    </div>
    <div class="row mt-5 mx-5 me-5">
        <div class="col-md-3">Kode Supplier</div>
        <div class="col-md-9">            
            <input type="text" name="kode_supplier" id="kode_supplier" class="form-control form-control-sm">
        </div>
    </div>
    <div class="row mt-5 mx-5 me-5">
        <div class="col-md-3">Nama Supplier</div>
        <div class="col-md-9">
            <input type="text" name="nama_supplier" id="nama_supplier" class="form-control form-control-sm">
        </div>
    </div>
    <div class="row mt-5 mx-5 me-5">
        <div class="col-md-3">Alamat</div>
        <div class="col-md-9">
            <textarea name="alamat" id="alamat" class="form-control form-control-sm"></textarea>
        </div>
    </div>
    <div class="row mt-5 mx-5 me-5">
        <div class="col-md-3">No Telepon</div>
        <div class="col-md-9">
            <input type="text" name="no_telepon" id="no_telepon" class="form-control form-control-sm">
        </div>
    </div>
    <div class="row mt-5 mx-5 me-5">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <input type="submit" value="Tambah Data" class="btn btn-primary">
        </div>
    </div>
    </form>
</body>
</html>
