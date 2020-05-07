<?php
    $jsondata=file_get_contents("https://api.rootnet.in/covid19-in/contacts");
    $data=json_decode($jsondata,true);
    $ph_no=$data['data']['contacts']['primary']['number'];
    $troll_free=$data['data']['contacts']['primary']['number-tollfree'];
    $email=$data['data']['contacts']['primary']['email'];
    ?>