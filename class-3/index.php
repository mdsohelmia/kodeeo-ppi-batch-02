<?php


//echo "class</br>";
//
//$age = 23;
//
//
//if ($age < 10) {
//
//    echo 'you are child';
//
//} elseif ($age === 18 || $age = 25) {
//
//    if ($age === 18) {
//        echo "welcome {$age}";
//    } elseif ($age < 25) {
//        echo "welcome {$age}";
//    }
//
//    echo "you are young";
//
//} else {
//    echo $age;
//}
//
////
//echo "<br/>";
//
//for ($i = 10; $i >= 0; $i -= 2) {
//
//    echo $i.'<br/>';
//
//}
//echo "<br/>";
//
//$j = 0;
//
//while ($j <= 10) {
//
//    echo $j.'<br/>';
//    $j++;
//
//}
//
//$name1 = 'test name 1';
//$name2 = 'test name 2';
//$name3 = 'test name 3';
//$name4 = 'test name 4';
//$name5 = 'test name 5';


//$name = array(2=>'name', 'name2', 'sohel', 'ciam', 'rakib');
//echo '<br/>';
//
//$name[0] = 'Test 1 name';
//echo $name[0];
//
//print_r ($name);


$cart = [
    
    'item'=> 'item1',
    'price'=>10.22,
    'quantity'=>3,
];


var_dump ($cart['price'] * $cart['quantity']);
echo "<br/>";

echo gettype ($cart);