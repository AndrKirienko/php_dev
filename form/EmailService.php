<?php

class EmailService extends NotificationService
{
    public function __construct(
        private string $emailTo,
        private string $name,
        private string $emailFrom,
        private string $config,
        private string $defaultText = ''
    )
    {}
 
    public function send($massage): string
    {
        list($ip, $port) = $this->config;

        //підключення 
        $ch = curl_init();

        // установка URL и других необходимых параметров
        curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // загрузка страницы и выдача её браузеру
        curl_exec($ch);

        // завершение сеанса и освобождение ресурсов
        curl_close($ch);

        return 'ok';
    }
}

?>