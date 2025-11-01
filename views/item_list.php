<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Game Item Database</h1>
        <a href="index.php?page=add_item" class="btn btn-primary">Add New Item</a>
    </div>
    
    <table class="table table-striped table-dark"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Actions</th> </tr>
        </thead>
        <tbody>
            <?php
            // $mysqli is already available from index.php
            $query = "SELECT * FROM items";
            $result = $mysqli->query($query);

            if ($result && $result->num_rows > 0) { 
                while($item = $result->fetch_assoc()){ 
                    ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo htmlspecialchars($item['item_name']); ?></td>
                        <td><?php echo htmlspecialchars($item['category']); ?></td>
                        <td><?php echo htmlspecialchars($item['description']); ?></td>
                        <td><?php echo $item['stock']; ?></td>
                        <td>
                            <a href="index.php?page=edit_item&id=<?php echo $item['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            
                            <a href="index.php?page=delete_action&id=<?php echo $item['id']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Are you sure you want to delete this item?');">
                               Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>No items found in the database.</td></tr>";
            }
            // Free the result set
            if ($result) {
                $result->free();
            }
            ?>
        </tbody>
    </table>
</div>