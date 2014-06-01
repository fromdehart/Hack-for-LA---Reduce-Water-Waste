<?php 
/*define("HOST", "db530316967.db.1and1.com"); // The host you want to connect to.
define("USER", "dbo530316967"); // The database username.
define("PASSWORD", "Th3W@t3r"); // The database password. 
define("DATABASE", "db530316967"); // The database name.
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.
//make SQL connection
mysql_connect("db530316967.db.1and1.com", "dbo530316967", "Th3W@t3r") or die(mysql_error());
mysql_select_db("db530316967") or die(mysql_error());
*/?>

<?php 
define("HOST", "localhost"); // The host you want to connect to.
define("USER", "local"); // The database username.
define("PASSWORD", ""); // The database password. 
define("DATABASE", "db530316967"); // The database name.
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.
//make SQL connection
mysql_connect("localhost", "local", "") or die(mysql_error());
mysql_select_db("db530316967") or die(mysql_error()); 
?>