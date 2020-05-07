<?php
    $jsondata=file_get_contents("https://api.rootnet.in/covid19-in/hospitals/beds");
    $data=json_decode($jsondata,true);
    $j=0;
    $total_hosp=0;
    $total_beds=0;
    while($j<count($data['data']['regional']))
    {
        $total_hosp=$total_hosp+ $data['data']['regional'][$j]['totalHospitals'];
        $total_beds=$total_beds+$data['data']['regional'][$j]['totalBeds'];
        $j++;
        
    }
?>