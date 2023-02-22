<?php
    include "../connect.php";
    $mysqli = open();
    if(!empty($_POST)){
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $password = $_POST['password'];
        $permission = 0;
        $query = "SELECT * FROM soci WHERE email = '$email' ";
        $result = $mysqli->query($query);
        if ($result->num_rows == 0) {
            $query = "INSERT INTO soci(nome, cognome, email, telefono, pwd, permission) VALUES ('$nome' , '$cognome' , '$email' , '$telefono' , '$password', '$permission')";
            $mysqli->query($query);
            $query = "SELECT ID FROM soci WHERE email = '$emai' ";
            $result = $mysqli->query($query);
            $row = $result->fetch_assoc();
            $_SESSION["id"] = $row['ID'];
            header("Location: ../order_product/list.php");
        }else {
            $_SESSION["err"] = 2;
            header("Location: ../index.php");
        }     
    }
    $mysqli->close();
?>