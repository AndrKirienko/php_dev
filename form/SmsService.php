<?php
class SmsService extends NotificationService
{
    public function __construct(
        private string $number,
        private array $config
    )
    {}

    public function send($message):string
    {
        //init config
        //init connection
        //init send

        return 'ok';
    }
}