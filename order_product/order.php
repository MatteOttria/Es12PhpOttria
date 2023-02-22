<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <title>Prodotti</title>
</head>
<body>
    <?php
        include "../connect.php";
        $mysqli = open();
        session_start();
    ?>
    <center>
        <?php
            $query_order = "SELECT IDVideo FROM prestiti WHERE IDSocio = ".$_SESSION['id']."";
            $result_order = $mysqli->query($query_order);
            while($row_order = $result_order->fetch_assoc()){
                $query_video = "SELECT * FROM video WHERE ID = ".$row_order['IDVideo']." ";
                $result_video = $mysqli->query($query_video);
                
                $query_tipo = "SELECT Descrizione FROM tipo WHERE ID = ".$result_video['IDtipo']." ";
                $result_tipo = $mysqli->query($query_tipo);
                $row_tipo = $result_tipo->fetch_assoc();

                $query_genere = "SELECT Descrizione FROM genere WHERE ID = ".$result_video['IDgenere']." ";
                $result_genere = $mysqli->query($query_genere);
                $row_genere = $result_genere->fetch_assoc();

                if($result_prestiti->num_rows == 0){
                    echo "<div class='container border border-dark '>
                            <div class='title'> ".$result_video['titolo']." </div>
                            <div class='dierctor'> ".$result_video['regista']." </div>
                            <div class='year'> ".$result_video['anno']." </div>
                            <div class='type'> ".$row_tipo['Descrizione']." </div>
                            <div class='genre'> ".$row_genere['Descrizione']." </div>
                          </div>";
                }else{
                    echo "<div class = 'container border border-dark opacity-50'>
                            <div class='title'> ".$result_video['titolo']." </div>
                            <div class='dierctor'> ".$result_video['regista']." </div>
                            <div class='year'> ".$result_video['anno']." </div>
                            <div class='type'> ".$row_tipo['Descrizione']." </div>
                            <div class='genre'> ".$row_genere['Descrizione']." </div>
                          </div>";
                }
            }

            $mysqli->close();
        ?>
    </center>
</body>
</html>