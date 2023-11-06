<?php
trait Utility
{
    //вони не мають типу
    //не потрібно наслідувати для класса, не батьківського ні дочірнього, просто підключити в самому класі "use"
    //не дублюваnи код
    //точково розшири якийсь класс
    //багаторазове наслідування
    //через баготоразове використовування може устладнити систему
    public string $subTitle;
    public function setSubTitle()
    {
        $this->subTitle = $this;
    }
    public function getSubTitle()
    {
        return $this->subTitle;
    }
}
