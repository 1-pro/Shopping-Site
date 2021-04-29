<?php
$db= new CreateDb("project1","shop");

if(isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
             unset($_SESSION['cart'][$key]);
             echo "<script>alert('Product has been Removed...!')</script>";   
             echo "<script>window.location=cart1.php</script>";   
            }
        }
    }
}
?>
<?php require_once("page-head1.php");?>
<body class="bg-light">
    <?php require_once("header1.php");?>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                 <h6>My Cart</h6> 
                 <hr>
                 
                 <?php

                $total = 0;
                 if(isset($_SESSION['cart'])){
                    $product_id= array_column($_SESSION['cart'],'product_id');

                    $result = $db->getData(); 
                    while($row =mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['product_id'] == $id){
                              cartElement($row['picture'],$row['name'],$row['price'],$row['product_id'],$row['description']); 
                            $total = $total + (int)$row['price'];
                            }
                        }
                    }
                 }else{
                     echo "<h5>Cart is Empty</h5>";
                 }
                 ?>
                 
                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                           <?php

                          
                           if(isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<h6>Price($count items)</h6>";
                           }else{
                               echo "<h6>Price (0 items)</h6>";
                           }

                           ?>
                           <h6>Delivery Charges</h6>
                           <hr>
                           <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="text-sucess">FREE</h6>
                            <hr>
                            <h6>$<?php
                            echo $total?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
