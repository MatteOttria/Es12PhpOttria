<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<body>
    <center>
        <h1>Registrati</h1>
        <br><br><br>
        <form action = "./add.php" method = "post">
            <label for = 'nome'> Nome </label>
            <input required type = 'text' name = 'nome'><br><br>
            <label for = 'cognome'> Cognome </label>
            <input required type = 'text' name = 'cognome'><br><br>
            <label for = 'email'> Email </label>
            <input required type = 'text' name = 'email'><br><br>
            <label for = 'telefono'> Numero di telefono </label>
            <input required type = 'text' name = 'telefono'><br><br>
            <label for = 'password'> Password </label>
            <input required type = 'password' name = 'password'><br><br>
            <input type = 'submit' value = 'Aggiungi'>
        </form>
    </center>
</body>
</html>