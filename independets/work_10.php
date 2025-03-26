<?php
$students=[
    [
        'name'=>'Алексей',
        'age'=>22,
    ],
    [
        'name'=>'Мария',
        'age'=>20,
    ],
    [
        'name'=>'Дмитрий',
        'age'=>23,
    ],
];
echo '<table border="1">';
echo '<tr><th>Имя</th><th>Возраст</th></tr>';
foreach ($students as $student) {
    echo '<tr>';
    echo '<td>' . $student['name'] . '</td>';
    echo '<td>' . $student['age'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>
