<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kundali</title>
</head>

<body>



    <?php
    include 'dbcon.php';
    ?>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fullName = $_POST['fullName'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $hours = $_POST['hours'];
        $minutes = $_POST['minutes'];
        $seconds = $_POST['seconds'];
        $birth = $_POST['birth'];
        $gender = $_POST['gender'];
        $phoneNumber = $_POST['phoneNumber'];

        if ($fullName && $day && $month && $year && $hours && $minutes && $seconds && $birth == "") {
            echo 'PLEASE FILL ALL INFORMATION';
        } else {
            $sql = "INSERT INTO `kundalitb` (`name`, `day`, `month`, `year`, `hours`, `minutes`, `seconds`, `birth`, `gender's`, `phoneNumber`) VALUES ('$fullName', '$day', '$month', '$year', ' $hours', '$minutes', '$seconds', '$birth', '$gender', '$phoneNumber')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>thank you we get your information!!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please try again later</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }

    ?>

    <h1 class="text-center text-black mt-4">Get Your Kundli by Date of Birth</h1>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="row">

                <div class="mb-3  mt-3 col-md-12">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input placeholder="Name" name="fullName" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3  mt-3 col-md-12">
                    <select class="form-select mb-2" aria-label="Default select example" name="gender">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="mb-3 col-md-4">
                    <label for="day" class="form-label">day</label>
                    <input placeholder="day" name="day" required type="number" class="form-control" id="day" maxlength="2">
                </div>

                <div class="mb-3 col-md-4">
                    <label for="month" class="form-label">month</label>
                    <input placeholder="month" name="month" required type="number" class="form-control" id="month" maxlength="2">
                </div>

                <div class="mb-3 col-md-4">
                    <label for="year" class="form-label">year</label>
                    <input placeholder="year" name="year" required type="number" class="form-control" id="year" maxlength="4">
                </div>

                <div class="mb-3 col-md-4">
                    <label for="Hrs" class="form-label">Hrs</label>
                    <input placeholder="Hours" name="hours" required type="number" class="form-control" id="Hrs" maxlength="2">
                </div>

                <div class="mb-3 col-md-4">
                    <label for="Min" class="form-label">Min</label>
                    <input placeholder="minutes" name="minutes" required type="number" class="form-control" id="Min" maxlength="2">
                </div>

                <div class="mb-3 col-md-4">
                    <label for="Sec" class="form-label">Sec</label>
                    <input placeholder="seconds" name="seconds" required type="number" class="form-control" id="Sec" maxlength="4">
                </div>

                <div class="mb-3 col-md-12">
                    <label for="birth" class="form-label">Place of Birth</label>
                    <input placeholder="Place of Birth" name="birth" required type="text" class="form-control" id="birth">
                </div>
                
                <div class="mb-3 col-md-12">
                    <label for="birth" class="form-label">Phone Number</label>
                    <input placeholder="Enter Your Phone Number" name="phoneNumber" required type="number" class="form-control" id="birth">
                </div>

            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>



    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>