<?php
include_once  'helper.php';
include_once 'dbconnection.php';
$id =$_GET['id'];
$sql="SELECT * FROM posts where id='$id'";
$stm=$pdo->query($sql);
$post=$stm->fetch();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo  $post['title']?></h1>
            <p class="lead"><?php echo  $post['description'] ?></p>



        </div>
    </div>
</body>
</html>



