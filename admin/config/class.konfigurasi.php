<?php
require_once('akses.php');

class Konfigurasi
{


  public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

    public function tab_info($member_id)
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_menu where id_member='$member_id' and control='information_menu' order by posisi");
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

    public function data_notif($member_id,$loop)
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_info_notif where id_member='$member_id' and id_notif='$loop'");
  			$stmt->execute();
  			$res=$stmt->fetch(PDO::FETCH_OBJ);
  			return $res;
  		}
  		catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
  	}

    public function set_limit_wkt_bayar($member_id)
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_set_limit_waktu_bayar where id_member=? ");
  			$stmt->execute(array($member_id));
  			$res=$stmt->fetch(PDO::FETCH_OBJ);
  			return $res;
  		}
  		catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
  	}

    public function pembayaran($member_id,$loop)
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_info_bayar where id_member=? and id_bank=?");
  			$stmt->execute(array($member_id,$loop));
  			$res=$stmt->fetch(PDO::FETCH_OBJ);
  			return $res;
  		}
  		catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
  	}

    public function sosmed($member_id,$loop)
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_info_sosmed where id_member=? and id_sosmed=?");
  			$stmt->execute(array($member_id,$loop));
  			$res=$stmt->fetch(PDO::FETCH_OBJ);
  			return $res;
  		}
  		catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
  	}

    public function tema($member_id,$loop)
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_tema_used where id_member=? and id_tema=?");
  			$stmt->execute(array($member_id,$loop));
  			$res=$stmt->fetch(PDO::FETCH_OBJ);
  			return $res;
  		}
  		catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
  	}

    public function list_notif()
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_notif");
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

    public function list_tema()
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_tema");
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

    public function list_bank()
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_bank");
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

    public function list_sosmed()
  	{
  		try
  		{
  			$stmt = $this->conn->prepare("SELECT * FROM rod_sosmed");
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

    public function proses()
    {
      echo "nilai berubah";
    }


}//end class
?>
