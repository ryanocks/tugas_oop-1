<?php
class database{
    // masukkan properti database
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "belajar_oop";
    public $connect;

    function __construct(){
        $this ->connect = mysqli_connect($this->host, $this->username, $this->password, $this->password);
        mysqli_select_db($this->connect, $this->db);
    }

}
?>