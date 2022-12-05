<?php
namespace SocialNetwork\Models;

use Exception;

require_once "config.php";

echo $username;

$db = new ConnectSql($_ENV["server"], $_ENV["server"], $_ENV["password"], $_ENV["data"]);


// try{
//     $db->addUser("name", "email", "pass");
// } catch(Exception $e) {
//     echo $e;
// }



?>
<!-- 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main</title>
        <link rel="stylesheet" href="./src/css/fonts.css">
        <link rel="stylesheet" href="./src/css/style.css">
        <link rel="stylesheet" href="./src/css/null.css">
    </head>
    <body>
        <header class="header">
            <div class="logo__text">
                <h1 class="heading__text heading__fonts">Anti Social Network</h1>
                <p class="descript__text text__fonts">uncensored, unrestricted</p>
            </div>
            <div class="header__btns">
                <a href="#" target="_blank" class="header__btn text__fonts">Sign up</a>
                <a href="#" target="_blank" class="header__btn text__fonts">Sign in</a>
            </div>
        </header>
        <main class="main">
            <div class="main__text">
                <div class="container__paragraph">
                    <h3 class="paragraph__heading heading__fonts">Why  Fake?</h3>
                    <p class="paragrph__text text__fonts">
                        It's like a regular social network, but 
                        without the personalities.  
                        You can communicate on any topic without 
                        worrying about social censure.  We're 
                        committed to freedom, 
                        so you can talk about anything you want. 
                    </p>
                </div>
                <div class="container__paragraph">
                    <h3 class="paragraph__heading heading__fonts">
                        So I can talk about anything?
                    </h3>
                    <p class="paragrph__text text__fonts">
                        Yes, you can discuss whatever you want. 
                        Fake is an open source platform.  
                        You can make sure that we don't store 
                        IP addresses in a database.
                    </p>
                </div>
                <div class="container__paragraph">
                    <h3 class="paragraph__heading heading__fonts">
                        So I can talk about anything?
                    </h3>
                    <p class="paragrph__text text__fonts">
                        Yes, you can discuss whatever you want.  
                        Fake is an open source platform.  
                        You can make sure that we don't store 
                        IP addresses in a database.
                    </p>
                </div>
                <div class="main__headind__principles">
                    <h2 class="headind__principles">The Principles</h2>
                </div>
                <div class="container__principles">
                    <div class="principles__block">
                        <img src="./src/img/100.png" class="principles__img"  alt="anonimus">
                        <h3 class="principles__heading heading__fonts">Anonymity</h3>
                        <p class="principles__text text__fonts">
                            The main principle of Fake is anonymity. 
                            You can put your picture, but you should 
                            not put your real name and surname.
                        </p>
                    </div>
                    <div class="principles__block">
                        <img src="./src/img/100.png" class="principles__img" alt="liberty">
                        <h3 class="principles__heading heading__fonts">Liberty</h3>
                        <p class="principles__text text__fonts">
                            We are for freedom of thought. 
                            You can be a Nazi, an alien, 
                            or Vladimir Putin. All are welcome.
                        </p>
                    </div>
                    <div class="principles__block">
                        <img src="./src/img/100.png" class="principles__img"  alt="anonimus">
                        <h3 class="principles__heading heading__fonts">Anonymity</h3>
                        <p class="principles__text text__fonts">
                        We love everyone equally. 
                        Fake is a living  organism created by its users.  
                        Make yourself at home.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </body>
    </html> -->