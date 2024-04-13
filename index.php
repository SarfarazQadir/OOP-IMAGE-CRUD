<?php
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP IMAGE CRUD</title>
</head>
<body>
    <h1>OOP IMAGE CRUD</h1>
    <fieldset>
        <legend>OOP IMAGE CRUD</legend>
        <form method="post" enctype="multipart/form-data">
        <input type="text" name="pname" placeholder="Enter your product name"><br><br>
        <input type="number" name="pprice" placeholder="Enter your product price"><br><br>
        <input type="number" name="pqty" placeholder="Enter your product quantity"><br><br>
        <input type="file" name="pimg"><br><br>
        <input type="submit" value="Done" name="btnproduct"><br><br>
        </form>
    </fieldset>
    <?php
     if(isset($_POST["btnproduct"])){
        // echo"<pre>";
        // print_r($_FILES["pimg"]);
        // echo"</pre>";
        $name = $_POST["pname"];
        $price = $_POST["pprice"];
        $quantity = $_POST["pqty"];
        $img_name = $_FILES["pimg"]["name"];
        $img_tmp = $_FILES["pimg"]["tmp_name"];
        $img_type = $_FILES["pimg"]["type"];
        $img_size = $_FILES["pimg"]["size"];
        $folder = "images/".$img_name;
        move_uploaded_file( $img_tmp, $folder);

        $result = $database->insert($name, $price, $quantity, $folder);
        if($result){
            echo"<script>alert('Product added successfully')</script>";
        }else{
            echo "Error in inserting data.";
        }
     }
    ?>
</body>
</html>