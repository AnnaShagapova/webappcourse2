<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
    $month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь', 'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'];
    $now = time();
    $date = explode('-', date('d-n-Y', $now));
    echo $date[0].' '.$month[$date[1]].' '.$date[2].', '.$week[date('w', $now)];
?>
</body>
</html>