<?php
class DB{

const USER = "root";
const PASS = "";
const HOST = "localhost";
const DB   = "leave_management";

public function connToDB() {

	$user = self::USER;
	$pass = self::PASS;
	$host = self::HOST;
	$db   = self::DB;

	try{
		$conn = new mysqli($host,$user,$pass,$db);
		if(!$conn){
			return false;
			throw new Exception("Error in server connection");
		}else {
			return $conn;
		}
	}catch (Exception $e){
		throw "Connection failed:" . $e->getMessage();
	}
}
}
?>