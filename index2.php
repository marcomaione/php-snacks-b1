<?php

// snack-5

$stringa = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quasi possimus facilis voluptas blanditiis. dolorum sint tenetur voluptatibus perspiciatis at quae itaque iste porro corporis quam. voluptatem excepturi commodi corrupti";
$parti = explode(".", $stringa);

for ($i=0; $i < count($parti); $i ++) {
    echo $parti[$i] . '<br>';
}

?>