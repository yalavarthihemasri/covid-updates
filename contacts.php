<?php
    include "clogic.php";
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
<?php include "navbar.php" ?>
    <div class="container-fluid bg-light p-5 text-center my=3">
    <h1>Emergency Contact Details For Covid-19</h1>
    <h5 class="text-muted">An opensource project to keep track of all covid-19 details</h5>
    </div>
    <div class="container my-5">
    <div class="row text-center">
        <div class="col-4 text-success">
        <h5>Phone No</h5>
        <?php echo $ph_no; ?>
        </div> 
        <div class="col-4 text-success">
                <h5>Trollfree NO</h5>
        <?php echo $troll_free; ?>
        </div>
        <div class="col-4 text-success">
                <h5>Email</h5>
        <?php echo $email; ?>
        </div>
         </div>
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
        <th scope="col">Number</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $statescount=count($data['data']['contacts']['regional']);
        $i=0;
            while($i< $statescount){
        ?>
            <tr>
            <th><?php echo $data['data']['contacts']['regional'][$i]['loc'];?></th>
            <td>
            <?php echo $data['data']['contacts']['regional'][$i]['number'];
            
            ?>
             </td>
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