<?php
/*
 * ---------------------------------------------------------------------
 * Action: Edit/Update Item
 * ---------------------------------------------------------------------
 * This script receives data from 'item_edit_form.php' via POST.
 * It uses a prepared statement to securely update the data.
 */

// 1. Get data from the POST request
$id = $_POST['id']; // We need the ID to know WHICH item to update
$item_name = $_POST['item_name'];
$category = $_POST['category'];
$description = $_POST['description'];
$stock = $_POST['stock'];

// 2. Prepare the SQL query
$stmt = $mysqli->prepare("UPDATE items SET item_name = ?, category = ?, description = ?, stock = ? WHERE id = ?");

// 3. Bind the variables
// Notice the types and the order. "i" for ID is last.
$stmt->bind_param("sssii", $item_name, $category, $description, $stock, $id);

// 4. Execute the query
if ($stmt->execute()) {
    // Success! Redirect back to the item list.
    header("Location: index.php?page=item_list&status=edit_success");
} else {
    // Fail! Show an error.
    echo "Error: " . $stmt->error;
}

// 5. Close the statement
$stmt->close();
?>