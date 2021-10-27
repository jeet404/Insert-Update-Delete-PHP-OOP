<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'product');

class DB_con
{
	function __construct()
	{
		$conn = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('localhost connection problem' . mysql_error());
		mysql_select_db(DB_NAME, $conn);
	}

	public function select()
	{
		$res = mysql_query("SELECT * FROM users");
		return $res;
	}

	public function insert()
	{
		if (isset($_POST['submit'])) {
			$firstName = $_POST['fname'];
			$lastName = $_POST['lname'];
			$city = $_POST['city'];
			$query = " INSERT INTO users VALUES (Null,'$firstName','$lastName','$city')";

			$res = mysql_query($query);
			if ($res) {
				header('location:index.php');
			} else {
				header('location:index.php');
			}
		}
	}

	public function delete($table, $id)
	{
		$res = mysql_query("DELETE FROM $table WHERE user_id=" . $id);
		return $res;
	}

	public function update($table, $id, $fname, $lname, $city)
	{
		$res = mysql_query("UPDATE $table SET first_name='$fname', last_name='$lname', user_city='$city' WHERE user_id=" . $id);
		return $res;
	}
}
