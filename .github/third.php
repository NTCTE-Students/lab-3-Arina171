<?php

// Создание многомерного массива
$students = [
	[
		'name' => 'Коля банан ',
		'age' => 22,
	],
	[
		'name' => 'Коля пупсик ',
		'age' => 20,
	],
	[
		'name' => 'Коля доска ',
		'age' => 23,
	],
];

// Второй массив для перевода на русский язык ключей
$translate = [
	'name' => 'Имя',
	'age' => 'Возраст',
];

// Вывод элементов многомерного массива
foreach($students as $student) {
    foreach($student as $key => $value) {
        print("{$translate[$key]}: {$value}");
    }
    print('<br>');
}