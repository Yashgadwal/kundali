<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" />

    <link rel="stylesheet" href="mainStyle.css">

    <title>Show</title>
</head>

<body id="fontNew">

    <?php

    include 'dbcon.php';

    $sql = "SELECT * FROM `kundalitb`";
    $run = mysqli_query($conn, $sql);


    ?>

            <?php while ($row = mysqli_fetch_array($run)) {
                ?>
                    <?php


                    echo '<b>'. $row['name'] . '</b>' . " Date is " .  '<b>'. $row['day']  . '/' . $row['month'] . '/' . $row['year'] . '</b>' . " Time is " . '<b>' . $row['hours'] . ':' . $row['minutes'] . ':' . $row['seconds'] . '</b>' . ' birth place is ' . '<b>' . $row['birth'] . '</b>' . ' Gender is ' . '<b>' . $row['gender\'s'] . '</b>' . ' Phone Number is ' . '<b>' . $row['phoneNumber'] . '</b>' . '.' . '<br>';

                    echo '<div class="line" style="
                    height: .5rem;
                    background: black;
                    width: 100%;"></div>';

                ?>
        
<?php } ?>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg.OMhuP.IlRH9sENBO0LRn5q.8nbTov4.1p" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $("#table_id").dataTable();
        });
    </script>
</body>

</html>