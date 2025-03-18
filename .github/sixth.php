<?php

// Создание массива
$fruits = ['Яблоко', 'Клубника', 'Апельсин'];

// Сортировка массива
sort($fruits);

foreach($fruits as $fruit) {
    print("{$fruit}<br>");
}