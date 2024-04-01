<?php

require('../models/common_functions/functions.php');

class mainController
{
	private $myFunction;
    private $formdata;
    private $fullname;
    private $email;
    private $phone;
    private $password;
    private $gender, $ids, $status;
	function __construct()
	{
		$this->myFunction = new commonFunctions();
		if(isset($_POST['formdata'])){
			$this->formdata = $_POST['formdata'];
			$this->fullname = $this->formdata['name'];
		    $this->email = $this->formdata['email'];
			$this->phone =$this->formdata['phone'];
			$this->password = $this->formdata['password'];
			$this->gender = $this->formdata['gender'];			
		}
		if(isset($_POST['ids'])){
			$this->ids = $_POST['ids'];
		}
		if(isset($_POST['thisStatus'])){
			$this->status = $_POST['thisStatus'];
		}
	}
	
	function sqlQueries()
	{
		$array = array();
		
		$array[0] = "INSERT INTO tbl_reg(`name`,`email`,`phone`,`password`,`gender`) 
		VALUES('".$this->fullname."','".$this->email."','".$this->phone."','".$this->password."','".$this->gender."')";
		
		$array[1] = "SELECT * FROM tbl_reg ORDER BY ids DESC";
		
		$array[2] = "UPDATE tbl_reg SET status='".$this->status."' WHERE ids='".$this->ids."'";
		
		$array[3] = "DELETE FROM tbl_reg WHERE ids='".$this->ids."'";
		
		return $array;
	}
	
	function event($action)
	{
		$SQL=$this->sqlQueries();
		switch($action)
		{
			case "inserting":
			   $result = $this->myFunction->insertData($SQL[0]);
			   echo $result;
			break;
			
			case "listAll":
			   $this->result = $this->myFunction->listData($SQL[1]);
			   echo $this->result;
			break;
			
			case "update_status":
			   $this->result = $this->myFunction->updateDataORDelete($SQL[2]);
			   echo $this->result;
			break;
			
			case "delete_data":
			   $this->result = $this->myFunction->updateDataORDelete($SQL[3]);
			   echo $this->result;
			break;
			
			default:
			     "No Action Found !";
		    break;		 
		}
	}
}

$obj = new mainController();
$obj->event($_POST['action']);


?>