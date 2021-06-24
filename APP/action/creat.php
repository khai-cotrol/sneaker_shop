<?php


use App\src\sneakerManager;

include "../../vendor/autoload.php";

$name = $_POST['name'];
$mode = $_POST['mode'];
$price= $_POST['price'];
$size = $_POST['size'];

$item=[
    "name"=>$name,
    "mode"=>$mode,
    "price"=>$price,
    "size"=>$size
];
$data = new sneakerManager("../../data.json");
$data ->addData($item);
header('Location:../../index.php');

