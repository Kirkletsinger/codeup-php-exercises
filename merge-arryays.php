<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
// function findArray($a, $person)
// {
//     $result = array_search($person, $a);
//     if ($result !== FALSE) {
//         return TRUE.PHP_EOL;
//     } else {
//         return FALSE.PHP_EOL;
//     }
// }
// echo findArray($names, 'Tina');
// echo findArray($names, 'Bob');
// function arrayMatch ($names, $compare)
// {
//     $count = 0;
//     foreach ($names as $person) {
//         if (findArray($compare, $person)) {
//             $count++;
//         }
//     } 
//     return $count;
// }
// echo arrayMatch($names, $compare);
function combineArrays($firstArray, $secondArray)
{
    $newArray = [];
    foreach ($firstArray as $person1) {
       $comparison = array_shift($secondArray);
       if ($person1 == $comparison) {
           array_push($newArray, $person1);
       } else{
            array_push($newArray, $person1, $comparison);
       }
    }
    return $newArray;
}
print_r(combineArrays($names, $compare)) ;