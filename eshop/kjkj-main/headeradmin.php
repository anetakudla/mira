<header class="header">

   <div class="flex">

      <a href="xxx.php" class="logo">Admin</a>

      <nav class="navbar">
         
         <a href="admin.php">Přidat produkty</a>
         <a href="order.php">Objednávky</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

   <style type="text/css">
	
</style>
</header>