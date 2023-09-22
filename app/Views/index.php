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
    <div class="p-3 text-center mb-5 rounded-top rounded-5 text-warning bg-dark">
        <div class=" fs-1 fw-b"><i class="fa-solid fa-microchip"></i> ExeTech</div>
    </div>
    <div class="px-4 pt-3 pb-2 bg-warning rounded-3 rounded-bottom">
        <div class="fs-3"><b>Products</b>
            <a href="/add" class="btn btn-light rounded-3 btn-sm"> <i class="fa-solid fa-bag-shopping"></i>
                Add
                Product</a>
            <a href="/category" class="btn btn-light rounded-3  btn-sm"><i class="fa-solid fa-list"></i>
                Add Category</a>
        </div>
    </div>
    <div class="px-2 pb-3 my-1 bg-dark rounded-3 rounded-top">
        <ul class="list-group list-group-flush">
            <?php 
            foreach($category as $cat){?>
            <div class="fs-4 p-2 px-4 mt-2 text-warning">
                <?=$cat['category']?>
            </div> <?php
            foreach ($products as $val){
            if ($val['category_id'] == $cat['category_id']){
            ?>
            <li class="list-group-item bg-dark  d-flex justify-content-between align-items-center"><a
                    href="/edit/<?=$val['product_id']?>" class="btn btn-light form-control text-start"><i
                        class="fa-solid fa-caret-right"></i>
                    <?=$val['name']?></a>
                <span class="badge bg-danger rounded-2 ms-1"><a class="btn btn-sm text-white"
                        href="/delete/<?= $val['product_id']?>"><i class="fa-solid fa-trash"></i> Delete</a></span>
            </li>
            <?php } } }?>
        </ul>
    </div>

</body>

</html>