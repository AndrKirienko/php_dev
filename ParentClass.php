<?php

namespace parent
{
    class ParentClass
    {
        public string $public = 'public';
        protected string $protected = 'protected';
        private string $private = 'private';

        public function props(): void
        {
            echo __CLASS__ . PHP_EOL;
            echo $this->public . PHP_EOL;
        }
        // protected string $protected = 'protected';
        // private string $private = 'private';
    }
}

