<?php
if (isset($_REQUEST['date'])) {
    $date = explode('.', $_REQUEST['date']);
    $dateStr = $date[1].$date[0];
    if ($dateStr >= '0321' and $dateStr <= '0419') {
        echo 'Овен';
    }
    if ($dateStr >= '0420' and $dateStr <= '0520') {
        echo 'Телец';
    }
    if ($dateStr >= '0521' and $dateStr <= '0620') {
        echo 'Близнецы';
    }
    if ($dateStr >= '0621' and $dateStr <= '0722') {
        echo 'Рак';
    }
    if ($dateStr >= '0723' and $dateStr <= '0822') {
        echo 'Лев';
    }
    if ($dateStr >= '0823' and $dateStr <= '0922') {
        echo 'Дева';
    }
    if ($dateStr >= '0923' and $dateStr <= '1022') {
        echo 'Весы';
    }
    if ($dateStr >= '1023' and $dateStr <= '1121') {
        echo 'Скорпион';
    }
    if ($dateStr >= '1122' and $dateStr <= '1221') {
        echo 'Стрелец';
    }
    if (($dateStr >= '1222' and $dateStr <= '1231') or ($dateStr >= '0101' and $dateStr <= '0119')) {
        echo 'Козерог';
    }
    if ($dateStr >= '0120' and $dateStr <= '0218') {
        echo 'Водолей';
    }
    if ($dateStr >= '0219' and $dateStr <= '0320') {
        echo 'Рыбы';
    }
}
?>
<form action="" method="get">
    <input type="text" name="date" placeholder="">
    <input type="submit">
</form>