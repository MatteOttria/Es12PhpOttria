<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi film</title>
</head>
<body>
    <?php
        include "../connect.php";
    ?>
    <center>
        <h1>Aggiungi il film</h1>
        <br><br><br>
        <form action = "./add.php" method = "post">
            <label for = 'titolo'> Titolo </label>
            <input type = 'text' name = 'titolo'><br><br>
            <label for = 'regista'> Regista </label>
            <input type = 'text' name = 'regista'><br><br>
            <label for = 'anno'> Anno </label>
            <input type = 'date' name = 'anno'><br><br>
            <label for = 'tipo'> Tipo </label>
            <select name="tipo" id="tipo">
                <?php
                    $mysqli = open();
                    $query = "SELECT * FROM Tipo";
                    $response = $mysqli->query($query);
                    while($row = $response->fetch_assoc()){
                        $name = $row['Descrizione'];
                        $id = $row['ID'];
                        echo "<option value=".$id.">$name</option>";
                    }
                ?>
            </select><br><br>
            <label for = 'genere'> Genere </label>
            <select name="genere" id="genere">
                <?php
                    $mysqli = open();
                    $query = "SELECT * FROM Genere";
                    $response = $mysqli->query($query);
                    while($row = $response->fetch_assoc()){
                        $name = $row['Descrizione'];
                        $id = $row['ID'];
                        echo "<option value=".$id.">$name</option>";
                    }
                    
                    $mysqli->close();
                ?>
            </select><br><br>
            <input type = 'submit' value = 'Aggiungi'>
        </form>
    </center>
</body>
</html>