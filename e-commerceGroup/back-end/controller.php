<?php
session_start();
include ("includes/sqlconnection.php");

if (isset($_POST['add_product'])) {

    $photo = $_FILES['txtphoto']['name'];
    $prodName = $_POST['txtprodName'];
    $price = $_POST['txtprice'];
    $caption = $_POST['txtcaption'];
    $categ = strtolower($_POST['txtcategory']);

    $sql = "INSERT INTO products(photo, prodName, price, caption, category) VALUES ('$photo','$prodName','$price','$caption','$categ')";

    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($_FILES["txtphoto"]["tmp_name"], "../images/products/$categ/" . $_FILES['txtphoto']['name']);
        $_SESSION['status'] = "Product Added Successfully";
        header('location:admin.php');
    } else {
        $_SESSION['status'] = "Error: Insert failed...";
        header('location:admin.php');
    }

    $conn->close();

}

//Function to fetch product by category
function fetchProductbyCateg()
{
    global $conn;
    $id = $_POST['id'];
    $categ = $_POST['category'];

    $query = "SELECT * FROM products WHERE id = '$id' AND category = '$categ' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='col-md-3'>
                <div class='thumbnail'>
                    <img src='../images/product/electronics/.$row[photo].' style=''width: 100%; height:250px;'>
                    <div class='caption'>
                        <h4 class='pull-right'>$row[price]</h4>
                        <h4><a href='#'>Smart Phone 1</a></h4>
                        <hr>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.
                        </p>
                    </div>
                </div>
            </div>
            ";
        }
    } else {
        return "No Record Found";
    }
}

if (isset($_POST['delete_product'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "Deleted Successfully.";
        header('location: admin.php');
    } else {
        $_SESSION['status'] = "Insertion Failed.";
        header('location: admin.php');
    }
    $conn->close();

}
?>