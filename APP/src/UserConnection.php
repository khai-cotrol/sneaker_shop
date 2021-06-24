<?php


namespace App\src;


use JetBrains\PhpStorm\Pure;

class UserConnection
{
    public static string $path = '../user.json';

    public static function getDaTaToFile(): array
    {
        $dataJson= file_get_contents(self::$path);
        $data = json_decode($dataJson);
        return self::convertUser($data);
    }
    public static  function saverUser($data)
    {
        $dataJson = json_encode($data);
        file_put_contents(self::$path,$dataJson);
    }
     public static function convertUser($data): array
     {
        $users = [];
        foreach ($data as $item){
            $user=new user($item->username,$item->password);
            array_push($users,$user);
        }
        return $users;

    }
    public static function addUser($user)
    {
        $users = self::getDaTaToFile();
        array_push($users, $user);
        self::saverUser($users);
    }
    public static function checkLogin($user): bool
    {
        $users = self::getDaTaToFile();
        foreach ($users as $item){
            if ($user->username == $item->username && $user->password == $item->password){
                return true;
            }
        }
        return  false;
    }
    public static function Login($username, $password)
    {
        $user = new user($username, $password);
        if (self:: checkLogin($user)) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            header('Location: index.php');
        } else {
            echo 'sai roi bro';
        }
    }



}