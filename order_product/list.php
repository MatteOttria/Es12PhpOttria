<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../mystyle.css" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Titoli Disponibili</title>
</head>
<body>
    <?php
        include "../connect.php";
        $mysqli = open();
    ?>
    <center>
        <div class = "container">
        <?php     
            $query_video = "SELECT * FROM video";
            $result_video = $mysqli->query($query_video);

            while ($row_video = $result_video->fetch_assoc()) {
                $query_prestiti = "SELECT * FROM prestiti WHERE IDVideo = ".$row_video['ID']." ";
                $result_prestiti = $mysqli->query($query_prestiti);

                $query_tipo = "SELECT Descrizione FROM tipo WHERE ID = ".$row_video['IDtipo']." ";
                $result_tipo = $mysqli->query($query_tipo);
                $row_tipo = $result_tipo->fetch_assoc();

                $query_genere = "SELECT Descrizione FROM genere WHERE ID = ".$row_video['IDgenere']." ";
                $result_genere = $mysqli->query($query_genere);
                $row_genere = $result_genere->fetch_assoc();

                if($result_prestiti->num_rows == 0){
                    echo "<div class='row  border border-dark mb-1'>
                            <div class='col'> ".$row_video['titolo']." </div>
                            <div class='col'> ".$row_video['regista']." </div>
                            <div class='col'> ".$row_video['anno']." </div>
                            <div class='col'> ".$row_tipo['Descrizione']." </div>
                            <div class='col'> ".$row_genere['Descrizione']." </div>
                          </div>";
                }else{
                    echo "<div class = 'row opacity-50  border border-dark mb-1'>
                            <div class='col'> ".$row_video['titolo']." </div>
                            <div class='col'> ".$row_video['regista']." </div>
                            <div class='col'> ".$row_video['anno']." </div>
                            <div class='col'> ".$row_tipo['Descrizione']." </div>
                            <div class='col'> ".$row_genere['Descrizione']." </div>
                          </div>";
                }
            }
            $mysqli->close();
        ?>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>