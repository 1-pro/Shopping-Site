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
 
 
<?php require_once("page-head1.php");?>

<body>
	<!-- Page Preloder -->
	
	<!-- Header section -->
	<?php require_once("header1.php");?>
	<!-- Header section end -->



	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>The Best Wears</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="index1.php" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/backgroundshoe1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-dark">
							<span>New Arrivals</span>
							<h2>Classy Shoes</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line-dark text-dark">DISCOVER</a>
							<a href="index1.php" class="site-btn sb-dark">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">

				 <?php $result= $database->getdata();
			      while($row = mysqli_fetch_assoc($result)): ?>


			      		<div class="product-item">
							<div class="pi-pic">
								<img src="<?= $row['picture'] ?>" alt="">
								<div class="pi-links">
									<!-- <form action="index1.php" method="post"> -->
										
										<a href="cart1.php"><span>&gt;</span></a>	
									<!-- </form> -->
									
									<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> -->
								</div>
							</div>
							<div class="pi-text">
								<h6>$<?= $row['price'] ?></h6>
								<p><?= $row['name'] ?> </p>
							</div>
						</div>


			      <?php endwhile; ?>
			    
				
			</div>
		</div>
	</section>
	<!-- letest product section end -->
	
	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="index1.php" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


	<!-- Footer section -->
	
	<?php require_once("page-footer1.php")?>

	</body>
</html>
