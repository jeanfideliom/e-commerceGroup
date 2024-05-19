<?php session_start(); ?>

<html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        .button-container {
            display: flex;
            gap: 5px;
        }

        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" name="logo">TSB</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="admin.php">Records</a></li>
                    <li><a href="addproduct.php">Add Products</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Products Record</h1>
        <?php
        if (isset($_SESSION['status']) && $_SESSION != '') {
            echo "<p>{$_SESSION['status']}</p>";
            unset($_SESSION['status']);
        }
        ?>

        <div>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>PHOTO</th>
                    <th>PRODUCT NAME</th>
                    <th>PRICE</th>
                    <th>CAPTION</th>
                    <th>CATEGORY</th>
                </tr>
                <?php
                viewAll();
                ?>
            </table>
        </div>
    </div>
</body>

<?php
function viewAll()
{
    include ("includes/sqlconnection.php");
    $sql = "SELECT * FROM products ORDER BY id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr class='text-center'>
            <td>$row[id]</td>
            <td><img src='../images/products/$row[category]/$row[photo]' width='100' height='75' alt='$row[photo]'></td>
            <td>$row[prodName]</td>
            <td>$row[price]</td>
            <td>$row[caption]</td>
            <td>$row[category]</td>

            <td>
                <div class='button-container'>
                    <a href='editproduct.php?id=$row[id]'><button class='btn btn-info'>Edit</button></a>
                    <form class='form-inline' action='controller.php' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <button type='submit' class='btn btn-danger' name='delete_product'>Delete</button></a>
                </div>
            </td>
        </tr>
            ";
        }
    } else {
        echo "
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><a href='addproduct.php'><button class='btn btn-info'>Add</button></a></td>
            </tr>
        ";
    }
    $conn->close();
}
?>

</html>