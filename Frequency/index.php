<?php
function countAppear($numbers, $num)
{
    $count = 0;
    foreach ($numbers as $key => $value) {
        if ($value == $num) {
            $count++;
        }
    }
    return $count;
}
$numbers = [];
for ($i = 0; $i < 20; $i++) {
    $numbers[] = rand(0, 10);
}
echo "<pre>";
print_r($numbers);
echo "Số lần xuất hiện của 3 là :" . countAppear($numbers, 3);
