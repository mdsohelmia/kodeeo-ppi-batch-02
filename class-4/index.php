<?php

// include_once  'functions.php';
// include_once  'functions.php';

require_once('functions.php')  ;

require_once  'functions.php';

echo 'Functions';
echo "<br/>";

//to topic function

function numberPrint($stratNumber = 0, $number):void //parameter
{
    for ($stratNumber; $stratNumber <= $number; $stratNumber++) {

        echo $stratNumber.'<br/>';
    }
}


numberPrint (50, 100); //argument



echo  sum (10,4);






echo  sub ([34,443],22);

