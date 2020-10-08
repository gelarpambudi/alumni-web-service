<?php
    $name = $_GET['name'];

    if (isset($name)) {
        echo "Hello $name, the server is up :)";
    } 
    else {
        echo "Whoops i don't know your name, but the server is up tho :)";
    }
    
?>