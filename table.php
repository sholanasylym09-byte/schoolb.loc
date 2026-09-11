    <?php
$cols = $rows = $color = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols = abs((int) ($_POST['cols'] ?? 0));
    $rows = abs((int) ($_POST['rows'] ?? 0));
    $color = trim(strip_tags($_POST['color'] ?? ''));
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';
?>
    <form action="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?= htmlspecialchars($cols) ?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?= htmlspecialchars($rows) ?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="<?= htmlspecialchars($color) ?>" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <?php
    drawTable($cols, $rows, $color);
    ?>
    <!-- Таблица -->
