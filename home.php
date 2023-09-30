<?php

$server = "localhost";
$username = "root";
$password = " ";
$db = "trip";
$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
   die("connection to this databse failed due to : " . mysqli_connect_error());
}

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip` (`name`,`age`,`gender`,`email`,`phone`,`other`,`dt`) VALUES ('$name','$age','$gender','$email','$phone','$desc', current_timestamp());";


if (!$con->query($sql) == true) {

   echo "ERROR : $sql <br> $con->error";
}

$con->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Home </title>
   <link rel="icon" type="image/x-icon" href="./favicon.png">
   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
   <link href="./style.css" rel="stylesheet" />
   <link href="./home.css" rel="stylesheet" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Ole&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
   <header>

      <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
         <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
               <img src="./winter_2283408.png" class="h-20 mr-3 logo" alt="logo" />
               <span class="home-title self-center text-6xl font-semibold whitespace-nowrap " style=" color: whitesmoke;  text-shadow:1px 1px 10px rgb(157, 72, 172); font-family: 'Ole', cursive;">Travel Tingle</span>
            </a>

            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
               <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                  <li>
                     <a href="./index.html" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Sign-Out</a>
                  </li>

               </ul>
            </div>
         </div>
      </nav>
   </header>
   <div class="Container card-container">

      <div class="grid grid-cols-3 grid-rows-1 gap-4">
         <div class="card-item">
            <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg">
               <img class="w-full" src="./card-img//4.jpg" alt="Sunset in the mountains">
               <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
               </div>
               <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
               </div>
            </div>

         </div>
         <div class="card-item">
            <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg">
               <img class="w-full" src="./card-img//1.jpg" alt="Ujjain">
               <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Ujjain</div>
                  <p class="text-gray-700 text-base">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
               </div>
               <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Ujjain</span>
               </div>
            </div>

         </div>
         <div class="card-item">
            <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg">
               <img class="w-full" src="./card-img//2.jpg" alt="Kashmir">
               <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Kashmir</div>
                  <p class="text-gray-700 text-base">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
               </div>
               <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Kashmir</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="grid grid-cols-3 grid-rows-1 gap-4">
      <div class="card-item">
         <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg">
            <img class="w-full" src="./card-img//6.jpg" alt="bali">
            <div class="px-6 py-4">
               <div class="font-bold text-xl mb-2">The amazing bali</div>
               <p class="text-gray-700 text-base">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
               </p>
            </div>
            <div class="px-6 pt-4 pb-2">
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#bali</span>
            </div>
         </div>
      </div>
      <div class="card-item">
         <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg">
            <img class="w-full" src="./card-img//1.jpg" alt="Goa">
            <div class="px-6 py-4">
               <div class="font-bold text-xl mb-2">Goa</div>
               <p class="text-gray-700 text-base">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
               </p>
            </div>
            <div class="px-6 pt-4 pb-2">
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Goa</span>
            </div>
         </div>
      </div>
      <div class="card-item">
         <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg">
            <img class="w-full" src="./card-img//6.jpg" alt="Kerala">
            <div class="px-6 py-4">
               <div class="font-bold text-xl mb-2">Kerala</div>
               <p class="text-gray-700 text-base">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
               </p>
            </div>
            <div class="px-6 pt-4 pb-2">
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
               <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Kerala</span>
            </div>
         </div>
      </div>
   </div>



   <div class="select-pack"> Select & Book Package </div>
   <div class="user-msg"> hi , <?php echo $name;  ?> thank you for choosing us as your travel buddy</div>


   <div class="container card">
      <form action="./booking.php" method="post" class="w-full max-w-lg">

         <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
               <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  First Name
               </label>
               <input name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
               <p class="text-red-500 text-xs italic">Please fill out this field.</p>
            </div>
            <div class="w-full md:w-1/2 px-3">
               <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Last Name
               </label>
               <input name="fname" id="fname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
            </div>


         </div>
         <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
               <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Mode of Payment
               </label>
               <input id="mop" name="mop" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="COD/Card">
               <p class="text-gray-600 text-xs italic">package-details</p>
            </div>
         </div>
         <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
               <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                  Number of people
               </label>
               <input id="nop" name="nop" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="0">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
               <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Select Package
               </label>
               <div class="relative">
                  <select id="pack" name="pack" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                     <option>sunset</option>
                     <option>ujjain</option>
                     <option>bali</option>
                     <option>kerala</option>
                     <option>goa</option>
                     <option>kashmir</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                     <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                     </svg>
                  </div>
               </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
               <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                  Number of days
               </label>
               <input id="nod" name="nod" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
            </div>
         </div>
         <div class="md:w-2/3">
            <button class="btn shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
               book
            </button>
         </div>
      </form>
   </div>

   <script src="https://unpkg.com/scrollreveal"></script>
   <script>
      ScrollReveal().reveal(".card-item", {
         delay: 100,
         origin: "bottom",
         distance: "100px",
         duration: 800,
         scale: 1.2,
      });

      ScrollReveal().reveal(".container", {
         delay: 200,
         origin: "bottom",
         distance: "200px",
         duration: 900,
      });
   </script>
   <!--vanila-tilt-->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
   <!--vanila tilt logic-->
   <script>
      VanillaTilt.init(document.querySelectorAll(".logo"), {
         max: 20,
         speed: 400,
         glare: true,
      });
      VanillaTilt.init(document.querySelectorAll(".card-item"), {
         max: 5,
         speed: 2000,
         glare: true,
      });
   </script>
</body>

</html>