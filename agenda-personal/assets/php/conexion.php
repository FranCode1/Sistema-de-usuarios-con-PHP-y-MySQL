<?php
try {
    $con =new PDO("mysql:host=localhost;dbname=agenda_personal","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
} catch (Exception $e) {
    echo "Hay un error".$e->getMessage();
}
?>