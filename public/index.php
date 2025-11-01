<?php
/*
 * ---------------------------------------------------------------------
 * Main Front Controller
 * ---------------------------------------------------------------------
 * This is the ONLY file that should be directly accessed by the user.
 * 1. It includes the database connection.
 * 2. It acts as a "router" to decide which page to show.
 * 3. It wraps all content in the main HTML template.
 */

// 1. Include the database connection ONCE.
// This $mysqli variable will be available in all included files.
require_once '../src/config.php';

// 2. Get the requested page from the URL.
// Default to 'item_list' if no page is specified.
$page = $_GET['page'] ?? 'item_list';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/veli-logo.webp"> <title>Game Database Template</title>
</head>
<body>

    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center text-white text-decoration-none" href="index.php?page=item_list">
                <img src="images/veli-logo.webp" alt="Logo" style="height: 40px; margin-right: 10px;">
                <span>Game DB Template</span>
            </a>
            <nav class="nav nav-tabs">
                <a href="index.php?page=item_list" 
                   class="nav-link <?php echo ($page == 'item_list' ? 'active' : ''); ?>">
                   Item List
                </a>
                <a href="index.php?page=add_item" 
                   class="nav-link <?php echo ($page == 'add_item' ? 'active' : ''); ?>">
                   Add Item
                </a>
            </nav>
        </div>
    </header>

    <main id="main" class="container">
        <?php
        /*
         * ---------------------------------------------------------------------
         * The Router
         * ---------------------------------------------------------------------
         * This switch statement decides which file to include.
         */
        switch ($page) {
            
            // --- "CREATE" PAGES ---
            case 'add_item':
                include '../views/item_add_form.php';
                break;
            case 'add_action':
                include '../src/item_add_action.php';
                break;

            // --- "UPDATE" PAGES ---
            case 'edit_item':
                include '../views/item_edit_form.php';
                break;
            case 'edit_action':
                include '../src/item_edit_action.php';
                break;
            
            // --- "DELETE" PAGE ---
            case 'delete_action':
                include '../src/item_delete_action.php';
                break;

            // --- "READ" (Default) PAGE ---
            case 'item_list':
            default:
                include '../views/item_list.php';
        }
        ?>
    </main>

    <footer class="container text-center text-muted py-4">
        Game Database Template &copy; 2025. A project by Cihaimasuiro.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>