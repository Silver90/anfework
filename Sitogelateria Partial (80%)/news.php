<?php
/**
 * Created by PhpStorm.
 * User: robertarandazzo
 * Date: 21/05/15
 * Time: 13:18
 */
include("conn.php");

$sql = ('SELECT * FROM news ORDER BY data_news');

foreach (($connessione->query($sql)) as $row) {

    //stampa tutto il DB riga per riga
    echo '<h3>' . $row['titolo'] . '</h3>
                     <div>' . $row['data_news'] . '</div>
                     <div>' . $row['testo'] . '</div>';

}

?>