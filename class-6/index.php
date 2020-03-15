<?php
include_once 'helper.php';
require_once 'dbconnection.php';

//include_once  'post_create.php';


include_once 'post_read.php';


//var_dump($posts);die();


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Post</title>
</head>
<body>
<div class="container">
    <form action="post_create.php" method="post">
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="title" class="form-control" id=titel" placeholder="Enter you post tile">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-success" name="submit">Create</button>
        </div>
    </form>


    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

          <?php foreach ($posts as $key=>$post) { ?>


            <tr>

                <th scope="row"><?php echo $post['id']?></th>
                <td><?php echo  $post['title']?></td>
                <td><?php echo $post['description']?></td>
                <td>
                    <a class="btn btn-primary" href="view.php?id=<?php echo $post['id']?>"">View</a>
                    <a href="delete.php?id=<?php echo $post['id']?>" class="btn btn-danger">Delete</a>
                    <a class="btn btn-success" href="update.php?id=<?php echo $post['id']?>">Edit</a>
                </td>
            </tr>

           <?php } ?>
            </tbody>
        </table>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
