<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Supplier</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Supplier</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th> 
                    <th>No Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include __DIR__ . '/../config/koneksi.php'; 

                    $query = mysqli_query($mysqli, "select * from supplier");

                    if ($query) {
                        while($data = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>" . $data['kode_supplier'] . "</td>";
                            echo "<td>" . $data['nama_supplier'] . "</td>";
                            echo "<td>" . $data['alamat'] . "</td>";
                            echo "<td>" . $data['no_telepon'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Error: " . mysqli_error($mysqli) . "</td></tr>";
                    }
                    
                ?>
            </tbody>
        </table>
        <a href="supplier/tambah.php" class="btn btn-primary">Tambah Supplier</a>
    </div>
</body>
</html>