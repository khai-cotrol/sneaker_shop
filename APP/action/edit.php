<?php


use App\src\sneakerManager;

include "../../vendor/autoload.php";
$index = $_REQUEST['index'];
$name = $_REQUEST['name'];
$mode = $_REQUEST['mode'];
$price = $_REQUEST['price'];
$size = $_REQUEST['size'];
$item = [
    "name" => $name,
    "mode" => $mode,
    "price" => $price,
    "size" => $size
];
$data = new sneakerManager('../../data.json');
$data->update($index, $item);
header('Location: ../../index.php');

