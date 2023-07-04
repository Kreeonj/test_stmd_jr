<?php
class Attempt{
    // Поля класса
    public $id;
    public $result;

    // Конструктор
    public function __construct($data){
        $this->id=$data['id'];
        $this->result=$data['result'];
    }

    public function getTime(){
        return $this->result;
    }
}