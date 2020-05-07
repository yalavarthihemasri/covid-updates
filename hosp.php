<?php
    include "navbar.php";
    include "hlogic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Updates</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"1></script>
<!--fonts-->
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
<!--fontaswome-->
<script src="https://kit.fontawesome.com/5eb8c93091.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my=3">
    <h1>Hospitals In India</h1>
    <h5 class="text-muted">An opensource project to keep track of all covid-19 details</h5>
    </div>
    <div class="container my-5">
    <div class="row text-center">
        <div class="col-6 text-success">
        <h5>Total Hospitals</h5>
        <?php echo $total_hosp; ?>
        </div> 
        <div class="col-6 text-success">
                <h5>Total Beds</h5>
        <?php echo $total_beds; ?>
        </div> </div>
    </div>
    <div class="container bg-light p-3 my-3 text-center">
    <h5 class="text-info">"Hang in there! This too shall pass."</h5>
    <p class="text-muted">Stay home save lives</p>
    </div>
    <div class="container-fluid">
    <div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">States</th>
        <th scope="col">Rural Hospitals</th>
        <th scope="col">Urban Hospitals</th>
        <th scope="col">Total Hospitals</th>
        <th scope="col">Total Beds</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $statescount=count($data['data']['regional']);
        $i=0;
            while($i< $statescount){
        ?>
            <tr>
            <th><?php echo $data['data']['regional'][$i]['state'];?></th>
            <td>
            <?php echo $data['data']['regional'][$i]['ruralHospitals'];
            
            ?>
             </td>
             <td><?php echo $data['data']['regional'][$i]['urbanHospitals'];?> </td>
            <td><?php echo $data['data']['regional'][$i]['totalHospitals']; ?> </td>
            <td><?php echo $data['data']['regional'][$i]['totalBeds']; ?> </td>
            </tr>
        <?php
        $i++;
    }?>
        </tbody>
    </table>
    </div>
    </div>
    <footer class="footer at-auto py-3 bg-dark">
    <div class="container text-center">
    <span class="text-muted">By Hemasri</span>
    </div>
    </footer>
</body>
</html>