<?php

// Создание массива
$numbers = [1, 2, 3, 4, 5];

$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
  }
  
  // Выводим результат
  echo "Сумма элементов массива: " . $sum . "\n";
  
