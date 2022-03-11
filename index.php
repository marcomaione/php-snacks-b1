<?php
// snack-5
$stringa = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quasi possimus facilis voluptas blanditiis. dolorum sint tenetur voluptatibus perspiciatis at quae itaque iste porro corporis quam. voluptatem excepturi commodi corrupti";
$parti = explode(".", $stringa);

for ($i=0; $i < count($parti); $i ++) {
    echo $parti[$i] . '<br>';
}

// snack-2

$nome = $_GET['name'];
$mail = $_GET['mail'];
$età = $_GET['età'];
$login = [];

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

