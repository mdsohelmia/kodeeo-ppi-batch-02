<?php
include_once 'helper.php';
include 'dbconnection.php';
$id=$_GET['id'];
$redSql = "SELECT * FROM posts WHERE id ='$id'";
 $smt= $pdo->query($redSql);
 $oldPost=$smt->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <form action="post_create.php" method="post">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" name="title" class="form-control" id=titel" value="<?php echo $oldPost['title']?>" placeholder="Enter you post tile">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $oldPost['description']?></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success" name="submit">update</button>
            </div>
        </form>
    </div>
</body>
</html>
