<?php
//this is check_db.php
require("config.php");
echo "DBUser: " . $dbuser;
echo "\n\r";

$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";

try{
        $db = new PDO($connection_string, $dbuser, $dbpass);
        echo "Should have connected";

}
catch(Exception $e){
	echo $e->getMessage();
	exit("It didn't work");

}

?>
