<?php
class Car{
    // Поля класса
    private $id;
    private $name;
    private $city;
    private $car;
    public $attempts;
    public $resultSum;

    // Конструктор
    public function __construct($data){
        $this->id=$data['id'];
        $this->name=$data['name'];
        $this->city=$data['city'];
        $this->car=$data['car'];
        $this->attempts=[];
    }
    // Получение номера
    public function getId(){
        return $this->id;
    }
    // Получение имени
    public function getName(){
        return $this->name;
    }
    // Получение города
    public function getCity(){
        return $this->city;
    }
    // Получение автомобиля
    public function getCar(){
        return $this->car;
    }
    // Получение итогового результата
    public function getResult(){
        return $this->resultSum;
    }
    // Добавить попытку во вложенный массив
    public function addAtempt(Attempt $attempt){
        $this->attempts[]=$attempt;
    }
    // Просмотр попыток
    public function getAttempts(){
        return $this->attempts;
    }
}