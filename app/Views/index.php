<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1cbcfd8c59.js" crossorigin="anonymous"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Text&family=Poppins&display=swap');

    * {
        font-family: Poppins;
    }

    .upc {
        font-family: 'Libre Barcode 39 Text';
    }
    </style>
    <title>My Shop</title>
</head>

<body class="px-3">
    <div class="bg-primary p-3 text-center rounded-bottom">
        <div class=" fs-1 fw-b text-white"><i class="fa-solid fa-store"></i> ExeTech</div>
    </div>
    <br>
    <div class="p-2">
        <h2>Products
            <a href="/add" class="btn btn-secondary rounded-pill"> <i class="fa-solid fa-circle-plus"></i> Add
                Product</a>
        </h2>
    </div>
    <div class="px-3">
        <ul class="list-group list-group-flush">
            <?php 
            foreach($category as $cat){?>
            <div class="fs-5 p-2 mt-2 ">
                <b><?=$cat['category']?></b>
            </div> <?php
            foreach ($products as $val){
            if ($val['category_id'] == $cat['category_id']){
            ?>
            <li class="list-group-item "><a href="/edit/<?=$val['product_id']?>"
                    class="btn btn-light form-control text-start"><i class="fa-solid fa-caret-right"></i>
                    <?=$val['name']?></a>
            </li>
            <?php } } }?>
        </ul>
    </div>

</body>

</html>