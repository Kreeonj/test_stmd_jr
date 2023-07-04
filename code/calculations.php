<?php
// Подготовка массива под участников
$cars=[];
// Заполнение массива экземплярами класса

// Функция проверки уникальности
function isCarInArray($car, $array){
    foreach ($array as $item){
        if($car->getId()==$item->getId()){
            return true;
        }
    }
    return false;
}
// Циклическое заполенение массива экземплярами класса
while($countCars>count($cars)){
    $challenger= new Car($indexedDataCar[rand(0,count($indexedDataCar)-1)]);
    if(!isCarInArray($challenger, $cars)){

        // Заполнение
        for($j=0; $j<$countAttempts; $j++){
            $newAttempt=new Attempt($indexedDataAttempt[rand(0,59)]);
            $challenger->addAtempt($newAttempt);
            $challenger->resultSum+=$newAttempt->getTime();
        }

        $cars[]=$challenger;
    }
}

// Функция сортировки
function compareByNumber($carA, $carB) {
    return $carB->resultSum - $carA->resultSum;
}
usort($cars, 'compareByNumber');
?>
