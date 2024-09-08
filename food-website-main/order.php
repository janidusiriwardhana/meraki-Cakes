

<?php
session_start();
include('meraki-db.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<div class="container">
    <h2>Order Your Cake</h2>
    <div class="row">
        <?php while ($product = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/blog<?php echo $product['image']; ?>" class="card-img-top" alt="Cake Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text">$<?php echo $product['price']; ?></p>
                        <a href="cart.php?id=<?php echo $product['id']; ?>" class="btn btn-pink">Add to Cart</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
