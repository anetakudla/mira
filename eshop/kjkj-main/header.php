<header class="header">

   <div class="flex">

      <a href="index.php" class="logo">DuckDuck</a>

      <nav class="navbar">
         <a href="products.php">Produkty</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">Košík<span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

   <style type="text/css">
	
</style>
</header>