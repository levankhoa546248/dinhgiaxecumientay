<?php
class DBController {
//    private $host = "remotemysql.com";
//    private $user = "Rr5s8PgcAw";
//    private $password = "vZ2uWTMgFd";
//    private $database = "Rr5s8PgcAw";

    private $host = "sql104.byethost.com";
    private $user = "b11_25278721";
    private $password = "vian@1995";
    private $database = "b11_25278721_vianshop";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		mysqli_set_charset($conn,"utf8");
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>