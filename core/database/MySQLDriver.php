<?php
/**
 * Created by PhpStorm.
 * User: Philipp Lenders
 * Date: 01.10.2015
 * Time: 21:49
 */
class MySQLDriver {
    var $host = "localhost";
    var $user = "root";
    var $pass = "";

    public function __construct() {
        $this->log = Logger::getLogger(__CLASS__);
    }

    public function connect() {
        // Create connection
        $conn = new mysqli($this->host, $this->user, $this->pass);

        // Check connection
        if ($conn->connect_error) {
            $this->log->error("Connection failed: " . $conn->connect_error);
        } else {
            $this->log->info("Connected successfully");
        }
    }
}
