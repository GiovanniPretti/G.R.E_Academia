<?php 
    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("DB","uni_gre");

    $conn = mysqli_connect(HOST, USER, PASS, DB);
    $mysqli = new mysqli(HOST, USER, PASS, DB);
?>