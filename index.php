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

// verifico che il nome inserito dall'utente sia più lungo di tre caratteri

if (strlen($nome) == 3) {
    echo "Il nome deve avere lunghezza superiore a 3 caratteri";
} else {
    echo " nome corretto ";
}

// verifico che la mail inserita dall'utente contenga la @ ed un punto, per essere valida

if (strpos($mail, '@')!== false && strpos($mail, '.')!== false) {
    echo "indirizzo mail valido";
    } else {
        echo "indirizzo mail non valido";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks-b1</title>
</head>
<body>
    
</body>
</html>