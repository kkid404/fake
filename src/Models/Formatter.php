<?php

namespace SocialNetwork\Models;

use Exception;

class Formatter
{
    public function chekRegister(array $array)
    {
        if (empty($array["name"])) {
            return throw new Exception("Name is a required field!");
        }
        if (empty($array["email"])) {
            return throw new Exception("Email is a required field!");
        }
        if (empty($array["password"])) {
            return throw new Exception("Password is a required field!");
        }
        if (empty($array["password_confirm"])) {
            return throw new Exception("Confirm password is a required field!");
        }
        if ($array["password_confirm"] !== $array["password"]) {
            return throw new Exception("The passwords don't match!");
        }
        return $array;
    }
}