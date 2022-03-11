<?php

// snack-2

$nome = $_GET['name'];
$mail = $_GET['mail'];
$età = $_GET['età'];

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['età'])) {
    echo 'parametri mancanti';

} elseif (strlen($nome) <= 3) {
    echo "Il nome deve avere lunghezza superiore a 3 caratteri";

} elseif (strpos($mail, '@') === false && strpos($mail, '.') === false) {
    echo "indirizzo mail non valido";

} elseif (!is_numeric($età)) {
    echo 'non hai inserito un numero';

} else {
    echo 'accesso consentito';
}

?>

