<?php

namespace SocialNetwork\Models;

use mysqli;

class ConnectSql
{
    public function __construct($server, $username, $password, $data)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->data = $data;
    }

    public function getDb()
    {
        $conn = mysqli_connect(
            $this->server, 
            $this->username, 
            $this->password, 
            $this->data
        );
        if($conn->connect_error) {
            die("Error: " . $conn->connect_error);
        } else {
            mysqli_set_charset($conn, 'utf8');
            return $conn;
        }
    }

    public function addUser($name, $email, $password)
    {
        $conn = $this->getDb();
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        $cur = "INSERT INTO user (name, email, `password`)
                VALUES ('$name', md5('$email'), md5('$password'))";
        if($conn->query($cur)) {

        } else {
            echo $conn->error;
        }
        $conn->close;
    }

    public function getUser($email, $password)
    {
        $conn = $this->getDb();
        $email = mysqli_real_escape_string($conn, md5($email));
        $password = mysqli_real_escape_string($conn, md5($password));

        $cur = "SELECT * FROM user 
                WHERE `email` = '$email' AND `password` = '$password'";
        $res = $conn->query($cur);
        $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
        $conn->close;
        if ($res) {
            return $res;
        } else{
            return false;
        }
    }

    public function getUserId($id)
    {
        $conn = $this->getDb();
        $id = mysqli_real_escape_string($conn, $id);

        $cur = "SELECT * FROM user 
                WHERE `id` = '$id'";
        $res = $conn->query($cur);
        $res = mysqli_fetch_array($res, MYSQLI_ASSOC);
        $conn->close;
        if ($res) {
            return $res;
        } else{
            return false;
        }
    }
}