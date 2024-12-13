<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <link rel="icon" href="logo-icon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <title>Veli Colonial Database Supply</title>
</head>

<body>
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="?page=home">
                <img src="logo-icon/veli-logo.webp" alt="Veli Colonial Logo">
                Veli Colonial Database Supply
            </a>
            <nav class="nav nav-tabs">
                <a href="?page=home" class="nav-link <?php echo ($page == 'home' ? 'active' : ''); ?>" >Home</a>
                <a href="?page=suppliers" class="nav-link <?php echo ($page == 'suppliers' ? 'active' : ''); ?>">Suppliers</a>
                <a href="?page=barang" class="nav-link <?php echo ($page == 'barang' ? 'active' : ''); ?>">Barang</a>
            </nav>
        </div>


    </header>

    <main id="main" class="mt-4 container" style="background-image: linear-gradient(#29292975, rgb(81, 81, 81, 0.75)), url('logo-icon/bg_image.jpg'); background-size: 100%; background-repeat: no-repeat; background-position: center;"> 

        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'home':
                echo "<h2 class='text-center'>Selamat datang di Veli Colonial Database Supply</h2>";
                echo "<div style='display: flex; justify-content: center; align-items: center; margin-top: 30px;'>";
                echo "<div style='width: 150px; height: 150px; border-radius: 58%; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);'>"; 
                echo "<img src='logo-icon/veli-logo.webp' alt='Veli Colonial Logo' style='width: 100%; height: 100%; object-fit: cover;'>"; 
                echo "</div>";
                echo "</div>";
                break;
            case 'suppliers':
                include 'supplier/index.php';
                break;
            case 'barang':
                include 'barang/index.php';
                break;
            default:
                echo "<h2>Sigil HQ Eastern Front</h2>";
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>