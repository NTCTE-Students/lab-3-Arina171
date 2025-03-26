<?php

// Создание массива
$fruits = ['Клубничка', 'Банана', 'Апельсин'];

// Сортировка массива
sort($fruits);

foreach($fruits as $fruit) {
    print("{$fruit}<br>");
}