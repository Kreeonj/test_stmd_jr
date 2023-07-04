<?php
    // Чтение файла с участниками json
    $jsonDataCar=file_get_contents('source/data_cars.json');
    $dataCar=json_decode($jsonDataCar, true);
    $indexedDataCar=array_values($dataCar);

    // Чтение файла с попытками
    $jsonDataAttempt=file_get_contents('source/data_attempts.json');
    $dataAttempt=json_decode($jsonDataAttempt, true);
    $indexedDataAttempt=array_values($dataAttempt);

    ?>




