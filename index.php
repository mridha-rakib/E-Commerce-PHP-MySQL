<?php require 'includes/header.php'; ?>
<?php require 'config/config.php'; ?>


<?php

$brands = $conn->query("SELECT * FROM brands");
$brands->execute();
$rows = $brands->fetchAll(PDO::FETCH_ASSOC);


$categories = $conn->query("SELECT * FROM categories");
$categories->execute();
$cats = $categories->fetchAll(PDO::FETCH_ASSOC);


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS file -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="images/e-commerce.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price : 500/-</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- Second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>

    </nav>

    <!--Third child -->
    <div class="bg-light">
        <h3 class="text-center">E Store</h3>
        <p class="text-center">Communications is at the heart of E-commerce business</p>
    </div>

    <!-- fourth child -->
    <div class="row">
        <div class="col col-md-10">
            <!-- products -->
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/apple.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/capsicum.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/dairymilk.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/dairymilk.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/dairymilk.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/dairymilk.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- sidenav -->
        <div class="col md-2 bg-secondary p-0">

            <!-- Brands to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">
                        <h4>Delivery Brands</h4>
                    </a>
                </li>
                <?php foreach ($rows as $row) : ?>
                <li class="nav-item">
                    <a href="index.php?brand=<?php echo $row['brand_id']; ?>"
                        class="nav-link text-light"><?php echo $row["brand_title"]; ?>
                    </a>
                </li>

                <?php endforeach  ?>

            </ul>

            <!-- Categories to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">
                        <h4>Categories</h4>
                    </a>
                </li>
                <?php foreach ($cats as $cat) : ?>
                <li class="nav-item">
                    <a href="index.php?category=<?php echo $cat['category_id']; ?>"
                        class="nav-link text-light"><?php echo $cat['category_title']; ?>
                    </a>
                </li>
                <?php endforeach  ?>
            </ul>

        </div>
    </div>



    <!-- Last child -->
    <div class="bg-info p-3 text-center">
        <p>All right reserves @ 2023</p>
    </div>



    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>