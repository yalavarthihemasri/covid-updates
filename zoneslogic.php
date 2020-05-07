<?php
    $jsondata=file_get_contents("https://api.covid19india.org/zones.json");
    $data=json_decode($jsondata,true);
?>