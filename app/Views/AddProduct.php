<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="<?= base_url('ProductController/store') ?>" method="post">
        <label for="name">Product Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>
        
        <label for="date">Date:</label>
        <input type="date" name="date" required><br>
        
        <label for="price">Price:</label>
        <input type="text" name="price" required><br>
        
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
