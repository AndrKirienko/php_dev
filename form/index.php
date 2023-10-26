<?php
//require __DIR__;
echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo "<pre>";
var_dump($_REQUEST ['email']);
echo "</pre>";

if(isset($_REQUEST['email'])) //Перевіряє, чи змінна існує (була визначена) в поточному контексті.
{
    echo $_REQUEST['email'] . "<br>";
}
if (!empty($_REQUEST['password'])) //Перевіряє, чи змінна існує і не є пустою
{
    echo $_REQUEST['password'] . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="email" value="" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?php 

//use App as A;

// require 'Message.php';
// require 'EmailService.php';

// $message = new Message();