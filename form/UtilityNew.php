<?php
trait UtilityNew
{
    //вони не мають типу
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
