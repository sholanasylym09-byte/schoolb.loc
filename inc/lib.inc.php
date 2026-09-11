<?php
// Упражнение 3 (table.php): отрисовка таблицы умножения через функцию
function drawTable($cols, $rows, $color = '#dcdcdc') {
    echo "<table border='1' cellpadding='6' cellspacing='0'>";
    for ($r = 0; $r <= $rows; $r++) {
        echo '<tr>';
        for ($c = 0; $c <= $cols; $c++) {
            if ($r === 0 && $c === 0) {
                // Пустая угловая ячейка
                echo '<td>&nbsp;</td>';
            } elseif ($r === 0 || $c === 0) {
                // Упражнение 2: первая строка и первый столбец - полужирным, по центру, другим фоном
                $label = $r === 0 ? $c : $r;
                echo "<td style='font-weight: bold; text-align: center; background-color: {$color};'>{$label}</td>";
            } else {
                // Произведение номера столбца на номер строки
                echo '<td>' . ($r * $c) . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Упражнение 4 (index.php): функция отрисовки меню (вертикально или горизонтально)
function drawMenu($menu, $vertical = true) {
    $style = $vertical
        ? ''
        : " style='display: flex; list-style: none; gap: 15px; padding: 0;'";
    echo "<ul{$style}>";
    foreach ($menu as $item) {
        echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo '</ul>';
}
