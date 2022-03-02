<?php

require_once('product.php');
$mysqli = new mysqli('localhost', 'rootu', 'mypass123', 'product') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $type = $_POST['dropdown'];

    if ($type == "dvdContainer") {
        $prod = new Dvd($_POST['sku'], $_POST['name'], $_POST['price'] . '$', $_POST['size'] . 'MB');

        $string = serialize($prod);

        $mysqli->query("INSERT INTO data (object) VALUES('$string')") or die($mysqli->error);
    } else if ($type == "bookContainer") {

        $prod = new Book($_POST['sku'], $_POST['name'], $_POST['price'] . '$', $_POST['weigth'] . 'KG');
        $string = serialize($prod);
        $mysqli->query("INSERT INTO data (object) VALUES('$string')") or die($mysqli->error);
    } else if ($type == "furnitureContainer") {
        $prod = new Furniture($_POST['sku'], $_POST['name'], $_POST['price'] . '$', 'Dimensions: ' . $_POST['height'], 'x' . $_POST['width'], 'x' . $_POST['length']);
        $string = serialize($prod);
        $mysqli->query("INSERT INTO data (object) VALUES('$string')") or die($mysqli->error);
    }
    header("location:/index.php");
}

if (isset($_POST['massDelete'])) {
    foreach ($_POST['checkboxx'] as $id) {
        $mysqli->query("DELETE FROM data WHERE id=" . $id);
    }
    header("location:/index.php");
}

if (isset($_POST['add'])) {
    header("location:/addproduct.php");
}

if (isset($_POST['cancel'])) {
    header("location:/index.php");
}
?>
