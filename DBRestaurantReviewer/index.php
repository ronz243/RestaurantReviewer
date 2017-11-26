<?php
  include_once 'header.php';
?>

<section class="main-container">
  <div class="main-wrapper">
    <h3>Welcome To Restaurant Reviews</h3>
    <h5>This website is currently in beta<h5>
    <h5>Sathya Ramanathan | Rohan Barve | Susmita Padala<h5>
    <?php
      if(isset($_SESSION['username'])){
        echo "<br>";
        echo '<a href="listRestaurant.php">List Restaurants</a>';
        echo "<br>";
        echo '<a href="listCoupon.php">List Coupons</a>';
      }
    ?>
  </div>
</section>

<?php
  include_once 'footer.php';
?>
