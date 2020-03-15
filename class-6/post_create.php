<?php
include_once  'helper.php';
include_once 'dbconnection.php';
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $descriptin = $_POST['description'];
    $sql = "INSERT INTO posts(title,description) VALUES('$title','$descriptin');";
    $datacreat=$pdo->exec($sql);
    header('Location: index.php');
}
