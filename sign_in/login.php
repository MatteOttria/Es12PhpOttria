<?php
    include "../connect.php";
    session_start();
    if(empty($_POST)){
        header("Location: ../index.php");
        $_SESSION["err"] = 1;
    }else {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $mysqli = open();
        $query = "SELECT ID, permission FROM soci WHERE email = '$email' AND pwd = '$password'";
        $response = $mysqli->query($query);

        if($response->num_rows == 0){
            header("Location: ../index.php");
            $_SESSION["err"] = 1;
            $mysqli->close();
        }else{
            $row = $response->fetch_assoc();

            $_SESSION["id"] = $row['ID'];
    
            if(!$row['permission']){
                header("Location: ../order_product/list.php");
            }else{
                header("Location: ../add_product/insert_of_product_data.php");
            }   
        }
        $mysqli->close();
    }
?>
