<?php

use App\src\sneakerManager;

include "../../vendor/autoload.php";
$index = $_REQUEST['index'];
$data = new sneakerManager('../../data.json');
$data->delete($index);
header('Location: ../../index.php');
?>
