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
    <div class="my-3"><a href="/index" class="btn btn-light rounded-pill">
            <i class="fa-solid fa-chevron-left"></i> Back</a></div>
    <div class="bg-dark p-3 rounded-3 mb-3">
        <form action="/save_cat" method="post">
            <div class="input-group">
                <input type="text" class="form-control rounded-3 rounded-end me-2" name="category"
                    placeholder="Category Name">
                <button class="btn btn-warning rounded-3 rounded-start" type="submit">Create</button>
            </div>
        </form>
    </div>
    <div class="px-4 pt-3 pb-2 bg-warning rounded-3 rounded-bottom">
        <div class="fs-3"><b>Categories</b>
        </div>
    </div>
    <div class="px-1 mt-1 bg-dark rounded-3 rounded-top">
        <ul class="list-group list-group-flush">
            <?php 
            foreach($category as $cat){?>
            <li class="list-group-item bg-dark text-white d-flex justify-content-between align-items-center">
                <?= $cat['category'] ?>
                <span class="badge bg-danger rounded-2"><a class="btn btn-sm text-white"
                        href="/delete_cat/<?= $cat['category_id']?>"><i class="fa-solid fa-trash"></i> Delete</a></span>
            </li>
            <?php } ?>
        </ul>
    </div>

</body>

</html>