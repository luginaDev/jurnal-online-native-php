<?php 
/**
 * main class
 */
class koneksi 
{
    /**
     * koneksi to database
     */
    protected $server   = "localhost";
    protected $username ="root";
    protected $password = "";
    protected $db = "jurnal_asm";
    public function __construct()
    {
        $koneksi = mysqli_connect($this->server, $this->username, $this->password, $this->db);

    }   
   
}



 ?>