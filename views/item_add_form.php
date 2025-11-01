<div class="container-fluid">
    <h1>Add New Item</h1>
    <p>Fill out the form below to add a new item to the database.</p>
    
    <div class="card bg-dark text-white">
        <div class="card-body">
            <form action="index.php?page=add_action" method="POST">
                <div class="mb-3">
                    <label for="item_name" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="item_name" name="item_name" required>
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="e.g., Resource, Weapon, Vehicle">
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="0" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Item</button>
                <a href="index.php?page=item_list" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>