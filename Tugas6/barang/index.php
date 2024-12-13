<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
    <title>Daftar Barang</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Barang</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include __DIR__ . '/../config/koneksi.php';
                $query = mysqli_query($mysqli, "SELECT * FROM barang");

                if ($query) { 
                    while($data = mysqli_fetch_array($query)){ 
                        echo "<tr>";
                        echo "<td>" . $data['kode_barang'] . "</td>";
                        echo "<td>" . $data['nama_barang'] . "</td>";
                        echo "<td>" . $data['harga'] . "</td>";
                        echo "<td>" . $data['stok'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Error: " . mysqli_error($mysqli) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="barang/tambah.php" class="btn btn-primary">Tambah Barang</a>
    </div>
</body>
</html>
