<?php
// START SERVER BLOCK #1
$json = file_get_contents("https://rust-servers.net/api/?object=servers&element=detail&key=INSERT-YOUR-KEY-HERE");
$data = json_decode($json, true);

// Create variables, you can use any of the variables bellow as you wish.

$ref_id = ( ( is_array( $data["references"] ) ? implode(", ", $data["references"]) : $data["references"] ) ); // array to string
$name1 = $data["name"];
$is_online1 = $data["is_online"];
$uptime1 = $data["uptime"];
$location1 = $data["location"];
$activeplayers1 = $data["players"];
$maxplayers1 = $data["maxplayers"];
$address1 = $data["address"];
$port1 = $data["port"];

// END SERVER BLOCK #1

// START SERVER BLOCK #2
$json = file_get_contents("https://rust-servers.net/api/?object=servers&element=detail&key=INSERT-YOUR-KEY-HERE");
$data = json_decode($json, true);

// Create variables, you can use any of the variables bellow as you wish.

$ref_id = ( ( is_array( $data["references"] ) ? implode(", ", $data["references"]) : $data["references"] ) ); // array to string
$name2 = $data["name"];
$is_online2 = $data["is_online"];
$uptime2 = $data["uptime"];
$location2 = $data["location"];
$activeplayers2 = $data["players"];
$maxplayers2 = $data["maxplayers"];
$address2 = $data["address"];
$port2 = $data["port"];

// END SERVER BLOCK #2

// START SERVER BLOCK #3
$json = file_get_contents("https://rust-servers.net/api/?object=servers&element=detail&key=INSERT-YOUR-KEY-HERE");
$data = json_decode($json, true);

// Create variables, you can use any of the variables bellow as you wish.

$ref_id = ( ( is_array( $data["references"] ) ? implode(", ", $data["references"]) : $data["references"] ) ); // array to string
$name3 = $data["name"];
$is_online3 = $data["is_online"];
$uptime3 = $data["uptime"];
$location3 = $data["location"];
$activeplayers3 = $data["players"];
$maxplayers3 = $data["maxplayers"];
$address3 = $data["address"];
$port3 = $data["port"];

// END SERVER BLOCK #3

?>
