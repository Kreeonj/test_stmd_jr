<?php

// Первоначальная проверка заполненности количества попыток
if (empty($_GET['countAttempts'])) {
    $countAttempts = 4;
} else {
    $countAttempts = $_GET['countAttempts'];
}

// Первоначальная проверка заполненности количества участников
if (empty($_GET['countCars'])) {
    $countCars = 15;
} else {
    $countCars = $_GET['countCars'];
}

// Отправка формы
if (isset($_GET['send'])) {
    // Проверка на заполненность
    if (empty($_GET['countAttempts']) || empty($_GET['countCars'])) {
        $messageError = "Обязательно введите количество заездов и участников, использованы стандартные значения!";
        echo "<div class='error'>".$messageError."</div>";
        $countCars = 15;
        $countAttempts = 4;
        return; // прервать выполнение скрипта
    } else {
        $countAttempts = $_GET['countAttempts'];
        $countCars = $_GET['countCars'];

        // Проверка на натуральность чисел
        if($countAttempts>0 && $countCars>0){
            // Проверка на количество участников
            if ($countCars > count($indexedDataCar)) {
                $messageError = "В соревнования участвует меньше участников, чем вы ввели! Всего зарегистрировано ". count($indexedDataCar)." участников";
                echo "<div class='error'>".$messageError."</div>";
                $countCars = 15;
            }else{
                // Вывод сообщения об успешном конфигурировании
                $messageSuccess = "Ваша таблица с ". $countCars." участников и заездами ". $countAttempts;
                echo "<div class='success'>".$messageSuccess."</div>";
            }
        }else{
            // Вывод ошибки о натуральности вводимых чисел
            $messageError = "Число заездов и участников должно быть положительным! Использованы стандартные данные";
            echo "<div class='error'>".$messageError."</div>";
            $countCars = 15;
            $countAttempts = 4;
        }


    }
}

