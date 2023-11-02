<?php

class Message extends NotificationService
{
    // public function __construct(
    //     public string $title,
    //     public string $body
    // )
    // {}
    public function send($message): string
    {
        //init config
        //init connection
        //init send

        return 'ok';
    }
    use UtilityNew;
    use Utility{
        Utility::getSubTitle as private;
    }
    use Utility{
        Utility::setSubTitle insteadof UtilityNew;
        UtilityNew::getSubTitle as getSubTitleFromNew;

    }
}

?>