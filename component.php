<?php

function card($img,$title,$price,$product_id){
    $element = '
 <div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form action="index.php" method="POST">
            <div class="card shadow">
                <div>
                    <img src="assets/img/'.$img.'" class="img-fluid card-img-top" style="width: 175px; height: 200px; margin-top:40px;"  alt="laptop">
                </div>
                <div class="card-body">
                    <h5 class="card-title">'.$title.'</h5>
                    <h6>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="far fa-star"></i>
                  
                    </h6>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                    <h5>
                        <small><s class="text-secondary">$100</s></small>
                        <span class="price">$'.$price.'</span>
                    </h5>
                    <button class="btn btn-warning my-3" type="submit" name="add">Add to cart <i class="fas fa-shopping-cart"></i></button>
                    <input type="hidden" name="product_id" value="'. $product_id.'">
                </div>
  
            </div>
         </form>
    </div>
    ';

    echo $element;
}





function cartElement($product_img,$product_name,$prodocut_price){
    $Element = 
    '<form action="">
    <div class="row single-cart-list bg-white">
        <div class="col-md-3">
            <img src="assets/img/'.$product_img.'" style="width: 100px;" alt="">

        </div>
        <div class="col-md-5">
            <div class="product-dis">
                <h3>'.$product_name.'</h3>
                <p><small>Seller: Soyaibur</small></p>
                <p class="price"> <strong>$'.$prodocut_price.'</strong></p>
                <button class="btn btn-warning">Save for Later</button>
                <button class="btn btn-danger">Remove</button>
            </div>
        </div>
        <div class="col-md-4 all-button" style="margin-top:25px">
            <button class="btn bg-light border rounded-circle"> <i class="fas fa-minus"></i></button>

            <input type="text" name="product-contity" style="text-align: center;" value="1" class="from-control w-25 d-line">

            <button class="btn bg-light border rounded-circle"> <i class="fas fa-plus"></i></button>

        </div>
    </div>
</form>';

    return $Element;
}