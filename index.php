<?php
    header("Content-Type: text/html; charset=UTF-8");
    // Дефолтное имя пользователя
    $username = "Александр";
    // Определение текущей даты и времени
    $time = date("H:i:s");
    //Задача функции для приветствия.
    function greeting()
    {
        global $time;
        global $username;
        if ($time>0&&$time<=6) {
            echo'Доброй ночи, '.$username;
        }
        elseif ($time>6&&$time<=12) {
            echo'Доброе утро, '.$username;
        }
        elseif ($time>12&&$time<=18) {
            echo'Добрый день, '.$username;
        }
        elseif ($time>18&&$time<0) {
            echo'Добрый вечер!, '.$username;
        }
    }
    // Собственно, приветствие...
    $greet = greeting();
    echo $greet;
    echo " Сейчас на ваших часах ".$time;
?>