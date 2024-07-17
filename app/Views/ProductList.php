<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <?php if (session()->getFlashdata('success')): ?>
        <p><?= session()->getFlashdata('success') ?></p>
    <?php elseif (session()->getFlashdata('error')): ?>
        <p><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <a href="<?= base_url('ProductController/create') ?>">Add New Product</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Date</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['date'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><a href="<?= base_url('ProductController/edit/'.$product['id']) ?>">Edit</a></td>
                <td><a href="<?= base_url('ProductController/delete/'.$product['id']) ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
