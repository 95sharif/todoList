<?php

require 'database.php';

$db = new Db();
$response = $db->delete_by_id($_GET['id']);
header("Location: main.php");

?>
