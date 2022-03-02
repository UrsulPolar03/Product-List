<script>
    function changeStatus() {
        var status = document.getElementById("productType");
        if (status.value == "dvdContainer") {
            document.getElementById("dvdContainer").removeAttribute("hidden");
            document.getElementById("bookContainer").setAttribute("hidden", "");
            document.getElementById("furnitureContainer").setAttribute("hidden", "")
        } else if (status.value == "bookContainer") {
            document.getElementById("bookContainer").removeAttribute("hidden");
            document.getElementById("dvdContainer").setAttribute("hidden", "");
            document.getElementById("furnitureContainer").setAttribute("hidden", "")
        } else if (status.value == "furnitureContainer") {
            document.getElementById("furnitureContainer").removeAttribute("hidden");
            document.getElementById("dvdContainer").setAttribute("hidden", "");
            document.getElementById("bookContainer").setAttribute("hidden", "");
        }
    }
</script>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add Product</title>
        <link rel="stylesheet" href="addproduct.css">
    </head>
    <body>
        <?php require_once 'process.php'; ?>
        <form action="process.php" method="post">
            <div class="head">
                <h1>Product Add</h1>
                <div class="buttons">
                    <button   type="submit" name="save">Save</button>
                    <button  name="cancel">Cancel</button>
                </div>
            </div>

            <div id="product_form">
                <div class="mainDetails">
                    <div>
                        <label>SKU</label> <input type="text" id="sku" name="sku"></input> 
                    </div>
                    <div>
                        <label>Name</label> <input type="text" id="name" name="name"></input> 
                    </div>
                    <div>
                        <label>Price</label> <input type="text" id="price" name="price"></input> 
                    </div>
                </div>


                <div class="typeSwitcher">
                    <div class="switcher">
                        <label> Type </label>
                        <form id="tip" action="process.php" method="post">
                            <select name="dropdown" id="productType" onchange="changeStatus()" style="padding:10px 10px">
                                <option value="select"> Select </option>
                                <option value="dvdContainer">DVD</option>
                                <option value="bookContainer">Book</option>
                                <option value="furnitureContainer">Furniture</option>
                            </select>
                        </form>
                        <div>
                        </div>



                        <div hidden id="dvdContainer">
                            <label> Size (MB) </label> <input type="text" name="size" id="size">
                            <p style="italic"> Please, provide size</p>
                        </div>

                        <div hidden id="bookContainer">
                            <label> Weight (KG) </label> <input type="text" name="weigth" id="weight">
                            <p style="italic"> Please, provide weight</p>
                        </div>

                        <div hidden id="furnitureContainer">
                            <label> Height (CM) </label> <input type="text" name="height" id="height"><br>
                            <label> Width (CM) </label> <input type="text" name="width" id="width"><br>
                            <label> Length (CM) </label> <input type="text" name="length" id="length"><br>
                            <p style="italic"> Please, provide dimensions</p>
                        </div>
                    </div>
                    </form>
                    </body>

                    </html>