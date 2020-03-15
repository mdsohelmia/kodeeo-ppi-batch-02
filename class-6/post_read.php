<?php

$postSql = "select * from posts";



$stm=$pdo->query($postSql);

$stm->setFetchMode(PDO::FETCH_ASSOC);

$posts = $stm->fetchAll();
