<?php
/*
 * ---------------------------------------------------------------------
 * Action: Delete Item
 * ---------------------------------------------------------------------
 * This script receives an 'id' from the URL (GET request).
 * It uses a prepared statement to securely delete the item.
 */

// 1. Get the ID from the URL
$id = $_GET['id'];

// 2. Prepare the SQL query
$stmt = $mysqli->prepare("DELETE FROM items WHERE id = ?");

// 3. Bind the ID
// "i" = integer
$stmt->bind_param("i", $id);

// 4. Execute the query
if ($stmt->execute()) {
    // Success! Redirect back to the item list.
    header("Location: index.php?page=item_list&status=delete_success");
} else {
    // Fail! Show an error.
    echo "Error: " . $stmt->error;
}

// 5. Close the statement
$stmt->close();
?>