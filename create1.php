<?php
    class CreateDb{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;

        //class constructor
    public function __construct( 
         $dbname="Newdb",
         $tablename="Productdb",
         $tablename1="user",
         $username="root",
         $servername="localhost",
          $password=""
     )
    {
     $this->dbname=$dbname;
    $this->tablename=$tablename;
    $this->servername=$servername;
    $this->username=$username;
    $this->password=$password;
    //create connection

    $this->con=mysqli_connect($servername,$username,$password);
    
    //check connection
    if (!$this->con){
        # code...
        exit("Connection faulty".mysqli_connect_error());
    }


    //query
    $sql="CREATE DATABASE IF NOT EXISTS $dbname";
    $query=mysqli_query($this->con,$sql);
    //execute 
    if ($query) {
        # code...
        $this->con= mysqli_connect($servername,$username,$password,$dbname);
        //create table
        $sql="CREATE TABLE IF NOT EXISTS $tablename(product_id INT(6)  NOT NULL  AUTO_INCREMENT PRIMARY KEY
        ,name VARCHAR(255) NOT NULL
        ,price FLOAT 
        ,ex_price FLOAT
        ,picture VARCHAR(600)
          );";

          if(!mysqli_query($this->con,$sql)){
              echo"Table creation failed:".mysqli_error($this->con);
          }
       
    }else{
        return false;
    }
    if(mysqli_query($this->con,$sql)){
        $sql="CREATE TABLE IF NOT EXISTS $tablename1(userId INT(6)  NOT NULL  AUTO_INCREMENT PRIMARY KEY
        ,firstname VARCHAR(255) NOT NULL
        ,lastname VARCHAR(255) NOT NULL
        ,email VARCHAR(255) NOT NULL
        ,userName TEXT NOT NULL
        ,password VARCHAR(255)  NOT NULL 
        ,product_id INT(6)
          );";
    }else{
        return false;
    }
    }
    //get product from the database
    public function getData(){
        $sql="SELECT * FROM $this->tablename ";
         $result = mysqli_query($this->con,$sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }

    public function getSingleData($id){
        $sql="SELECT * FROM $this->tablename where product_id = {$id} limit 1";
        $result = mysqli_query($this->con,$sql);

        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_assoc($result);
        }
    }

    function create(){
  

        $con = mysqli_connect($host, $user, $password, $db);
      
        if(!$con){
          echo "Error in data base connection" . mysqli_connect_error();
          die;
      }
      
      return $con;
      
      }
}