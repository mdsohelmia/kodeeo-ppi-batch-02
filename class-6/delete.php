<?php

include_once 'helper.php';

include_once 'dbconnection.php';

$id =$_GET['id'];

$sql = "DELETE FROM posts where id='$id'";
$stm = $pdo->exec($sql);

header('Location: index.php');


