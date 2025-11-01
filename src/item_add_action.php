<?php
/*
 * ---------------------------------------------------------------------
 * Action: Add Item
 * ---------------------------------------------------------------------
 * This script receives data from 'item_add_form.php' via POST.
 * It uses prepared statements to securely insert the data.
 * The $mysqli variable is available because index.php included config.php.
 */

// 1. Get data from the POST request
$item_name = $_POST['item_name'];
$category = $_POST['category'];
$description = $_POST['description'];
$stock = $_POST['stock'];

// 2. Prepare the SQL query
// The '?' are placeholders. We will safely bind values to them.
$stmt = $mysqli->prepare("INSERT INTO items (item_name, category, description, stock) VALUES (?, ?, ?, ?)");

// 3. Bind the variables
// "sssi" tells MySQL the type of data:
// s = string (item_name)
// s = string (category)
// s = string (description)
// i = integer (stock)
$stmt->bind_param("sssi", $item_name, $category, $description, $stock);

// 4. Execute the query
if ($stmt->execute()) {
    // Success! Redirect back to the item list.
    header("Location: index.php?page=item_list&status=add_success");
} else {
    // Fail! Show an error.
    echo "Error: " . $stmt->error;
}

// 5. Close the statement
$stmt->close();
?>