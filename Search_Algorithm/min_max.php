<?php
function searchMinValue(array $numbers)
{

    $min = $numbers[0];
    foreach ($numbers as $key => $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(3, 40);
}
echo "<pre>";

var_dump($numbers);
echo "Min <br>";
echo searchMinValue($numbers);


function searchMaxValue(array $numbers)
{

    $max = $numbers[0];
    foreach ($numbers as $key => $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}
echo " <br> Max  <br>";
echo searchMaxValue($numbers);
