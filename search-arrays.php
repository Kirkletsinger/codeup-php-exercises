<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
function findArray($a, $person)
{
    $result = array_search($person, $a);
    if ($result !== FALSE) {
        return TRUE.PHP_EOL;
    } else {
        return FALSE.PHP_EOL;
    }
}
echo findArray($names, 'Tina');
echo findArray($names, 'Bob');
function arrayMatch ($names, $compare)
{
    $count = 0;
    foreach ($names as $person) {
        if (findArray($compare, $person)) {
            $count++;
        }
    } 
    return $count;
}
echo arrayMatch($names, $compare);