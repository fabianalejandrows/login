<?php
$db = new mysqli('localhost', 'root', '', 'usuarios');

if($db->connect_error > 0){
    die('Pailas [' . $db->connect_error . ']');
}
?>