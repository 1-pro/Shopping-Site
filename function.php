<?php
require_once("create1.php");
function create(){
  $dbname="project1";
  $tablename="shop";
  $tablename1="user";
  $username="root";
  $servername="localhost";
  $password="";

  $con = mysqli_connect($servername, $username, $password, $dbname);

  if(!$con){
    echo "Error in data base connection" . mysqli_connect_error();
    die;
}

return $con;

}
?>