<?php
require_once('akses.php');

class Halaman
{


  public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

    public function tab_halaman($member_id)
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_menu where id_member='$member_id' and control='header_menu' order by posisi");
  			$stmt->execute();
  			while ($data=$stmt->fetch(PDO::FETCH_OBJ)){
  				$res[] = $data;
  			}
  			return $res;
  		}
  		catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
  	}

}


?>
