<?php
// Инициализация массива
// Упражнение 4 (data.inc.php): href всех пунктов ведёт на index.php с параметром id
$leftMenu = [
  ['link'=>'Домой', 'href'=>'index.php'],
  ['link'=>'О нас', 'href'=>'index.php?id=about'],
  ['link'=>'Контакты', 'href'=>'index.php?id=contact'],
  ['link'=>'Таблица умножения', 'href'=>'index.php?id=table'],
  ['link'=>'Калькулятор', 'href'=>'index.php?id=calc']
];

// === Упражнения 2 и 3: Установка даты и приветствия ===
date_default_timezone_set('Asia/Almaty');

$day = date('d');
$mon = date('m');
$year = date('Y');

$hour = (int) date('G');
$welcome = '';

if ($hour >= 0 && $hour < 6) {
    $welcome = 'Доброй ночи';
} elseif ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
} elseif ($hour >= 18 && $hour <= 23) {
    $welcome = 'Добрый вечер';
} else {
    $welcome = 'Доброй ночи';
}
