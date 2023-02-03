<?php require '../includes/header.php'; ?>
<?php require '../config/config.php'; ?>

<?php

if (isset($_POST['insert_brand'])) {


    if (isset($_POST['cat_title']) == '') {
        echo "<script>alert('Please fill all the fields')</script>";
    } else {

        $brand_title = $_POST['cat_title'];

        // Temporarily add the code for the brand_title



        $select_query = $conn->prepare("SELECT * FROM brands WHERE brand_title = :brand_title ");
        $select_query->bindParam(':brand_title', $brand_title);
        $select_query->execute();
        // $res = $select_query->fetch(PDO::FETCH_ASSOC);


        if ($select_query->rowCount() > 0) {
            echo "<script>alert('This brand already exists')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {


            $insert_query = $conn->prepare("INSERT INTO brands (brand_title) VALUES(:brand_title)");

            $insert_query->execute([
                ':brand_title' => $brand_title
            ]);

            if ($insert_query) {
                echo "<script>alert('Brand name has been added!')</script>";
                echo "<script>window.location.href = '../index.php';</script>";
            }
        }
    }
}
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" name="insert_brand" class="bg-info border-0 p-2 my-3" value="Insert Brands">

    </div>

</form>