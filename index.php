<?php

use App\src\sneakerManager;

include "vendor/autoload.php";
$data = new sneakerManager("data.json");
$sneakers = $data->getData();
 ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sneaker Shop</title>
</head>
<body>
<?php
include "view/navbar.php";
?>
<div class="col-12 col-md-12 mt-2" ">
    <div class="card">
        <div class="card-header">
            Danh sách khách hàng
        </div>
        <div class="card-body" >
            <div class="col-12">
                <a class="btn btn-success mb-2" href="view/add.php">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Mode in</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($sneakers as $key => $sneaker): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $sneaker->getName() ?></td>
                        <td><?php echo $sneaker->getMode() ?></td>
                        <td><?php echo $sneaker->getPrice() ?></td>
                        <td><?php echo $sneaker->getSize() ?></td>
                        <td><a href="APP/action/delete.php?index=<?php echo $key; ?>"
                               class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                            <a href="view/update.php?edit&index=<?php echo $key; ?>"
                               class="btn btn-primary btn-sm">Update</a></td>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
