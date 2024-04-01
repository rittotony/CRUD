<?php

require('../models/connection/connection.php');


abstract class functionsDetails
{
	abstract public function insertData($sql);
	abstract public function updateDataORDelete($sql);
	abstract public function listData($sql);
}

class commonFunctions extends functionsDetails
{
	public $conn, $result;
	function __construct()
	{
		$connection = new dbConnection();
		$this->conn = $connection->myDB();
	}
	
	function insertData($sql)
	{
		if(mysqli_query($this->conn, $sql))
		{
		   $this->result = mysqli_insert_id($this->conn);
		   return $this->result;
		}
		else
		{
			return mysqli_error($this->conn);
		}

	}
	
	function listData($sql)
	{
		$temp = array();
		$this->result = mysqli_query($this->conn, $sql); 
		if ($this->result) { 
			while ($row = mysqli_fetch_assoc($this->result)) { 
				 $temp['data'][] = $row;
			}
			echo json_encode($temp);
		} else {
			echo "Error: " . mysqli_error($this->conn); 
		}
	}
	
	function updateDataORDelete($sql)
	{
		if(mysqli_query($this->conn, $sql))
		{
		   $this->result = mysqli_affected_rows($this->conn);
		   return $this->result;
		}
		else
		{
			return mysqli_error($this->conn);
		}
	}
	
	function __destruct()
	{
		//mysqli_free_result($this->result);
		mysqli_close($this->conn);
	}
	
}
$obj = new commonFunctions();



?>