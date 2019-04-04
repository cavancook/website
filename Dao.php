<?php
require_once 'KLogger.php';
class Dao {
    private $host = "us-cdbr-iron-east-03.cleardb.net";
    private $db = "heroku_dddcc0fa4f8b1e2";
    private $user = "bca91dc7fce3be";
    private $pass = "4baec18f";
    
    protected $logger;
    public function __construct(){
        $this->logger = new Klogger("log.txt", Klogger::DEBUG);
    }

    public function getConnection(){
        $this->logger->LogDebug("Getting a connection.");
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
          } catch (Exception $e) {
            echo print_r($e,1);
            exit;
          }
          return $conn;
    }
    public function createUser(){
        $this->logger->LogDebug("Creating user.");
        $conn = $this->getConnection();
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
    
        //encripts password
        $stmt->bindValue(':email', $_POST['email']);
        $salt = "saltcommander123$";
        $hashed = md5($_POST['password'].$salt);
        $stmt->bindValue(':password', $hashed);    
        if($stmt->execute()):
            return $message= 'Welcome new user. Please login!';
        else:
            return $message= 'Problem creating your account';
        endif;
    }
    public function getUser(){
        $this->logger->LogDebug("Getting user.");
        $conn =$this->getConnection();
        $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
        $records->bindValue(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
    public function login(){
          $conn = $this->getConnection();
          $records= $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
          $records->bindValue(':email', $_POST['email']);
          $records->execute();
          $results= $records->fetch(PDO::FETCH_ASSOC);
          return $results;
    }
    public function userExists($email){
        $this->logger->LogDebug("Checking if user exists.");
        $conn = mysqli_connect("us-cdbr-iron-east-03.cleardb.net","bca91dc7fce3be","4baec18f","heroku_dddcc0fa4f8b1e2");
        $query = "SELECT * FROM users WHERE email = '$email'";
        $user_data = mysqli_query($conn, $query);
        if(mysqli_num_rows($user_data) > 0){
            return true;
        }else{
            return null;
        }
    }
    public function verifyPassword($email, $pass){
        $this->logger->LogDebug("Verifing password.");
        $conn =$this->getConnection();
        $records = $conn->prepare('SELECT password FROM users WHERE email = :email');
        $records->bindValue(':email', $email);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        if(md5($pass) == $results['password']){
            return true;
        }else{
            return false;
        }
    }
    public function regexEmail($email){
        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        if (preg_match($pattern, $email) === 1) {// emailaddress is valid if true
            return true;
        }else{
            return false;
        }
    }
    
}

