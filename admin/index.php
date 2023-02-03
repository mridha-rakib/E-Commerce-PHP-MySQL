<?php require '../includes/header.php'; ?>

<!-- navbar -->
<div class="container-fluid">
    <!-- First child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid ">
            <img src="../images/admin.jpg" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </nav>

        </div>
    </nav>

    <!-- Second Child -->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>

    <!-- Third child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <div class="col-md-12 justify-content">
                    <a href=""><img src="../images/icecrim.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin name</p>
                </div>
            </div>
            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert
                        Products</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert
                        Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View
                        Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert
                        Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
            </div>
        </div>


    </div>

    <!-- Fourth child -->

    <div class="container my-3">
        <?php
        if (isset($_GET['insert_category'])) {
            include('insert_categories.php');
        }
        if (isset($_GET['insert_brand'])) {
            include('insert_brands.php');
        }
        ?>
    </div>


</div>

<?php require '../includes/footer.php'; ?>