<?php

class  Database
{
    private $con;

    public function connection(){
        $this->con = mysqli_connect("localhost","root","","php_db");
        if(mysqli_connect_errno())
        {
            die("connection failed!". mysqli_connect_error());
        }
    }
    public function insert($name, $price, $quantity, $image){
        $query = "INSERT INTO `product`( `name`, `price`, `quantity`, `image`) VALUES ('$name', '$price', '$quantity', '$image')";
        $result =  mysqli_query($this->con,$query);
        if($result){
            return true;
        }else{
            return false;
        }   
    }
    public function fetch(){
        $query = "SELECT * FROM product";
        $results = mysqli_query($this->con ,$query);
        return $results;
    }
    // public  function delete($id){
    //     $query= "DELETE FROM `product` WHERE `id`='$id' ";
    //     $res = mysqli_query($this->con ,$query);    
    //     if ($res) {
    //        echo "Deleted Successfully!";
    //     } else {
    //       echo "Error: " . $sql . "<br>" . $conn->error;
    //     }  
    //   }
}

$database = new Database();

$database->connection();

?>