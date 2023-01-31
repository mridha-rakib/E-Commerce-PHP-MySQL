<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Product, Admin dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS file -->
    <link rel="stylesheet" href="../css/style.css" />

</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Product</h1>
        <!--Form  -->
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <!-- <div asp-validation-summary="All" class="text-danger"></div>
            <div class="form-group"></div> -->
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product title" autocomplete="off" required="required">

            </div>

            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control"
                    placeholder="Enter product description" autocomplete="off" required="required">

            </div>

            <!-- Keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                    placeholder="Enter product keywords" autocomplete="off" required="required">

            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select a category</option>
                    <option value="">Fruits</option>
                    <option value="">Vegetables</option>
                </select>

            </div>

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a category</option>
                    <option value="">Fruits</option>
                    <option value="">Vegetables</option>
                </select>

            </div>

        </form>








        <!-- Last child -->
        <!-- <div class="bg-info p-3 text-center">
        <p>All right reserves @ 2023</p>
    </div>
 -->


        <!-- bootstrap js link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>