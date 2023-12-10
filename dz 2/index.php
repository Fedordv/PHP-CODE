<?php
function countNumbers()
{
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "\n";
    }
}

countNumbers();

var_dump(0 == "а");
var_dump(100 == "1e2");
var_dump([] == '');
var_dump([1,2,3] == pow(10000,0));

echo var_dump('');

function multipleSumByValue($num1, $num2, $n, $callback) {
    $result = 0;
    for ($i = 0; $i < $n; $i++) {
        $result += $callback($num1, $num2);
    }
    return $result;
}

$callback = function ($a, $b) {
    return $a + $b;
};

$num1 = 5;
$num2 = 7;
$n = 3;

$finalResult = multipleSumByValue($num1, $num2, $n, $callback);
echo "Final Result: " . $finalResult . "\n";

function modifyParameter(&$param) {
    $param = $param * 2;
}

$value = 10;
modifyParameter($value);
echo "Modified Value: " . $value . "\n";


?>