<?php

    include("../includes/db-connection.php");
 
    if ($dbConn == true) {
        $sFname = $_POST['fname']; 
        $sLname = $_POST['lname']; 
        $sEmail = $_POST['email']; 
        $sUsername = $_POST['username'];
        $sPassword = md5($_POST['password']);
        
     
        try {
            $qInsert = "INSERT INTO `dbcrudproject`.`tbl_users` 
                (`first_name`, `last_name`, `email`, `username`, `password`, `date_added`) 
                VALUES 
                ('".$sFname."', '{$sLname}', '{$sEmail}', '{$sUsername}', '{$sPassword}', '".date("Y-m-d H:i:s")."')
            ";
            
            $eInsert = mysqli_query($dbConn, $qInsert); //connection and query

            if ($eInsert == true) {
                echo "Record successfully saved!";
            } else {
                echo "Failed to process, please call system administrator!";
            }

        } catch(Exception $e) {
            echo "error";
        }

    } else {
        echo "Failed to connect, please call system administrator!";
    }


    class GlobalClass {

        private $server = "mysql:host=localhost;dbname=dbmystore";
        private $user = "root";
        private $pass = "";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        protected $con;
    
        public function openConnection(){
            try
            {
                $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
                return $this->con;
            }catch(PDOException $e)
            {
                echo "There is some problem in the connection :". $e->getMessage();
            }
        }
    
        public function closeConnection(){
            $this->con = null;
        }
    
        public function getUsers(){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM tbl_members");
            $stmt->execute();
            $users = $stmt->fetchAll();
            $userCount = $stmt->rowCount();
    
            if ($userCount > 0){
                return $users;
            }else{
                return 0;
            }
    
        }
    
        public function login(){
            if(isset($_POST['submit'])){
                $password = md5($_POST['password']);
                $username = $_POST['email'];
              
                $connection = $this->openConnection();
                $stmt = $connection->prepare("SELECT * FROM tbl_members WHERE email = ? AND password = ?");
                $stmt->execute([$username, $password]);
                $total = $stmt->rowCount();
    
                if ($total > 0){
                    echo "Login Sucess!";
                } else {
                    echo "Login Failed!";
                }
            }
        }
    
        public function check_user_exist($sUsername){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("SELECT * FROM tbl_members WHERE username = ?");
            $stmt->execute([$sUsername]);
            $total = $stmt->rowCount();

            return $total;
        }
    
    
        public function add_user(){
            if(isset($_POST['add'])){
    
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
    
                if($this->check_user_exist($sUsername) == 0){
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("INSERT INTO tbl_members (`email`, `password`, `first_name`, `last_name`)VALUES(?,?,?,?)");
                    $stmt->execute([$email,$password,$fname,$lname]);
                }else{
                    echo "User already exists";
                }
            }
        }
    }
    $store = new GlobalClass();