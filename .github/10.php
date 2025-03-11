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

// Начинаем HTML-таблицу
echo '<table border="1">';

// Выводим заголовки таблицы
echo '<tr>';
foreach (array_keys($students[0]) as $key) {
    echo '<th>' . htmlspecialchars($translate[$key]) . '</th>';
}
echo '</tr>';

// Вывод элементов многомерного массива
foreach ($students as $student) {
    echo '<tr>';
    foreach ($student as $key => $value) {
        echo '<td>' . htmlspecialchars($value) . '</td>';
    }
    echo '</tr>';
}

// Заканчиваем HTML-таблицу
echo '</table>';
