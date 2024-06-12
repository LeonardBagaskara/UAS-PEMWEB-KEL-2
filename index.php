<?php
include 'db.php';

$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Inventory</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Aplikasi Inventory</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Product List</h1>
        <button onclick="window.location.href='add_product.php'">Add New Product</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['produk']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td>
                        <a href="update_product.php?id=<?php echo $row['id']; ?>">Update</a>
                        <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
