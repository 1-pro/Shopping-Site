<?php require_once("create1.php");

  //start session
  session_start();

  require("function1.php");

  $database=new CreateDb("project1","shop","user");

  if(isset($_POST['add'])){
     // print_r($_POST['product_id']);
     // die;
    
     if(isset($_SESSION['cart'])){ 

       $item_array_id = array_column($_SESSION['cart'],"product_id");

        if(in_array($_POST['product_id'],$item_array_id)){
            echo "<script>alert('Product is already in cart')</script>";
            echo "<script>window.location='index1.php'</script>";
        }else {
            $count=count($_SESSION['cart']);
            $item_array=array(
                'product_id'=> $_POST['product_id']
            );
            $_SESSION['cart'][$count+1]=$item_array;

        }
     }else{

        $item_array=array(
            'product_id'=> $_POST['product_id']
        );
            $_SESSION['cart'][0]=$item_array;
            print_r($_SESSION['cart']);
            
     }
   
      }
  ?>
 
 
<body>


<?php require_once("header1.php");?>
  <div class="container">
      <div class="row text-center py-5">
      <?php 
      $result= $database->getdata();
      while($row = mysqli_fetch_assoc($result)) {
          component($row['name'],$row['price'],$row['ex_price'],substr($row['description'],0,35),$row['picture'],$row['product_id']);
      }
      ?>
          
          
      </div>
  </div>
<?php require("page-footer1.php"); ?>



</body>
</html>