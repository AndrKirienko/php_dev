<?php

final class MyPDO //final (фінальний результат) - не можливо перевикористати/змінити цей клас, так як final вказує на кінецчний результат
{
    private static $connection;
    private readonly string $a; //тільки для читання
    public function __construct(array $settings)
    {
        $dns = $settings['database']['driver'] .
        ':host=' . $settings['database']['host'] .
        ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        ';dbname=' . $settings['database']['schema'];

       self::$connection = new class{};// \PDO($dns, $settings['database']['username'], $settings['database']['password']);
       //анонимний клас щоб трансформувати якісь структури в об'єктний вид
       //self - обращение статичному об'єкту
       //іньютабельність = незмінність
    }

    public static function getInstance()
    {
        return self::$connection;
    }
}

readonly class D{} //всі об'єкти цього класу будуть тільки для читання