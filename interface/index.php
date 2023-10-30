<?php

interface AnimalInterface //чистий шаблон (як абстрактний), який містить константи та функції
{
    public const FF = 1;
    public function voice();
}

abstract class Animal implements AnimalInterface
{
    public abstract function voice();
}
