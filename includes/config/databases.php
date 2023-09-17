<?php

function conectarDB() {
    $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');

    if($db) {
        echo "se conectó";
    } else{
        echo "no se conectó";
    }
}