<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *"); // Allow requests from any origin for demo purposes

$origin = $_GET['origin'];
$destination = $_GET['destination'];
$apiKey = 'AIzaSyBwW0RlaXr-Bb8Uv3IWn1DyqC8935XAF84';

$origin = urlencode($_GET['origin']);
$destination = urlencode($_GET['destination']);

$url = "https://maps.googleapis.com/maps/api/directions/json?origin=$origin&destination=$destination&key=$apiKey";

$response = file_get_contents($url);
echo $response;
?>
