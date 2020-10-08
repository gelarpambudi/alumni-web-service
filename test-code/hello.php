<?php

    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<h2> Hello $name, the server is up :) </h2>";
    } 
    else {
        echo "<h2> Whoops i don't know your name, but the server is up tho :) </h2>";
    }
    
?>