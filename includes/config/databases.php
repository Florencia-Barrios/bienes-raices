<?php

function conectarDB() : mysqli {
    // : mysqli, le indicamos que nos va a retornar una conexión de mysqli.
    $db = mysqli_connect('localhost', 'root', 'admin', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit; //Exit, se va a encargar de que las siguientes líneas no se ejecuten.
    } 

// Y en caso de que haya un error, entonces ya no se ejecuta el código, porque eso nos puede llevar a revelar cierta información sensible.

    return $db; // vamos a retornar una instancia de la conexión.
}

