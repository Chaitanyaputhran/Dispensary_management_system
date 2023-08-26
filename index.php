<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="css/homepage.css">
    <style>
        /* Additional styles for moving images */
        .moving-images {
            position: relative;
            overflow: hidden;
            height: 300px; /* Adjust the height as needed */
        }

        .moving-image {
            position: absolute;
            top: 0;
            left: -100%; /* Start the images off-screen */
            animation: moveImage 10s linear infinite; /* Adjust the animation duration as needed */
        }

        @keyframes moveImage {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(100%); /* Move the images to the right */
            }
        }
    </style>
</head>
<body>
   <header class="header">
       <nav>
           <a href="./login.php" class="login-link">Login</a>
       </nav>
   </header>
   <section class="banner">
       <div class="homepagecontainer">
      
   
           <div class="bannerheader">
               <h1>Welcome to Dispensary Management System</h1>
               <p>Where Efficiency Meets Growth</p>
           </div>
           <p class="bannertagline">Cultivate Success with our All-in-One Dispensary Management Database</p>
       </div>
   </section>
  
   <footer class="footer">
       <p>&copy; 2023 Dispensary Management System</p>
   </footer>
</body>
</html>
