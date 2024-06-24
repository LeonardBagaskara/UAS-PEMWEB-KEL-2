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
    <header>
        <div class="container">
            <div id="branding">
                <h1>Inventory App</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="landing_page.php">Home</a></li>
                    <li><a href="index.php">Inventory</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Update Stok</h1>
        <form class="form-style" method="post">
            <input type="hidden" name="id" value="<?php echo $inventory['id']; ?>">
            <label for="produk">Produk:</label><br>
            <input type="text" id="produk" name="produk" value="<?php echo $inventory['produk']; ?>"><br>
            <label for="stok">Stok:</label><br>
            <input type="number" id="stok" name="stok" value="<?php echo $inventory['stok']; ?>"><br>
            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" step="0.01" value="<?php echo $inventory['harga']; ?>"><br><br>
            <input type="submit" value="Update Product" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
