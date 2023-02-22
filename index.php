<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
</head>
<body>
    <center>
        <h1>BENVENUTO</h1>
        <form  method = 'post' action="./sign_in/login.php">
            <label for = 'email'> Email </label>
            <input required type = 'text' name = 'email'><br><br>
            <label for = 'password'> Password </label>
            <input required type = 'password' name = 'password'><br><br>
            <input type = 'submit' value = 'Accedi'></input><br><br>
        </form>
        <form action="./sign_up/register.php">
            <input type = 'submit' value = 'Registrati'></input><br><br>
        </form>
        <?php
            session_start();
            if (!empty($_SESSION)) {
               if(!empty($_SESSION["err"])){
                   if ($_SESSION["err"] == 1) {
                        echo "<p>Dati inseriti non validi o non inseriti correttamete</p>";
                   }elseif ($_SESSION["err"] == 2) {
                        echo "<p>Esiste già un utente con questa email</p>";
                   }         
                    $_SESSION["err"] = "null";
               }  
            }
        ?>
    </center>
</body>
</html>