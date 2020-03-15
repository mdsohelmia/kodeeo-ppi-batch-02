<?php


function sum(int $number1, int $number2): int //type hint and return type function
{

    return $number1 + $number2;

}

// type hint return
// strint ,float bool array,objet;

function sub(array $number1, int $number2): int //type hint and return type function
{

    return $number1[0] + $number2;

}


// hiegher order function
//varibale function or anonymous function


$naem = 'jon deo';
//$func = function () use ($naem) {
//
//    if ( str_word_count ($naem) <=2) {
//        return "2";
//    }
//
//    return 6;
//
//
//};


function greeting(callable $func)
{
    return $func;
}


greeting (function () use ($naem) {

    if (str_word_count ($naem) <= 2) {
        return "2";
    }

    return 6;

});

echo '<br/>';


//recursive function is name just . recurtion is  action of recursive


function customeLoop($i = 0)
{
    echo $i .'<br/>';


   if($i < 100 ){
       customeLoop ($i+1);
   }

}


customeLoop (40);





