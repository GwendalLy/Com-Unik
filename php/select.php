




<?php




        $servername = "localhost";
        $username = "bmarine";
        $password = "bmarine@2017";
        $dbname = "bmarine";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $conn->query('SELECT  * 	FROM contact');
 
$result = $sth->fetchAll();
echo "<h1>Emails Clients</h1><br><br><br>";

foreach ($result as $value) {
	echo "<h2>".$value['email']."</h2>";
	echo "<p>".$value['category']."</p>";
	echo '<br>';	
}

?>