<?php
    $jsondata=file_get_contents("https://api.covid19india.org/data.json");
    $data=json_decode($jsondata,true);
    //echo "<pre>";
    //print_r($data);
    $j=1;
    $total_confirmed=0;
    $total_recovered=0;
    $total_deaths=0;
    $total_active=0;
    $c=count($data['cases_time_series'])-1;
    $dailyconfirmed=$data['cases_time_series'][$c]['dailyconfirmed'];
    $dailyrecovered=$data['cases_time_series'][$c]['dailyrecovered'];
    $dailydeceased=$data['cases_time_series'][$c]['dailydeceased'];
    while($j<count($data['statewise']))
    {
        $total_confirmed=$total_confirmed+ $data['statewise'][$j]['confirmed'];
        $total_recovered=$total_recovered+$data['statewise'][$j]['recovered'];
        $total_deaths=$total_deaths+$data['statewise'][$j]['deaths'];
        $total_active=$total_active+$data['statewise'][$j]['active'];
        $j++;
        
    }
    
?>