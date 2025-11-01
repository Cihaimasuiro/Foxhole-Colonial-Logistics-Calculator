# PHP Game Database Template

This is a simple, secure, and adaptable PHP & MySQL template for creating a game database. It provides a full CRUD (Create, Read, Update, Delete) interface for managing game items, built on a clean, modern, and easy-to-understand file structure.

This project is designed to be the perfect starting point for any game-related database, whether for Foxhole, EVE Online, or your own custom project.

## Features
* **Full CRUD:** Create, Read, Update, and Delete items out of the box.
* **Secure:** Uses **Prepared Statements** to prevent all SQL Injection.
* **Modern Structure:** Uses a `public/` directory (Front Controller pattern) for excellent security and clean URLs.
* **Adaptable:** Built to be easily modified. You can copy/paste the "item" logic to create new categories like "vehicles," "players," or "factions."
* **Clean UI:** Uses Bootstrap 5 for a clean, responsive interface.

## Project Origin & Philosophy

This project started its life as a simple **college assignment** for a retail CRUD application (you can see this old version in the `v0.1-legacy` branch).

Inspired by the complex logistics of games like **Foxhole** (which is why the repository has its current name!), it has been completely refactored from the ground up.

The goal is to provide a **solid, professional foundation** that anyone can grab, adapt, and build upon for their own game-related database project. It's built to be installed locally, act as a template, and be adaptable for any future web server deployment.

## Local Installation Guide

Follow these steps to run the project on your local machine (using Laragon, XAMPP, etc.).

1.  **Clone the Repository:**
    ```bash
    git clone [https://github.com/Cihaimasuiro/Foxhole-Colonial-Logistics-Calculator.git](https://github.com/Cihaimasuiro/Foxhole-Colonial-Logistics-Calculator.git)
    cd Foxhole-Colonial-Logistics-Calculator
    ```

2.  **Import the Database:**
    * Open your database tool (like HeidiSQL or phpMyAdmin).
    * Create a new database named `game_db`.
    * Import the `game_database.sql` file into your new `game_db` database. This will create the `items` table and add some sample data.

3.  **Configure the Connection:**
    * **This file is ignored by Git.** You must create it manually.
    * Copy `src/config.php.example` (if one exists) or just create a new file named `src/config.php`.
    * Paste the following into `src/config.php` and add your credentials:
        ```php
        <?php
        $host = "127.0.0.1";
        $user = "root";
        $pass = ""; // Your MySQL password (usually empty on Laragon/XAMPP)
        $db   = "game_db";
        $port = 3306;
        
        $mysqli = new mysqli($host, $user, $pass, $db, $port);
        
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }
        ?>
        ```

4.  **Set Your Webserver Root (CRITICAL STEP):**
    * This project uses a secure `public/` directory. Your webserver must point to it.
    * **In Laragon:** Right-click Laragon icon > Menu > www > Select your project folder > Change Document Root > Select the **`public`** folder.
    * **In XAMPP:** You must edit your `httpd-vhosts.conf` file to create a Virtual Host where the `DocumentRoot` points to `C:/xampp/htdocs/YourProjectName/public`.
    * Restart your server.

5.  **Run:**
    * Visit your project's local URL (e.g., `http://game-db-template.test`). You should see the item list.

## How to Adapt This Template (e.g., Add "Vehicles")

This template is designed to be easily extended.

1.  **Database:** In `game_database.sql`, add a new `CREATE TABLE vehicles (...)` with the columns you want.
2.  **Copy Views:**
    * `views/item_list.php` -> `views/vehicle_list.php`
    * `views/item_add_form.php` -> `views/vehicle_add_form.php`
    * ...etc.
3.  **Copy Actions:**
    * `src/item_add_action.php` -> `src/vehicle_add_action.php`
    * ...etc.
4.  **Edit Files:** Go through your new `vehicle_...` files and change all references from `items` to `vehicles`.
5.  **Update Router:** In `public/index.php`, add new `case` statements for `vehicle_list`, `add_vehicle`, etc.
6.  **Update Nav:** In `public/index.php`, add a new "Vehicles" link to the header navigation.

## How to Contribute

Contributions are welcome! This is a perfect project for developers looking to practice their PHP skills on a structured, modern application.

1.  **Fork** the repository.
2.  Create a new branch: `git checkout -b feature/YourAmazingFeature`
3.  Commit your changes: `git commit -m 'Add: YourAmazingFeature'`
4.  Push to the branch: `git push origin feature/YourAmazingFeature`
5.  Open a **Pull Request**.

### Good First Tasks for Contributors
* Add a new CRUD category (like "Vehicles" or "Factions").
* Implement a simple search bar for the `item_list.php` page.
* Improve the UI/CSS styling.
