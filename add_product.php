<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $produk = $_POST['produk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO inventory (id, produk, stok, harga) VALUES ('$id', '$produk', $stok, $harga)";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Inventory App</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="landing_page.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Add Product</h1>
        <form method="post" id="productForm">
            <label for="produk">Produk:</label><br>
            <input type="text" id="produk" name="produk"><br>
            <label for="stok">Stok:</label><br>
            <input type="number" id="stok" name="stok"><br>
            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" step="0.01"><br><br>
            <input type="submit" value="Add Product" class="btn btn-add">
        </form>
    </div>
</body>
</html>
