<?php
//Bernardo--
//criação de classe de validação 
class Validation
{
    //criação das requisições que serão cobradas no client.php
    public static function validateId(int $id)
    {
        return $id > 0;
    }
    public static function validateName(string $name): bool
    {
        return strlen($name) > 2 && !is_numeric($name);
    }

    public static function validatePhone(string $phone)
    {
        return preg_match("/^\(?\d{2}\)?[\s-]?\d{5}-?\d{4}$/", $phone);
    }

    public static function validateEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
?>