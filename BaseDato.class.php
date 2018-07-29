<?php


// error class just incase an error occured when trying to connect
class __errorClass
{
    public function __call($meth, $args)
    {
        echo $meth . '() failed! Database connection error!';
    }
}

class Connectdb{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "blog";
    public $conn; 

    public function __construct(){
        $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if ($conn->errorCode == 0)
        {
            $this->conn = $conn;
        }
        else
        {
            // This would prevent the regular PHP error, kinda like my simple error reporting method.
            $this->conn = new __errorClass();
        }
    }
}

?>