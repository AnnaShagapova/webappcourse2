<?php
$prazd = [
    "2023.03.16" => "ДеНь ДнЯ",
    "2023.03.17" =>"ДеНь ПоМиДоРа",
    "2023.03.18" =>"ДеНь ПиЦцЫ",
    "2023.03.19" =>"ДЕНь СмЕтАнЫ",
    "2023.03.20" =>"ДеНь СлАдКоЙ ВаТы",
    "2023.03.21" =>"ДеНь КоТа",
    "2023.03.22" =>"ДеНь ВсЕх ДнЕй",
    "2023.03.23" =>"ДеНь КиНо",
    "2023.03.24" =>"ДеНь ДуШнИл",
    "2023.03.25" =>"ПрОсТо ДеНь",
    ];
    $now = date("Y.m.d");
    echo "С праздником -  ".$prazd[$now] ."!";
?>