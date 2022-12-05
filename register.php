<?php

namespace SocialNetwork\Models;

use Exception;

require_once "config.php";
$db = new ConnectSql($_ENV["server"], $_ENV["server"], $_ENV["password"], $_ENV["data"]);
$format = new Formatter();

if(!empty($_POST)) {
    try{
        $resData = $format->chekRegister($_POST);
        $db->addUser($resData["name"], $resData["email"], $resData["password"]);
        echo "Регистрация прошла успешно!";
        header("Location: ./index.php");
    } catch(Exception $e) {
        echo $e;
    }
    
    
}
?>