<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="<?= base_url('ProductController/update/'.$product['id']) ?>" method="post">
        <label for="name">Product Name:</label>
        <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
        
        <label for="description">Description:</label>
        <textarea name="description" required><?= $product['description'] ?></textarea><br>
        
        <label for="date">Date:</label>
        <input type="date" name="date" value="<?= $product['date'] ?>" required><br>
        
        <label for="price">Price:</label>
        <input type="text" name="price" value="<?= $product['price'] ?>" required><br>
        
        <button type="submit">Update Product</button>
    </form>
</body>
</html>
