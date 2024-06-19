<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM inventory WHERE id=$id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $produk = $_POST['produk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $sql = "UPDATE inventory SET produk='$produk', stok=$stok, harga=$harga WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Stok</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Update Stok</h1>
    <form method="post">
        <?php if (isset($product)): ?>
            <input type="hidden" name="id" value="<?php echo $product['id'];?>">
            <label for="produk">Produk:</label><br>
            <input type="text" id="produk" name="produk" value="<?php echo $product['produk'];?>"><br>
            <label for="stok">Stok:</label><br>
            <input type="number" id="stok" name="stok" value="<?php echo $product['stok'];?>"><br>
            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" step="0.01" value="<?php echo $product['harga'];?>"><br><br>
            <input type="submit" value="Update Stok">
        <?php else: ?>
            <p>No product found.</p>
        <?php endif; ?>
    </form>
</body>
</html>