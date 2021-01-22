<?php
class DivideByZeroException extends Exception
{

    public function __toString()
    {
        return "Can't Divine by Zero";
    }
}

function divide($numberator, $denomninator)
{
    if ($denomninator === 0) {
        throw new DivideByZeroException();
    }
    return $numberator / $denomninator;
}


try {
    $result =  divide(5, 2);
    echo $result;
    echo "<hr>";
    $result = divide(6, 0);
    echo $result;
} catch (DivideByZeroException $e) {;
    echo 'Có lỗi xảy ra' . $e;
}
