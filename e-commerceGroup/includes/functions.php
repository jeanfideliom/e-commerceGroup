<?php

function individualProd($id){
    include ("../includes/sqlconnection.php");

    $query = "SELECT * FROM products WHERE id = '$id' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       return $row;
        
    } else {
        return "Null";
    }
}
function fetchProductbyCateg($categ)
{
    include ("../includes/sqlconnection.php");

    $query = "SELECT * FROM products WHERE category = '$categ' ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='col-md-3'>
                <div class='thumbnail'>
                    <img src='../images/products/$categ/{$row['photo']}' style=''width: 100%; height:250px;'>
                    <div class='caption'>
                        <h4 class='pull-right'>{$row['price']}</h4>
                        <h4><a href='product.php?id=$row[id]&categ=$row[category]'>{$row['prodName']}</a></h4>
                        <hr>
                        <p>
                            {$row['caption']}
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
function fetchNumberOfProducts($categ){
    include ("../includes/sqlconnection.php");

    $query = "SELECT COUNT(*) as totalProducts FROM products WHERE category = '$categ' ";
    $result = $conn->query($query);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo $row['totalProducts'];
    }else{
        return "No Record Found";
    }

}
