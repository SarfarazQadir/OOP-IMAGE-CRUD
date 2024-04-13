<?php
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>IMAGE</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $res = $database->fetch();
            while($row = mysqli_fetch_assoc($res))
            {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['quantity']?></td>
                    <td>
                 <img src='<?php echo $row['image']?>' width='140' heigth='120'>
            </td>
                </tr>      
                <?php
                }
                
                ?>
        </tbody>
    </table>
</body>
</html>