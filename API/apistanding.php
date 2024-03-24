<?php 
$option = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false
    ),
);

$league_id_england = "152";
$link_apistanding_england = "https://apiv3.apifootball.com/?action=get_standings&league_id={$league_id_england}&APIkey=5b56eabc6a490feaaeeb10af994a4ed710b2401424280a37a3423ab3c5d3d18f";
$dataapistanding_england = file_get_contents($link_apistanding_england, false, stream_context_create($option));
$datastandingenglish = json_decode($dataapistanding_england, true);

$league_id_france = "168";
$link_apistanding_france = "https://apiv3.apifootball.com/?action=get_standings&league_id={$league_id_france}&APIkey=5b56eabc6a490feaaeeb10af994a4ed710b2401424280a37a3423ab3c5d3d18f";
$dataapistanding_france = file_get_contents($link_apistanding_france, false, stream_context_create($option));
$datastandingfrance = json_decode($dataapistanding_france, true);

$league_id_germany = "175";
$link_apistanding_germany = "https://apiv3.apifootball.com/?action=get_standings&league_id={$league_id_germany}&APIkey=5b56eabc6a490feaaeeb10af994a4ed710b2401424280a37a3423ab3c5d3d18f";
$dataapistanding_germany = file_get_contents($link_apistanding_germany, false, stream_context_create($option));
$datastandinggermany = json_decode($dataapistanding_germany, true);

$league_id_italy = "207";
$link_apistanding_italy = "https://apiv3.apifootball.com/?action=get_standings&league_id={$league_id_italy}&APIkey=5b56eabc6a490feaaeeb10af994a4ed710b2401424280a37a3423ab3c5d3d18f";
$dataapistanding_italy = file_get_contents($link_apistanding_italy, false, stream_context_create($option));
$datastandingitaly = json_decode($dataapistanding_italy, true);

$league_id_spain = "302";
$link_apistanding_spain = "https://apiv3.apifootball.com/?action=get_standings&league_id={$league_id_spain}&APIkey=5b56eabc6a490feaaeeb10af994a4ed710b2401424280a37a3423ab3c5d3d18f";
$dataapistanding_spain = file_get_contents($link_apistanding_spain, false, stream_context_create($option));
$datastandingspain = json_decode($dataapistanding_spain, true);


?>
