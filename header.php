<div class="container-fluid nav-wrapper">
    <div class="row">
        <div class="col-md-6">
            <a href="index.php" class="nabver-brand">
                <h3 class="px-5">
                   <i class="fas fa-shopping-basket"></i>Shopping Cart
                </h3>
            </a>
        </div>
        <div class="col-md-6">
            <div class="header-right">
                <i class="fa fa-shopping-cart"></i>
                <span>Cart</span>
                <?php
                  if (isset($_SESSION['cart'])) {
                      $count = count($_SESSION['cart']);
                      echo '<span class="text-warning bg-light">'.$count.'</span>';
                  }
                ?>
            </div>
          
        </div>
    </div>
</div>