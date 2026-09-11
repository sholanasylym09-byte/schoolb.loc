    <?php
// 1. Получаем значение директивы из php.ini (например, "8M")
$val = trim(ini_get('post_max_size'));

// 2. Получаем последний символ (единицу измерения: K, M, G...)
$last = strtolower($val[strlen($val) - 1]);

// 3. Получаем числовую часть без последней буквы
$size = (int)$val;

// 4. Двумя вопросами определяем точный размер в байтах
// Вопрос 1: Какая единица измерения указана (K, M, G)?
// Вопрос 2: На сколько байт (2^10, 2^20, 2^30) нужно умножить числовое значение?
switch ($last) {
    case 'g':
        $size *= 1024 * 1024 * 1024;
        break;
    case 'm':
        $size *= 1024 * 1024;
        break;
    case 'k':
        $size *= 1024;
        break;
}
?>
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
