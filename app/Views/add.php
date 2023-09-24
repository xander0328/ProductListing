<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/path/to/your/favicon.ico">
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
    <title>Add Product</title>
</head>

<body>
    <div class="m-4">
        <a href="/index" class="btn btn-light rounded-pill mb-2">
            <i class="fa-solid fa-chevron-left"></i> Back</a>
        <div class="m-auto col-lg-5 ">
            <div class="fs-2 mb-2 bg-warning p-3 rounded-4 rounded-bottom">Add Product</div>
            <form class="bg-dark p-3 rounded-4 rounded-top text-white" action="/save" method="post">
                <label for="">Name: </label>
                <input class="form-control mb-2" type="text" name="name" required>
                <label for="">Description: </label>
                <textarea class="form-control mb-2" name="description" rows="4" cols="50"></textarea>
                <label for="">Category:</label>
                <select class="form-select mb-2" name="category_id" id="">
                    <?php foreach ($category as $cat) {?>
                    <option value="<?=$cat['category_id']?>"><?=$cat['category']?> </option>
                    <?php } ?>
                </select>
                <label for="">Price: </label>
                <div class="input-group mb-2">
                    <span class="input-group-text">Php</span>
                    <input class="form-control" type="number" name="price" required>
                </div>

                <label for="">Quantity: </label>
                <input class="form-control mb-2" type="number" name="quantity" required>
                <input class="form-control btn btn-warning mt-3 mb-2" type="submit" value="Save">
            </form>
        </div>

    </div>
</body>

</html>