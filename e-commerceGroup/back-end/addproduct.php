<!DOCTYPE html>
<html>

<head>
    <title>Add New Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <center>
        <h1>Add Product</h1>

        <form action="controller.php" method="POST" enctype="multipart/form-data">

            <table>
                <tr>
                    <th>Image</th>
                    <td><input type="file" name="txtphoto"></td>
                </tr>

                <tr>
                    <th>Product Name</th>
                    <td><input type="text" name="txtprodName"></td>
                </tr>

                <tr>
                    <th>Product Price</th>
                    <td><input type="number" name="txtprice"></td>
                </tr>

                <tr>
                    <th>Product Description</th>
                    <td><input type="text" name="txtcaption"></td>
                </tr>

                <tr>
                    <th>Product Category: </th>
                    <td>
                        <select name="txtcategory" class="form-control" required>
                            <option value="" disabled selected>Choose Category</option>
                            <option value="electronic devices">Electronic Devices</option>
                            <option value="homeliving">Home and Living</option>
                            <option value="fashion">Fashion</option>
                            <option value="sports">Sports</option>
                            <option value="grocery">Grocery</option>
                        </select>
                    </td>
                </tr>

            </table>
            <button type="submit" name="add_product">Add Product</button>

        </form>
    </center>
</body>

</html>