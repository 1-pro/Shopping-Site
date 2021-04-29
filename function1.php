<?php
  require_once("page-head1.php");

    function component($name,$price,$ex_price,$description,$picture,$product_id){
        $product  = "  
                <div class=\"col-md-4 col-sm-6 my-4  my-md-4\">
                <form action=\"index1.php\" method=\"post\" >
                <div class=\"card shadow\">
                <div>
                        <img src= $picture alt=\"image1\" class=\"img-fluid card-img-top\">
                    </div>
    
                    <div class=\"card-body\">
                    <h4 class=\"card-title\">$name</h4>
                    <h6>
                    <i class=\"fas fa-star\"></i> 
                    <i class=\"fas fa-star\"></i> 
                    <i class=\"fas fa-star\"></i> 
                    <i class=\"fas fa-star\"></i> 
                    <i class=\"far fa-star\"></i> 
                    </h6>
                    <p class=\"card-text\">$description</p>
                    <h5>
                        <small><del class=\"text-secondary\"> $$ex_price</small>
                        <span class=\"price\"> $$price</span>
                    </h5>
                    <button type=\"submit\" name=\"add\" class=\"btn btn-warning my-3\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
                    <input type=\"hidden\" name=\"product_id\" value=\"$product_id\">
                    </div>
                    </div>
                </form>
            </div>" ;
  echo $product;
}

function cartElement($picture,$name,$price,$product_id,$description){
    $element="
    <form action=\"cart1.php?action=remove&id=$product_id\" method=\"post\" class=\"cart-items\">
                     <div class=\"border rounded\">
                         <div class=\"row bg-white\">
                             <div class=\"col-md-3 pl-0\">
                                 <img class=\"img-fluid\" src=$picture alt=\"image\">
                             </div>
                             <div class=\"col-md-6\">
                                 <h5 class=\"pt-2\">$name</h5>
                                 <small class=\"text-secondary\">Seller:dailytuition</small>
                                 <h6>
                                 <i class=\"fas fa-star\"></i> 
                                 <i class=\"fas fa-star\"></i> 
                                 <i class=\"fas fa-star\"></i> 
                                 <i class=\"fas fa-star\"></i> 
                                 <i class=\"far fa-star\"></i> 
                                 </h6>
                                 <p class=\"card-text\">$description</p>
                                 <h5 class=\"pt-2\">$$price</h5>
                                 <div class=\"fw-size-choose\">
                                 <p>Size</p>
                                 <div class=\"sc-item\">
                                     <input type=\"radio\" name=\"sc\" id=\"xs-size\">
                                     <label for=\"xs-size\">32</label>
                                 </div>
                                 <div class=\"sc-item\">
                                     <input type=\"radio\" name=\"sc\" id=\"s-size\">
                                     <label for=\"s-size\">34</label>
                                 </div>
                                 <div class=\"sc-item\">
                                     <input type=\"radio\" name=\"sc\" id=\"m-size\" checked>
                                     <label for=\"m-size\">36</label>
                                 </div>
                                 <div class=\"sc-item\">
                                     <input type=\"radio\" name=\"sc\" id=\"l-size\">
                                     <label for=\"l-size\">38</label>
                                 </div>
                                 <div class=\"sc-item disable\">
                                     <input type=\"radio\" name=\"sc\" id=\"xl-size\" disabled>
                                     <label for=\"xl-size\">40</label>
                                 </div>
                                 <div class=\"sc-item\">
                                     <input type=\"radio\" name=\"sc\" id=\"xxl-size\">
                                     <label for=\"xxl-size\">42</label>
                                 </div>
                             </div>

                                 <a href=\"checkout.php\" class=\"btn btn-warning\" name=\"wishList\">Save for Later</a>
                                 <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                </div>
                             <div class=\"col-md-3 py-5\">
                                 <div class=\"pro-qty\">
                                     <button type=\"button\" class=\"btn bg-light border rounded-circle dec qtybtn\"></button>
                                     <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                     <button type=\"button\" class=\"btn bg-light border rounded-circle inc qtybtn\"></button>
                                    </div>
                             </div>
                         </div>
                     </div>
                 </form>
    ";
    echo $element;
}