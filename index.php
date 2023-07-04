<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>
    <title>Турнирная таблица заездов</title>
    <!--Шрифты-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <!--Стили-->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/table.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="header">
                    <div class="header__title">
                        Турнирая таблица заездов
                    </div>
                    <div class="header__form">
                        <form action="" class="form line-form" method="get">
                            <div class="form-block">
                                <label for="cars">Количество участников</label>
                                <input name="countCars" type="number" id="cars" class="default-input" value="<?php if(isset($_GET['countCars'])){echo $_GET['countCars'];} ?>">
                            </div>
                            <div class="form-block">
                                <label for="attempt">Количество заездов</label>
                                <input name="countAttempts" type="number" id="attempt" class="default-input"  value="<?php if(isset($_GET['countAttempts'])){echo $_GET['countAttempts'];} ?>">
                            </div>
                            <div class="form-block">
                                <input name="send" type="submit" class="btn btn-default" value="Применить">
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </header>
        <main>
            <div class="container">
                <?php
                    // Подключение классов
                    require 'objects/Car.php';
                    require 'objects/Attempt.php';
                    // Чтение из файла
                    require 'reader.php';
                    // Переменные
                    require 'variables.php';
                    // Вычисления
                    require 'calculations.php';
                    // Вывод таблицы
                    require 'template.php'

                ?>
            </div>
        </main>
        <footer>
            <div class="container">
                Кондратьев Сергей
            </div>
        </footer>
    </div>
    <!--Скрипты-->
    <script src="scripts/sortingTable.js"></script>
</body>
</html>
