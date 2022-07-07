<?php 

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://currency-exchange.p.rapidapi.com/exchange?from=". $from ."&to=". $to ."&q=". $money ,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: currency-exchange.p.rapidapi.com",
        "X-RapidAPI-Key: 26288750e2mshb1f880771412260p1a0519jsn8684ae4eb6c9"
    ],
]);


$response = curl_exec($curl);
$err = curl_error($curl);
    
curl_close($curl);