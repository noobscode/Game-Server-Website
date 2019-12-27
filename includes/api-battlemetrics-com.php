<?php
// START SERVER BLOCK #1
$json = file_get_contents("https://api.battlemetrics.com/servers/4962512");
$data = json_decode($json, true);

// Some servers have a prefix for uptime like rust. If your server do, add it "INSIDE" bellow
$prefix = "rust";
$data1 = $data["data"]["attributes"];

$bm_name1 = $data1["name"];
$bm_status1 = $data1["status"];
$bm_uptime1 = isset($data1["details"][$prefix."_uptime"])?$data1["details"][$prefix."_uptime"]:0;
$bm_location1 = ( ( is_array( $data1["country"] ) ? implode(", ", $data1["country"]) : $data1["country"] ) );
$bm_activeplayers1 = $data1["players"];
$bm_maxplayers1 = $data1["maxPlayers"];
$bm_address1 = $data1["ip"];
$bm_port1 = $data1["port"];
$bm_country1 = $data1["country"];
// END SERVER BLOCK #1

// START SERVER BLOCK #2
$json = file_get_contents("https://api.battlemetrics.com/servers/4687933");
$data = json_decode($json, true);

// Some servers have a prefix for uptime like rust. If your server do, add it "INSIDE" bellow
$prefix = "";
$data2 = $data["data"]["attributes"];

$bm_name2 = $data2["name"];
$bm_status2 = $data2["status"];
$bm_uptime2 = isset($data2["details"][$prefix."_uptime"])?$data2["details"][$prefix."_uptime"]:0;
$bm_location2 = ( ( is_array( $data2["country"] ) ? implode(", ", $data2["country"]) : $data2["country"] ) );
$bm_activeplayers2 = $data2["players"];
$bm_maxplayers2 = $data2["maxPlayers"];
$bm_address2 = $data2["ip"];
$bm_port2 = $data2["port"];
$bm_country1 = $data2["country"];
// END SERVER BLOCK #2

// START SERVER BLOCK #3
$json = file_get_contents("https://api.battlemetrics.com/servers/3339541");
$data = json_decode($json, true);

// Some servers have a prefix for uptime like rust. If your server do, add it "INSIDE" bellow
$prefix = "";
$data3 = $data["data"]["attributes"];

$bm_name3 = $data3["name"];
$bm_status3 = $data3["status"];
$bm_uptime3 = isset($data3["details"][$prefix."_uptime"])?$data3["details"][$prefix."_uptime"]:0;
$bm_location3 = ( ( is_array( $data3["country"] ) ? implode(", ", $data3["country"]) : $data3["country"] ) );
$bm_activeplayers3 = $data3["players"];
$bm_maxplayers3 = $data3["maxPlayers"];
$bm_address3 = $data3["ip"];
$bm_port3 = $data3["port"];
$bm_country1 = $data3["country"];
// END SERVER BLOCK #3

?>