<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this databse failed due to : ");
        mysqli_connect_error();
    }

  
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mop = $_POST['mop'];
    $nop = $_POST['nop'];
    $pack = $_POST['pack'];
    $nod = $_POST['nod'];
    $bill = (5000 * $nop) + (500 * $nod);
    $sql = "INSERT INTO `trip`.`book` (`name`,`fname`,`mode_of_payment`,`no_of_people`,`package`,`no_of_days`,`dt`) VALUES ('$name','$fname','$mop','$nop','$pack','$nop', current_timestamp());";


    if (!$con->query($sql) == true) {

        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="./booking.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./favicon.png">
</head>

<body>
    <div class="container">
        <div class="msg-box block  rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                Thanks for booking our service , <?php echo $name; ?> .
            </h5>
            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                Booking Details Are Mentioned Below :
                <br>
                <?php
                echo "Number of people :   ";
                echo $nop;
                ?>
                <br>
                <?php
                echo "Number of days :   ";
                echo $nod;
                ?>
                <br>
                <?php
                echo "Name of package :   ";
                echo $pack;
                echo "<br>";
                $bill = (5000 * $nop) + (500 * $nod);

                echo "your total bill is :  Rs ";
                echo $bill;
                ?>
                <br>
                <p>Soon our executive will provide you all the details , ticket , stay  related information on the mail Id </p>
            </p>

            <a class="btn-a" href="./index.html"> LOGOUT </a>

        </div>
    </div>
 <!--vanila-tilt-->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
   <!--vanila tilt logic-->
   <script>
     
      VanillaTilt.init(document.querySelectorAll(".container"), {
         max: 5,
         speed: 2000,
         glare: true,
      });
   </script>
</body>

</html>