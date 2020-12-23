<?php
class SelectionSort
{
    public $list;
    public $count;
    public function __construct(array $list)
    {
        $this->list = $list;
        $this->count = count($this->list);;
    }

    public function selectionSort(array $list)
    {

        for ($index = 0; $index <= $this->count - 2; $index++) {
            $min = $this->list[$index];
            $index_min = $index;
            for ($i = $index; $i <= $this->count - 1; $i++) {
                if ($this->list[$i] < $min) {
                    $min = $this->list[$i];
                    $index_min = $i;
                }
            }
            $temp = $this->list[$index];
            $this->list[$index] = $this->list[$index_min];
            $this->list[$index_min] = $temp;
        }
        return $this->list;
    }
}
$arrayList = [12, 3, 1, 4, 51, -8, 10];

$objSelectionSort = new SelectionSort($arrayList);

print_r($objSelectionSort->selectionSort($arrayList));
