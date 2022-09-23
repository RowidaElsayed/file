<?php
//  $gender = 'F';
// if ($gender == 'F') {
//     echo "FEMALE";
// } else {
//     echo "MALE";
// }




// $marks = 75;

// if ($marks > 79) {
//     echo "A";
// } elseif ($marks <= 79 &&  $marks > 60) {
//     echo "B";
// } elseif ($marks <= 60 && $marks > 50) {
//     echo "C";
// } elseif ($marks = 50) {
//     echo "D";
// } else {
//     echo "F";
// }





$number1 = 40;
$number2 = 12;

if ($number1 != $number2) {
    echo 'number1 is different from number2';
    echo '<br>';
    if ($number1 > $number2) {
        echo 'number1 is greater than number2';
    } else {
        echo 'number2 is greater than number1';
    }
} else {
    echo 'number1 is equal to number2';
}






//variable definition
// $gender = 'M';
// switch ($gender) {
//     case 'F':
//         echo 'F is FEMALE';
//         break;
//     case 'M':
//         echo 'M is MALE';
//         break;
//     default:
//         echo 'Invalid choice';
// }




// price 80 is 2 ,90 is  3 , 95 is 5 
$l = 5;
$oil = 80;

switch ($oil) {
    case 80:
        echo $l * 2;
        break;
    case 90:
        echo $l * 3;
        break;
    case 95:
        echo $l * 5;
        break;
}

// ?>
