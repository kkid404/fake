<?php
namespace SocialNetwork\Models;

require_once "config.php";
// require_once "./templates/header.php";

$db = new ConnectSql($_ENV["server"], $_ENV["username"], $_ENV["password"], $_ENV["data"]);


$user_id = $_GET["id"];
echo $user_id;
$res = $db->getUserId($user_id);
// $res = $db->getUserId($user_id);

echo $res;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$res["name"]?></h1>
</body>
</html>