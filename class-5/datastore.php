<?php
function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';

    die();
}

//$name ='name';
////scope global
//
//
//$name = 'test3';
//
//function test(){
// $name='test'; //local scope
//
//    echo  $name;
//
//}
//echo  $name;
//
//test();


$class = [4, 5, 6, 8, 20];

//    dd($class);

//for($i=0; $i<count($class); $i++){
//    echo  $class[$i];
//}


//exit();
$students = [
    'name' => "Sohel",
    'roll' => '43343',
    'age' => 13
];

$postData = $_POST;

$name='hello';

if(isset($name)){
    echo $name;
}



echo  "<br/>";
$postData['username'];

//echo $postData['username'] = 'Jakir';
//echo '<br/>';
//echo $postData['roll'] = '34353';
//echo '<br/>';
//echo $postData['age'];


if(empty($postData['username'])===true){
    echo  'required name';
}else{
    echo  'name nai';
}

foreach ($postData as $index => $singeData) {

    if ($index === 'username') {
        echo 'Mr,' . (string) $singeData . '<br/>';
    } else {
        echo $index . '=' . $singeData . '<br/>';
    }
}

//$_GET


dd($_FILES);

$files=$_FILES;













