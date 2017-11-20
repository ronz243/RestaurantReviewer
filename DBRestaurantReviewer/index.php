<?php
  include_once 'header.php';
?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Home</h2>
    <?php
      if(isset($_SESSION['username'])){
        echo "Successfully Logged In!";
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
