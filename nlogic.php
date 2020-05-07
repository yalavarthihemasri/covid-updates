<?php
    $jsondata=file_get_contents("https://api.rootnet.in/covid19-in/notifications");
    $data=json_decode($jsondata,true);
?>