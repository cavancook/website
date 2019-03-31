<?php
require_once 'KLogger.php'
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
}

