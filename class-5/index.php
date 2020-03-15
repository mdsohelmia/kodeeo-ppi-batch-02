<!doctype html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTMl & PHP</title>
</head>
<body>

<!--
    http method
    post
    get
    put
    delete
-->


<form action="datastore.php" method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="your name "> <br>
    <input type="number" name="roll" placeholder="your roll "> <br>
    <input type="number" name="age" placeholder="your age "> <br>
    <input type="email" placeholder="youre email" name="user_email">
    <input type="search" placeholder="you find ">
    <input type="checkbox">
    <input type="radio">
    <input type="color">
    <input type="date">
    <input type="datetime-local">
    <input type="range">
    <input type="hidden">

    <select id="cars" name="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
    </select>


    <input type="file" name="profile">

    <input type="submit" value="submit">

</form>


</body>
</html>