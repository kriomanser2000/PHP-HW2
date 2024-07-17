<?php
$firstNumber = 9;
$secondNumber = 6;
if ($firstNumber % 3 == 0 && $secondNumber % 3 == 0) 
{
    echo "Сума чисел: " . ($firstNumber + $secondNumber);
}
elseif ($secondNumber != 0) 
{
    echo "Результат ділення: " . ($firstNumber / $secondNumber);
} 
else 
{
    echo "Некоректний ввід: ділення на нуль";
}
?>