<?php
/*
  $servername = "127.0.0.1";
  $username = "aminelch";
  $password = "demo";
  $db_name = "konnect_base";

  $conn = new mysqli($servername, $username, $password, $db_name);

*/
/**
 * I suggest to use PDO for simplicity and to avoid the max of SQL injection
 * i will rewrite many parts of this project and i hope you will accept my contribution
 */
try {
    $db=new PDO('mysql:host=localhost;dbname=konnect_base', 'aminelch', 'demo', [
        //PDO::MYSQL_ATTR_INIT_COMMAND=>  "SET NAMES utf8",
        PDO::ATTR_ERRMODE=>             PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE=>  PDO::FETCH_OBJ
    ]);
} catch (Exception $e) {
    echo 'Impossible de se connecter au base de donnée<br>';
    echo '<strong>'.$e->getMessage().'<strong>';
    exit();
}
