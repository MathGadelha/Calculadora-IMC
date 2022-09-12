<?php
require_once __DIR__ . 'connection.php';

$conn = new Connection();
$pdo = $conn->getConnection();

class connection
{
    protected $db

    public function __construct(){
        try{
            $this->db = new PDO('oci: db_name=' . $this-> getTnsName(), USER, PASS);
            $this->db setAttribute(PDO:: ATTR_CASE, PDO::CASE_LOWER);
            $this->db setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        } catch(PDOException $e){
                die($e -> getMessage());
        }
    }

    public function getConnection()
    {
            return $this-> db;
    }

    public function getTnsName()
    {
        return "(DESCRIPTION = 
            (ADDRESS LIST=
            (ADDRESS =
                (PROTOCOL=TCP)
                (HOST=" . DB_SERVER . ")
                (PORT=" . DB_PORT . ")
                )
                )
            (CONNECT_DATA=
            (SERVER=DEDICATED)
            (SERVICE_NAME=" . TNS_NAMES . ")
            )
            )";
    }  

}


?>