<?php 

$headers = [
	"User-Agent: Example REST API Client",
	"Authorization: "
];

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true
]);

return $ch;