
<?php
$host = "10.142.0.24";
$port = 8002;
$Nas = "104.196.147.215";
$db = new PDO("mysql:host=localhost;dbname=EdgeAuto", 'edgeauto', 'edgeauto19!');
$result = $db->query("Select * from message");
$outArray = array();
$comma_sep = "";
foreach($result as $row) {
        $outArray[] = $row['arb_id'];
        $outArray[] = $row['message'];
        $outArray[] = $row['latitude'];
        $outArray[] = $row['longitude'];
        $outArray[] = $row['cantime'];
        $outArray[] = $row['session_id'];
		$comma_sep .= implode(",",$outArray);
		$comma_sep .= ";";
		$outArray = array();
} 

//print_r ($comma_sep);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket\n");
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);
socket_bind($socket, $host, $port) or die("Could not bind to socket\n");
socket_connect($socket, $Nas);
socket_write($socket, $comma_sep);
/*
fwrite($socket, $comma_sep);

fclose($socket);*/
socket_close($socket);
?>
