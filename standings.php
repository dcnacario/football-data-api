<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.football-data.org/v4/competitions/PL/standings",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => array("X-Auth-Token: 82dad405465140c0a858d77cc8f33259"),
));
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);
?>