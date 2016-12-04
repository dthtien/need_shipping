 <?php

 class DataAccessHelper {
 	private $conn;

 	public function connect(){
 		$servername = "localhost:3306";
 		$username = "root";
 		$password = "";
 		$dbname = "needshipper";

 		// Create connection
 		$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);

		// Check connection
 		if ($GLOBALS['conn']->connect_error) {
 			die("Connection failed: " . $conn->connect_error);
 		}
 	}

 	public function executeNonQuery($sql){
 		mysqli_set_charset($GLOBALS['conn'], 'utf8');
 		if ($GLOBALS['conn']->query($sql) === false) {
 			echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
 		}
 	}

 	public function executeQuery($sql){
 		mysqli_set_charset($GLOBALS['conn'], 'utf8');
 		$result = $GLOBALS['conn']->query($sql);
 		return $result;
 	}

 	public function close(){
 		mysqli_close($GLOBALS['conn']);
 	}
 } 
 ?> 