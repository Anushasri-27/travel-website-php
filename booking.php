    <?php
    $server = "localhost";
    $username = "root";
    $password = " ";
    $db = "trip";
    $con = mysqli_connect($server, $username, $password, $db);

    if (!$con) {
        die("connection to this databse failed due to : ");
        mysqli_connect_error();
    } 

    $pack_price = " ";
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mop = $_POST['mop'];
    $nop = $_POST['nop'];
    $pack = $_POST['pack'];
    $nod = $_POST['nod'];

    $sql = "INSERT INTO `book` (`name`,`fname`,`mode_of_payment`,`no_of_people`,`package`,`no_of_days`,`dt`) VALUES ('$name','$fname','$mop','$nop','$pack','$nop', current_timestamp());";


    if (!$con->query($sql) == true) {

        echo "ERROR : $sql <br> $con->error";
    } 
    $sql= "SELECT pack_name ,price FROM `pack_price`";
    
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["pack_name"] == $pack) {
                $pack_price = $row["price"];
              
            }
        }
    } 
    $bill = ($pack_price * $nop) + (500 * $nod);

    $sql_bil = "INSERT INTO `bill` (`name`,`bill`) VALUES ('$name','$bill');";

    if (!$con->query($sql_bil) == true) {

        echo "ERROR : $sql <br> $con->error";
    } 

    $con->close();

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
                    echo "basic fee for per person for  ", $pack, "  is: ", $pack_price, "<br>";


                    echo "your total bill is :  Rs ", $bill;

                    ?>
                    <br>
                <p>Soon our executive will provide you all the details , ticket , stay related information on the mail Id </p>
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