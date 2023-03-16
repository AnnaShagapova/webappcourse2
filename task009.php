<form action="" method="POST">
    <textarea name="symb" id="" ></textarea><br>
    <input type="submit" value="Отправить"><br>
</form>

<?php
if (isset($_POST['symb'])) {
    $symb = $_POST['symb'];
    $symbol = strlen($symb);
    $words = count(explode(' ', $symb));
    $space = count(explode(' ', $symb)) - 1;
    echo 'Символов: ' .$symbol. '<br>'. 'Слов: ' .$words. '<br>'. 'Пробелов: '.$space;
}
?>