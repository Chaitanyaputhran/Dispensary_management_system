<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="css/homepage.css">
    <style>
        /* Additional styles for changing images */
        .banner {
            position: relative;
            overflow: hidden;
            height: 640px; /* Full viewport height */
            background-size: cover;
            background-position: center;
            transition: background-image 1s; /* Transition duration */
            background-image: url("./images/dispensary.jpg"); /* Set the initial image */
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

   <script>
       const images = [
           "./images/dispensary.jpg",
           "./images/download.jpg",
           "./images/pharm.jpeg"
       ];

       const banner = document.querySelector(".banner");
       let currentImageIndex = 0;

       function changeBackgroundImage() {
           banner.style.backgroundImage = `url(${images[currentImageIndex]})`;
           currentImageIndex = (currentImageIndex + 1) % images.length;
       }

       setInterval(changeBackgroundImage, 3000); // Change image every 3 seconds
   </script>
</body>
</html>
