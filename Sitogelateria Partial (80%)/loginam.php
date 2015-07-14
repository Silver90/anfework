<?php
session_start(); //start sessione database
include("conn.php"); //includo i dtai per la connessione al database
if (isset($_POST['Vai'])) { //condizione accettata se viene premuto il tasto del form
    $username = $_POST["username"]; //assegno i dati del form alle variabili
    $password = $_POST["password"];
    if (($username == "administrator") & ($password == "icecream")) { // condizione per login amministratore
        $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //controllo errori
        $sql = $connessione->prepare("SELECT * FROM loginam WHERE username_am = :username AND password_am = :password"); //preparazione query selezione
        $sql->bindParam(':username', $username); //bind dei dati
        $sql->bindParam(':password', $password);
        $sql->execute(); //esecuzione query
        if ($row = $sql->fetch()) {//assegno i risultati della query ad un array
            $_SESSION["username"] = $row["username"]; // assegno le variabili di sessione
            $_SESSION["password"] = $row["password"];
            header('location:index_amministratore.php'); //reindirizzamento alla pagina di amministrazione
        } else {
            echo "Nome utente o password errati. Clicca " . "<a href='#'>qui</a>"; // messaggio di risposta per la condizione non rispettata e collegamento alla pagina di login
        }
    } else { //condizione per utente normale
        $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //controllo errori
        $sql = $connessione->prepare("SELECT * FROM utente WHERE username= :username AND password= :password"); //preparazione query selezione
        $sql->bindParam(':username', $username); //bind dei dati
        $sql->bindParam(':password', $password);
        $sql->execute(); //esecuzione query
        if ($row = $sql->fetch()) {//assegno i risultati della query ad un array
            $_SESSION["username"] = $row["username"]; // assegno le variabili di sessione
            $_SESSION["password"] = $row["password"];
            header('location:index.php'); //reindirizzamento
        } else {
            echo "Nome utente o password errati. Clicca " . "<a href='#'>qui</a>"; // messaggio di risposta per la condizione non rispettata e collegamento alla pagina di login
        }
    }
} else {
    ?>
    <meta charset="utf-8"> <!-- formattazione testo -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#logout").hide(); // nascondo il link per il logout
        });
        var logout = $.cookie('cookie_name'); //set cookie var
        if (logout == 'cookie') {
            $("#loginb").hide();
            $("#logout").show();
        }
        else {
            $("#loginb").click(function () { //al click del tasto login..
                $("#loginb").hide(); //nascondo il pulsante login
                $("#logout").show(); // mostra il link per il logout
                $.cookie('logout', 'cookie');

            });

        }


    </script>
    <form name="form_login" method="post"> <!-- inizio del form con metodo post -->
        <div style="float:right;">
            User <input type="text" name="username" style="height:20px;width:100px;"><br> <!-- inserimento dati -->
            Pass <input type="password" name="password" style="height:20px;width:100px;"><br>
            <input type="submit" id="loginb" value="Vai" name="Vai"> <!-- pulsante per l'invio dei dati -->
            <a href="logout.php" id="logout">Logout</a>
        </div>
    </form>
<?php
}
?>
