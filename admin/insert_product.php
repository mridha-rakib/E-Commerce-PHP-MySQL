<?php require '../config/config.php'; ?>

<?php

$categories = $conn->query("SELECT * FROM categories");
$categories->execute();
$cats = $categories->fetchAll(PDO::FETCH_ASSOC);

$brands = $conn->query("SELECT * FROM brands");
$brands->execute();
$rows = $brands->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST['insert_product'])) {
    // if ($_POST['product_title'] == '' or $_POST['description'] == '' or $_POST['product_keywords'] == '' or $_POST['product_price'] == '') {
    //     echo '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> <a href="../index.php">Something went wrong.</a></div>';
    // }

    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_categories'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = true;

    //accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    //accessing images temporary name
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];


    if (
        $product_title == '' or $description == '' or $product_keywords == '' or
        $product_category == '' or $product_brands == '' or $product_price == '' or $product_image1 == ''
        or $product_image2 == '' or $product_image3
    ) {
        //echo '<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle"></i> <a href="../index.php">Something went wrong.</a></div>';
        echo "<script>alert('Please fill all the fields');</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "./products_images/$product_image1");
        move_uploaded_file($temp_image2, "./products_images/$product_image2");
        move_uploaded_file($temp_image3, "./products_images/$product_image3");

        $insert_product = $conn->prepare("INSERT INTO products 
        (product_title, product_description, product_keywords, category_id, brand_id, 
        product_image1, product_image2, product_image3, product_price, status) 
        VALUES(:product_title, :description, :product_keywords,:product_category, 
        :product_brands, :product_image1, :product_image2, :product_image3, 
        :product_price, :product_status)");

        $insert_product->execute([
            ':product_title' => $product_title,
            'product_description:' => $description,
            ':product_keywords' => $product_keywords,
            ':category_id' => $product_category,
            ':brand_id' => $product_brands,
            ':product_image1' => $product_image1,
            ':product_image2' => $product_image2,
            ':product_image3' => $product_image3,
            ':product_price' => $product_price,
            ':status' => $product_status
        ]);


        if ($insert_product) {
            echo "<script>alert('successfully inserted')</script>";
        } else {
            echo "<script>alert('error')</script>";
        }
    }
}


?>

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
        <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
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
                <select name="product_category" id="" class="form-select">
                    <option value="">Select Category</option>
                    <?php foreach ($cats as $cat) : ?>
                    <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_title']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>


            <!-- Button -->

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="" disabled>Select a Brands</option>
                    <?php foreach ($rows as $row) : ?>
                    <option value="<?php echo $row['brand_id']; ?>"><?php echo $row["brand_title"]; ?></option>
                    <?php endforeach  ?>
                </select>
            </div>


            <!-- Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>

            <!-- Image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>

            <!-- Image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 2</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>


            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="price"
                    required="required" autocomplete="off">
            </div>

            <!-- SUbmit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
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