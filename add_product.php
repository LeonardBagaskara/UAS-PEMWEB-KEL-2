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
    <h1>Tambahkan Produk</h1>
    <form method="post">
        <label for="id">id:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="produk">produk:</label><br>
        <input type="text" id="produk" name="produk"><br>
        <label for="stok">stok:</label><br>
        <input type="number" id="stok" name="stok"><br>
        <label for="harga">harga:</label><br>
        <input type="number" id="harga" name="harga" step="0.01"><br><br>
        <input type="submit" value="Tambahkan Produk">
    </form>
</body>
</html>