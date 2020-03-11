<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "duylinhstore";
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

    function save($table, $data = array())
    {
        $conn = $this->conn;
        $values = array();
        foreach ($data as $key => $value) {
            $value = mysqli_real_escape_string($conn, $value);
            $values[] = "`$key`='$value'";
        }
        $Id = intval($data['Id']);
        if ($Id > 0) {
            $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE Id=$Id";
        } else {
            $sql = "INSERT INTO `$table` SET " . implode(',', $values);
        }

        if (!mysqli_query($conn, $sql))
        {
            $Id = 0;
        }else{
            $Id = ($Id > 0) ? $Id : mysqli_insert_id($conn);
        }
//        mysqli_query($conn, $sql) or die(mysqli_error());
        return $Id;
    }

    function get_all($table, $options = array())
    {
        $conn = $this->conn;
        $select = isset($options['select']) ? $options['select'] : '*';
        $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
        $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
        $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';
        $sql = "SELECT $select FROM $table $where $order_by $limit";
        $query = mysqli_query($conn, $sql) or die(mysqli_error());

        $data = array();
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $data[] = $row;
            }
            mysqli_free_result($query);
        }

        return $data;
    }

    function get_total($table, $options = array())
    {
        $conn = $this->conn;
        $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
        $sql = "SELECT COUNT(*) as total FROM $table $where";
        $query = mysqli_query($conn, $sql) or die(mysqli_error());
        $row = mysqli_fetch_assoc($query);
        return $row['total'];
    }

    function get_select_nested($sql)// select lồng
    {
        $conn = $this -> conn;
        $query = mysqli_query($conn, $sql) or die(mysqli_error());

        $data = array();
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $data[] = $row;
            }
            mysqli_free_result($query);
        }

        return $data;
    }
}
?>