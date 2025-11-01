<?php
// 1. Get the ID from the URL (e.g., index.php?page=edit_item&id=3)
$id_to_edit = $_GET['id'];

// 2. Fetch the item's data from the database
// We use a prepared statement to safely get the data
$stmt = $mysqli->prepare("SELECT * FROM items WHERE id = ?");
$stmt->bind_param("i", $id_to_edit);
$stmt->execute();
$result = $stmt->get_result();
$item = $result->fetch_assoc();

// 3. Check if the item was found
if (!$item) {
    echo "<h1>Error</h1><p>Item not found.</p>";
    exit;
}
?>

<div class="container-fluid">
    <h1>Edit Item: <?php echo htmlspecialchars($item['item_name']); ?></h1>
    <p>Modify the details below and click "Save Changes".</p>
    
    <div class="card bg-dark text-white">
        <div class="card-body">
            <form action="index.php?page=edit_action" method="POST">
            
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                
                <div class="mb-3">
                    <label for="item_name" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="item_name" name="item_name" 
                           value="<?php echo htmlspecialchars($item['item_name']); ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category" 
                           value="<?php echo htmlspecialchars($item['category']); ?>">
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo htmlspecialchars($item['description']); ?></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" 
                           value="<?php echo $item['stock']; ?>" required>
                </div>
                
                <button type="submit" class="btn btn-success">Save Changes</button>
                <a href="index.php?page=item_list" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?php
// Clean up
$stmt->close();
?>