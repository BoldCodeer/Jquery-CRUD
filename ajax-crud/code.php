<?php 
include '../database.php';

if(isset($_POST['checking_add_image'])){
     
    $prod_name = $_POST['name'];
    $unit      = $_POST['unit'];
    $price     = $_POST['price'];
    $expiry    = $_POST['expiry'];
    $inventory = $_POST['inventory'];
    $cost      = $_POST['cost'];
 
    $name = $_FILES['prod_image']['name'];
    list($txt, $ext) = explode(".", $name);
    $image_name = time().".".$ext;
    $tmp = $_FILES['prod_image']['tmp_name'];
 
    if(move_uploaded_file($tmp, '../upload/'.$image_name)){
        mysqli_query($conn,"INSERT INTO product (product_name, unit, price, date_expiry, available_inventory, available_inventory_cost, image)
        VALUES ('".$prod_name."','".$unit."','".$price."','".$expiry."','".$inventory."','".$cost."','".$image_name."')");
        // echo "<img width='200px' src='../exam/upload/".$image_name."' class='preview'>";
        echo $return = "Successfully Stored";
    }else{
        echo "Somthing Went Wrong.!";
    }
 
 
}

if(isset($_POST['checking_view']))
{
    $prod_id = $_POST['prod_id'];
    $result_array = [];

    $query = "SELECT * FROM product WHERE id = '$prod_id' ";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo $return = "No Record Found.!";
    }
}

if(isset($_POST['checking_edit']))
{
    $prod_id = $_POST['prod_id'];
    $result_array = [];

    $query = "SELECT * FROM product WHERE id = '$prod_id' ";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo $return = "No Record Found.!";
    }
}

if (isset($_POST['checking_update'])) {
    // print_r($_POST);
    $id = $_POST['prod_id'];
    $prod_name = $_POST['name'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $expiry = $_POST['expiry'];
    $inventory = $_POST['inventory'];
    $cost = $_POST['cost'];

    if(isset($_FILES['edit_image'])) {
        $name = $_FILES['edit_image']['name'];
        list($txt, $ext) = explode(".", $name);
        $image_name = time().".".$ext;
        $tmp = $_FILES['edit_image']['tmp_name'];
     
        if(move_uploaded_file($tmp, '../upload/'.$image_name)){
            // mysqli_query($conn,"INSERT INTO product (product_name, unit, price, date_expiry, available_inventory, available_inventory_cost, image)
            // VALUES ('".$prod_name."','".$unit."','".$price."','".$expiry."','".$inventory."','".$cost."','".$image_name."')");
    
            $query = "UPDATE product SET 
                product_name = '".$prod_name."',
                unit = '".$unit."',
                price = '".$price."',
                date_expiry = '".$expiry."',
                available_inventory = '".$inventory."',
                available_inventory_cost = '".$cost."',
                image = '".$image_name."'
                WHERE id = '".$id."'";
    
            mysqli_query($conn, $query);
            // echo "<img width='200px' src='../exam/upload/".$image_name."' class='preview'>";
            echo $return = "Successfully Stored";
        }else{
            echo "Somthing Went Wrong.!";
        }
    } else {
        $query = "UPDATE product SET 
                product_name = '".$prod_name."',
                unit = '".$unit."',
                price = '".$price."',
                date_expiry = '".$expiry."',
                available_inventory = '".$inventory."',
                available_inventory_cost = '".$cost."',
                image = '". $_POST['prev_image'] ."'
                WHERE id = ".$id."";
    
            mysqli_query($conn, $query);
            // echo "<img width='200px' src='../exam/upload/".$image_name."' class='preview'>";
            echo $return = "Successfully Stored";
    }
    
}



if(isset($_POST['checking_delete']))
{
    $id = $_POST['prod_id'];

    $query = "DELETE FROM product WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo $return = "Successfully Deleted";
    }
    else 
    {
        echo $return = "Something Went Wrong.!";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && isset($_POST['product_name'])) {
        $uploadDir = 'uploads/'; // Directory to store uploaded images
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            // Additional data received from the form
            $productName = $_POST['product_name'];

            // Process the data as needed
            // Insert data and image URL into a database, for example

            $response = [
                'status' => 'success',
                'imageUrl' => $uploadFile,
            ];
            echo json_encode($response);
        } else {
            $response = ['status' => 'error'];
            echo json_encode($response);
        }
    }
}

?>