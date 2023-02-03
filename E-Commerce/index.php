<?php include('includes/header.php'); ?>
<?php include('config/config.php'); ?>
<?php include('./function/common_function.php'); ?>


<?php

$brands = $conn->query("SELECT * FROM brands");
$brands->execute();
$rows = $brands->fetchAll(PDO::FETCH_ASSOC);


$categories = $conn->query("SELECT * FROM categories");
$categories->execute();
$cats = $categories->fetchAll(PDO::FETCH_ASSOC);




?>





<!-- Navbar -->
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="images/e-commerce.png" alt="" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
        <div class="row justify-content-center">
            <!-- Fetching products -->
            <?php getProducts(); ?>
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



<?php require 'includes/footer.php'; ?>