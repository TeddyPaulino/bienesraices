<?php
    function conectarDB() {
        $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');
        if($db) {
            echo 'Se conecto';
        }else {
            echo 'Hubo un error';
        }
    }