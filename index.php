<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Product List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php require_once 'process.php';
        require_once 'product.php';
        ?>
        <form action="process.php" method="POST">

            <?php
            $mysqli = new mysqli('localhost', 'rootu', 'mypass123', 'product') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
            $id = $mysqli->query("SELECT * FROM data") or die($mysqli->error);

            function pre_r($array) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
            ?>

            <div class="head">
                <h1>Product list</h1>

                <div class="buttons">
                    <button  type="submit" name="add">ADD</button>
                    <button  type="submit" name="massDelete"> MASS DELETE</button>
                </div>
            </div>

            <div class="list_container">
                <?php
                while ($row = $result->fetch_assoc()):
                    $roww = mysqli_fetch_array($id);
                    //echo "ASTA E  :{$roww} SI   :{$row}";
                    if ($roww !== NULL) {
                        $obj = unserialize($row['object'])
                        ?>
                        <div align="center" class="product">
                            <?php
                            echo"<input class='delete-checkbox' type='checkbox' name='checkboxx[]' value='" . $roww['id'] . "'>";
                            set_error_handler(function () { /* ignore errors */
                            });
                            echo "<p class='productDescription'>{$obj->getSku()}\n
            {$obj->getName()}\n
            {$obj->getPrice()}\n
            {$obj->getSize()}\n
            {$obj->getWeight()}\n
            {$obj->getHeight()}{$obj->getWidth()}{$obj->getLength()}</p>";
                            ?>
                        </div>
        <?php
    }
endwhile;
?>
            </div>
        </form>
    </body>
</html>
