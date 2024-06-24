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
    <title>Inventory</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Inventory</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="landing_page.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Product List</h1>
        <button class="btn btn-add" onclick="window.location.href='add_product.php'">Add New Product</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Tindakan</th>
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
                    <a href="update_product.php?id=<?php echo $row['id']; ?>" class="update-btn">
                    <i class="fas fa-edit"></i> Update
                    </a>
                    <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this item?');">
                    <i class="fas fa-trash-alt"></i> Delete
                    </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
