<?php 
require_once("create1.php");
require_once("function.php");
require_once("function1.php");
?>

<?php require_once('page-head1.php');?>
<body >
  <?php
  session_start();
  require_once("header1.php");?>
  <div class="jumbotron jumbotron-fluid d-flex align-items-center mb-0" id="loginJumbo" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(IMG/background.jpg);">
        <div class="container ">
           
      <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
      <?php
  require_once("loginlog.php")
 ?>         
          <h5 class="text-white">Sign in</h5>
             <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                 <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="username">
              </div>
             <div class="form-group">
               <label for="password" class="sr-only">Password</label>
               <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="password">
             </div>
                        
            <div class="form-group">
                          
               <input type="submit" class="btn btn-success btn-lg btn-block" value="Login">
             </div>

             <p  class="text-white" > <a href="#"  class="text-white">Forgot password</a>&nbsp | &nbsp
              Don't have an account?  <a href="signup.php"  class="text-white"> Sign Up</a> </p>
  
        </form>
        </div>
    </div>
       
    
    

    
     <?php require_once("page-footer1.php")?>
</body>
</html>