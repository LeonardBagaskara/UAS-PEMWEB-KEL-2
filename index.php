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
    <title>Inventory App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Product List</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>produk</th>
                <th>stok</th>
                <th>harga</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['produk']; ?></td>
                <td><?php echo $row['stok']; ?></td>
                <td><?php echo $row['harga']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
