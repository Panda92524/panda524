<?php
header('Content-Type: application/json');

$api_url = "https://apis.tollguru.com/toll/v2/origin-destination-waypoints";
$api_key = "NnJR4gFGtfH9rtTpqnT3bJPHnmP6HGBn";

$headers = array(
    "x-api-key: $api_key",
    "Content-Type: application/json"
);

$data = file_get_contents('php://input');

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
echo $response;
