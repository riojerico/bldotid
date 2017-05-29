<?php
session_start();
require_once('akses.php');

class Produk
{

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
  }

	public function kategori_data($member_id)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM rod_kategori where id_member=:member_id order by id desc");

			$stmt->execute(array(':member_id'=>$member_id));
			while ($data=$stmt->fetch(PDO::FETCH_OBJ))
				$res[] = $data;

			return $res;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function kategori_sub_data($id_kategori)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM rod_kategori_sub where id_kategori=:id_kategori order by sub_kategori");

			$stmt->execute(array(':id_kategori'=>$id_kategori));
			while ($data=$stmt->fetch(PDO::FETCH_OBJ))
				$res[] = $data;

			return $res;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function list_produk($member_id)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * from rod_produk where id_member=? order by id desc");

			$stmt->execute(array($member_id));
			while ($data=$stmt->fetch(PDO::FETCH_OBJ))
				$res[] = $data;

			return $res;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}




}//end class
?>
