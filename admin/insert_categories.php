<?php require '../config/config.php'; ?>

<?php

if (isset($_POST['insert_cat'])) {


    if (isset($_POST['cat_title']) == '') {
        echo "<script>alert('Please fill all the fields')</script>";
    } else {

        $category_title = $_POST['cat_title'];


        $select_query = $conn->prepare("SELECT * FROM categories WHERE category_title = :category_title ");
        $select_query->bindParam(':category_title', $category_title);
        $select_query->execute();
        // $res = $select_query->fetch(PDO::FETCH_ASSOC);


        if ($select_query->rowCount() > 0) {
            echo "<script>alert('This category already exists')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {


            $insert_query = $conn->prepare("INSERT INTO categories (category_title) values(:category_title)");

            $insert_query->execute([
                ':category_title' => $category_title
            ]);

            if ($insert_query) {
                echo "<script>alert('Category has been added!')</script>";
                echo "<script>window.location.href = '../index.php';</script>";
            }
        }
    }
}
?>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" name="insert_cat" class="bg-info border-0 p-2 my-3" value="Insert Categories">

    </div>

</form>


<?php


?>