<?php
class Connectdb{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="blog";
    public function Connect(){
        $conn=mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($conn){
            echo "Connected";
        }
    }
}

?>