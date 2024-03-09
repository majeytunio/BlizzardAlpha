<?php

define('HOST', "localhost");
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'blizzardalpha');


function getConnection(){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die(mysqli_error("Cannot connect!"));

    return $conn;
}

?>