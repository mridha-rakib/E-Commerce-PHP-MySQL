<?php include('../config/config.php'); ?>

<?php
function getProducts()
{
  global $conn;
  $products = $conn->prepare("SELECT * FROM products");
  $products->execute();
  $product = $products->fetchAll(PDO::FETCH_ASSOC);

  foreach ($product as $pro) {
    echo '<div class="col-md-4   mb-2 ">
      <div class="card p-2 h-100 d-flex flex-column">
        <img class="card-img-top"
            src="http://localhost/E-Commerce/admin/products_images/' . $pro['product_image1'] . '" alt="image">
        <div class="card-body ">
          <h5 class="card-title">' . $pro["product_title"] . '</h5>
          <p class="card-text">' . $pro["description"] . '</p>
          <a href="#" class="btn mt-auto btn-info ">Add to cart</a>
          <a href="#" class="btn mt-auto btn-secondary ">View more</a>
        </div>
      </div>
    </div>';
  }
}
?>