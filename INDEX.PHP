<?php

// Класс с примером структуры
class MyClass {
    private $myPrivateVar;

    // Конструктор класса
    public function __construct($value) {
        $this->myPrivateVar = $value;
    }

    // Метод для получения значения переменной
    public function getMyPrivateVar() {
        return $this->myPrivateVar;
    }
}

// Функция с рекурсивным вызовом
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Использование класса и функции
$myObject = new MyClass(5);
echo "Значение приватной переменной: " . $myObject->getMyPrivateVar() . "\n";

$number = 6;
echo "Факториал числа $number: " . factorial($number) . "\n";

// Использование массива и цикла
$myArray = array("Apple", "Banana", "Cherry");
echo "Элементы массива: ";
foreach ($myArray as $item) {
    echo $item . " ";
}

// Работа с файлами
$filename = "example.txt";
$file = fopen($filename, "w");
fwrite($file, "Пример текста для записи в файл\n");
fclose($file);
echo "\nЗапись в файл завершена.";

?>
