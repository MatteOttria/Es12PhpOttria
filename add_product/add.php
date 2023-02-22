<?php
    include "../connect.php";
    $mysqli = open();
    if (empty($_POST)) {
    }else{
        $titolo = $_POST['titolo'];
        $regista = $_POST['regista'];
        $anno = $_POST['anno'];
        $tipo = $_POST['tipo'];
        $genere = $_POST['genere'];
        $query = "INSERT INTO Video(titolo, regista, anno, IDtipo, IDgenere) VALUES ('$titolo' , '$regista' , '$anno' , '$tipo' , '$genere')";
        $mysqli->query($query);
    }
    header("Location: ./insert_of_product_data.php");
?>