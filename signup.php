<?php 
require_once("create1.php");
require_once("function.php");
require_once("function1.php");

?>

<?php require_once("page-head1.php")?>
<body>
  <?php require_once("header1.php");?>
  <div class="jumbotron jumbotron-fluid d-flex align-items-center mb-0" id="loginJumbo" style="    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(IMG/backgroundshoe.jpg);">
        <div class="container ">
           
      <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
            
          
           <?php if(count($_POST)>0){

                    $username=$_POST["userName"];
                    $password=$_POST["password"];
                    $lastname=$_POST["lastName"];
                    $firstname=$_POST["firstName"];
                    $email=$_POST["email"];

                    $db= create();
                    $sql = "INSERT INTO `user` ( `userName`,`password`) VALUES ";

                    $sql .= "('{$username}','{$password}')";
                    $query = mysqli_query( $db,$sql);

                    if($query){
                    echo "User Details Added";


                    }else{
                    echo "something went wrong " . mysqli_error($db);
                    }
                    // run query


             }?>
          <h5 class="text-white">Sign in</h5>
             <div class="form-group">
             <label for="firstName" class="sr-only">First Name</label>    
             <input required class="form-control form-control-lg" type="text" value=""  placeholder="Firstname" id="firstName" name="firstName">
            </div>
            <div class="form-group">
             <label for="lastName" class="sr-only">Last Name</label>    
             <input required class="form-control form-control-lg" type="text" value=""  placeholder="Lastname" id="lastName" name="lastName">
            </div>
            <div class="form-group">
             <label for="email" class="sr-only">Email</label>    
             <input required class="form-control form-control-lg" type="email" value=""  placeholder="Email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                 <input type="text" class="form-control form-control-lg" id="username" name="userName" placeholder="username">
              </div>
             <div class="form-group">
               <label for="password" class="sr-only">Password</label>
               <input type="password" class="form-control form-control-lg" id="password" name="password"  required placeholder="password">
             </div>
                        
            <div class="form-group">
                          
               <input type="submit" class="btn btn-success btn-lg btn-block" value="Sign Up">
             </div>

             <p  class="text-white" > <a href="#"  class="text-white">Forgot password</a>&nbsp &nbsp | &nbsp &nbsp
             All ready have an account?
                <a href="login.php"  class="text-white">Login</a> </p>
  
        </form>
        </div>
    </div>
       
    
    

    
     <?php require_once("page-footer1.php")?>
</body>
</html>