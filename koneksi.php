<?php
class Koneksi{
    private $server = "localhost";
    private $username = "id476822_dev";
    private $password = "amayun1703";
    private $db = "id476822_toko";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
                $this->password, $this->db);
        return $hubungan;
    }

}
?>