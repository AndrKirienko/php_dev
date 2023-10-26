<?php

abstract class NotificationService
{
    //абстрактний клас як дефкий шаблон, який потрібно реалізувати в дочірніх классах
    //private abstract function $f(); в абстактному класі не має приватного методу або функції
    public abstract  function send($message):string;
   // public abstract function initConnection();
}


?>