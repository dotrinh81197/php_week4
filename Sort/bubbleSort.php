<?php
class BubbleSort
{
    public $list;
    public $count;
    public function __construct(array $list)
    {
        $this->list = $list;
        $this->count = count($this->list);
    }

    public function bubleSort()
    {
        for ($i = 0; $i < $this->count; $i++) {
            for ($j = 0; $j < $this->count - $i - 1; $j++) {
                if ($this->list[$j] > $this->list[$j + 1]) {
                    $temp = $this->list[$j + 1];
                    $this->list[$j + 1] = $this->list[$j];
                    $this->list[$j] = $temp;
                }
            }
        }
        return $this->list;
    }
}
$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$objBubbleSort = new BubbleSort($list);
echo "<pre>";
print_r($objBubbleSort->bubleSort());
