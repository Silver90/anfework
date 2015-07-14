<?php
$host = "127.0.0.1"; //assegno i dati di connessione alle variabili
$db = "sitogelateria";
$user = "root";
$password = "";
$connessione = new PDO("mysql:host=$host;dbname=$db", $user, $password); //connessione al database utilizzando il PDO
?>
