<?php

/* localhost
$db_host = "localhost";
$db_name = "ritm2020";
$db_user = "root";
$db_pass = "root";
//*/

//* remote: ritm-miet.ru
$db_host = "localhost";
$db_name = "ch86859_django";
$db_user = "ch86859_django";
$db_pass = "xf3h1fy1hXFxHF3yf33";
//*/

try{
    $db_con = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8", $db_user, $db_pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>

