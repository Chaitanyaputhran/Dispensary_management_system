<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispensary Management System</title>
    <link rel="stylesheet" href="css/homepage.css">
    <style>
        /* Additional styles for changing images */
        .banner {
            position: relative;
            overflow: hidden;
            height: 300px; /* Full viewport height */
            background-size: cover;
            background-position: center;
            transition: background-image 1s; 
            margin-top: 10px;/* Transition duration */
            background-image: url( './images/banner.jpg');
            margin-left: 20px;
            margin-right:20px
       
            
        }

        /* Additional styling */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            padding: 40px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-content {
            
            text-align: center;
        }
        .faq{
          width:100%;
          margin-left: 0px;
        }
        .cont{
            background-image:linear-gradient( hsl(240, 73%, 65%),hsl(273, 75%, 66%));
    width:900px;
    height:540px;
    background-color: white;
    margin-left:-400px;
    border-radius: 20px;
    margin-top:800px;
}
.first{
    width:380px;
    height:540px;
    
}
.background{
    width:400px;
    background-image: url('.\\images\\bg-pattern-desktop.svg');
    height:540px;
    background-position-x: right;
    background-position-y: 70%;
    
}
.image1 {
   
    left: -70%;
    top:900px;
   
    width:500px;
    height:359px;
    z-index:1;
    background-image: url('.\\images\\illustration-woman-online-desktop.svg');
   
    position: absolute;
    background-position-x: right;
    
    background-repeat: no-repeat;
  }
 img{
    
   
    position:relative;
    top:130px;
 }
 .second{
    width:900px;
    height:540px;
    left:380px;
 }
 .head{
    width:65px;
    height:50px;
    left:75px;
    position:absolute;
    top:890px;
 }
 .head h1{
    font-family: 'Kumbh Sans', sans-serif;
    font-size:35px;
 }
 .content1{
    width:400px;
    height:385px;
    position:absolute;
    left:50px;
    top:1000px;
    

 }
 .q1{
    padding-top: 0%;
    left:40px;
    position:absolute;
  
 }
 .q1.active p {
   color:hsl(237, 12%, 33%);
   font-weight: bolder;
   font-size: 14px;
 }
 .q2.active p {
   color:hsl(237, 12%, 33%);
   font-weight: bolder;
   font-size: 14px;
 }
 .q3.active p {
   color:hsl(237, 12%, 33%);
   font-weight: bolder;
   font-size: 14px;
 }
 .q4.active p {
   color:hsl(237, 12%, 33%);
   font-weight: bolder;
   font-size: 14px;
 }
 .q5.active p {
   color:hsl(237, 12%, 33%);
   font-weight: bolder;
   font-size: 14px;
 }
 p{
    font-size: 14px;
    font-weight:400, 700;
    font-family: 'Kumbh Sans', sans-serif;
    color:white;
 }
 p:hover{
   color:hsl(14, 88%, 65%);
   font-weight: bolder;
 }

 .hide{
   
    display:none;
 }
 hr{
    color: hsl(240, 5%, 91%);
    width:330px;
    margin-inline-end: 0px;
    margin-block-start: 0px;
    margin-inline-start: 0%;
 }
 .q2{
    padding-top: 0%;
    left:40px;
    position:relative;
    top:50px;
    
 }
 .q3{
   padding-top: 0%;
   left:40px;
   position:relative;
   top:70px;
}
.q4{
   padding-top: 0%;
   left:40px;
   position:relative;
   top:90px;
}
.q5{
   padding-top: 0%;
   left:40px;
   position:relative;
   top:110px;
}
.b1{
   height:8px;
   width:10px;
   display: inline-block;
   background-image: url('.\\images\\icon-arrow-down.svg');
   background-repeat: no-repeat;
   border: 0px;
  

}

 
.b2{
   height:8px;
   width:10px;
   display: inline-block;
   background-image: url('.\\images\\icon-arrow-down.svg');
   background-repeat: no-repeat;
   border: 0px;

}
.b3{
   height:8px;
   width:10px;
   display: inline-block;
   background-image: url('.\\images\\icon-arrow-down.svg');
   background-repeat: no-repeat;
   border: 0px;

}
.b4{
   height:8px;
   width:10px;
   display: inline-block;
   background-image: url('.\\images\\icon-arrow-down.svg');
   background-repeat: no-repeat;
   border: 0px;

}
.b5{
   height:8px;
   width:10px;
   display: inline-block;
   background-image: url('.\\images\\icon-arrow-down.svg');
   background-color: linear-gradient( hsl(240, 73%, 65%),hsl(273, 75%, 66%));;
   background-repeat: no-repeat;
   border: 0px;

}
/* Your existing styles here */

.footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    margin-top:70px;
    margin-left:-1000px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    margin-left:500px;
   
}

.contact-info, .social-media {
    flex: 1;
}

.contact-info h3, .social-media h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.contact-info p {
    font-size: 1rem;
    margin: 5px 0;
}

.social-icon {
    display: inline-block;
    margin-right: 10px;
}

/* Additional styling for SVG social icon */
.social-icon svg {
    width: 24px;
    height: 24px;
    fill: white;
}
/* Your existing styles here */
.about {
    background-color:#eeeeee;
    padding: 60px 0;
    position: relative; /* Add this to the .about section */
}

.about .container {
    text-align: center;
}

/* ... existing styles ... */

.header {
    background-color: #333;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 40px;
    
   
    width:100%;
    
}

.heading {
    display: flex;
    align-items: center;
}

.logo-icon {
    width: 50px;
    height: 50px;
    margin-right: 10px;
    top:6px;
    border-radius: 50px;
}

.heading h1 {
    font-size: 2rem;
    margin: 0;
    color: #fff;
}

.navigation {
    list-style: none;
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
}

.navigation li {
    margin: 0 20px;
}

.navigation a {
    color: #fff;
    text-decoration: none;
    font-size: 1.2rem;
    transition: color 0.3s ease-in-out;
}

.navigation a:hover {
    color: #ff8000;
}
.section-content {
    font-size: 1.2rem;
    font-weight:bold;
    line-height: 1.6;
    color: #555;
    width: 600px;
    margin-left:-1000px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.section-header{
  margin-left:-100px;
}
#learn {
    background-color: #ff8000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    margin-top: 40px;
}

#learn:hover {
    background-color: pink; /* Change color on hover */
}
/* Your existing styles here */
/* Your existing styles here */

.features {
    background-color: #f8f8f8;
    padding: 80px 0;
    text-align: center;
}

.features .section-header {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 20px;
}

.features .section-content {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #555;
    max-width: 800px;
    margin: 0 auto;
}

.features-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
}

.feature {
    width: calc(33.33% - 20px); /* Adjust width based on design */
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    margin: 10px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.feature .feature-image {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
}

.feature img {
    max-width: 100px;
}

.feature h3 {
    font-size: 1.5rem;
    color: #333;
    margin: 10px 0;
}

.feature p {
    font-size: 1.1rem;
    color: #555;
}
.mainu{
    position:relative;
    margin-left: 730px;
    margin-bottom:0px;
    margin-top: 25px;
    height:700px;

}

.quotes{
   
     position: absolute;
        top: 45%;
        left:-49px;
        transform: translate(-80%, -50%);
  
}
.image-quote{
    position: absolute;
    left:14.5%;
    top:10%;
    border-radius: 0 ;
    width:120px;
    height:100px;
    background-image: url('.\\images\\pattern-quotes.svg');
    
}

.tanya{
        height:440px;
        width:440px;
        position: absolute;
        top: 51%;
        left: 21%;
        padding-bottom: 0;
        border-radius: 10px;
        margin-bottom: 0;;
        transform: translate(-15%, -50%);
        background-image:url('.\\images\\pharma.jpg')
        
  
      
}
.image{
    height:540px;
    position: absolute;
    top: 51%;
    left: 21%;
    padding-bottom: 0;
    margin-bottom: 0;;
    transform: translate(-15%, -50%);
    

  
}
.tanya img{
    border-radius: 10px;

}
.john{
    height:440px;
    width:440px;
    position: absolute;
    top: 51%;
    left: 21%;
    padding-bottom: 0;
    border-radius: 10px;
    margin-bottom: 0;;
    transform: translate(-15%, -50%);
    background-image:url('.\\images\\pharma1.jpg')
    
    
    
    

  
}




.content{
    margin-top: 0px;
    padding-top: -10px;
    left:10%;
    width:640px;
}
.content h3{
    
   padding-top: 70px;
    font-family:'Inter', sans-serif;
    font-size: 32px;
    padding-left: 7px;
    font-weight: 300, 500, 700;
    color:hsl(240, 38%, 20%);
    
   

}
.content h4{
    

    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    padding-top: 1px;
   
}
.buttons{
    width:70px;
    height:35px;
    margin-left:135px;
    position: absolute;
    top: 100%;
    background-color: white;
    transform: translate(-80%, -50%);
    box-shadow: 0px 10px 5px rgb(103, 102, 102);
    border-radius: 20px;

    
    
}
    
.button{
 
    
    
}
.buttons .prev__button{
    background-image: url('.\\images\\icon-prev.svg');
    background-repeat: no-repeat;
    background-position: center;
    padding-top: 15%;
    height:30px;
    border:none;
    width:32px;
    background-color: white;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
}
.buttons .next__button{
    background-image: url('.\\images\\icon-next.svg');
    background-repeat: no-repeat;
    background-position: center;
    padding-top: 15%;
    height:30px;
    border:none;
    width:32px;
    background-color: white;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
}
button :hover{
    background-color: grey;
}





    </style>
</head>
<body>
    <header class="header">
    <div class="heading">
        <img src="./images/user/dms.jpg" alt="Logo" class="logo-icon">
        <h1>DMS</h1>
    </div>
        <nav>
        <ul class="navigation">
        <li><a href="#banner">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#faq">FAQ</a></li>
      
            <a href="./login.php" class="login-link">Login</a>
        </ul>
    </nav>
           
      
    </header>

    <section class="banner" id="banner">
        
    </section>
    </section>
    <section class="about section" id="about">
    <div class="container">
        <h2  style=font-size:50px; class="section-header">About Us</h2>
        <div class="section-content">
            <p style="color: black; font-size:20px">Welcome to the Dispensary Management System! We specialize in providing advanced solutions for efficient management of dispensaries. </p>
           <button id=learn>Learn More</button>
       
    </div>
</section>
    <section class="mainu">
        <img src ="..\images\pattern-bg.svg" alt="">
       
        <div class="tanya">
         
          <div class="buttons">
          <button class="prev__button"></button>
          <button class="next__button"></button>
        </div>
     
          <div class =quotes>
            <div class = image-quote></div>
            <div class ="content">
              <h3>"The dispensary became a haven of wellness, where expert guidance and natural remedies intertwine. A place where healing blossoms amidst knowledge and care."</h3>
              <br>
              <h4 style="color:hsl(240, 38%, 20%);display:inline;padding-left:10px;padding: right 0;">Tanya Sinclair </h4> <h4  style="color:hsl(240, 18%, 77%);display:inline;  padding-left:3px;"> Pharmacist</h4>
                
              
            </div>
          
        </div>
        
        </div>
        <div class="john">
          <div class="buttons">
          <button class="prev__button"></button>
          <button class="next__button"></button>
        </div>
     
          <div class =quotes>
            <div class = image-quote></div>
            <div class ="content">
              <h3>"The pharmacist stands as a trusted guardian of health, bridging the gap between medicine and compassion."</h3>
              <br>
              <h4 style="color:hsl(240, 38%, 20%);display:inline;padding-left:10px;padding: right 0;">John Tarkpor </h4> <h4  style="color:hsl(240, 18%, 77%);display:inline;  padding-left:3px;">Pharmacist</h4>
                
              
            </div>
          
        </div>
        
        </div>
        
       
     



    <section class="faq" id="faq">
    <div class = "cont">
      <div class="head">
        <h1>FAQ</h1>
      </div>
      <div class ="content1">
        <div class ="q1">
          <p >How many team members can I invite?&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <button  class="b1"></button></p>
          
          <div class ="q1-ans ">
          <p style="font-weight: 400, 700;font-size: 12px;">You can invite up to 2 additional users on the Free plan.</br> There is no limit on 
            team members for the Premium plan.</p>
            
          </div>
          <hr>
        </div>
        <div class ="q2">
          <p >What is the maximum file upload size? &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;   <button  class="b2"></button></p>
          <div class ="q2-ans  ">
          <p style="font-weight: 400, 700;font-size: 12px;">No more than 2GB. All files in your account must </br>fit your allotted storage space.</p>
          </div>
          <hr>
        </div>
        <div class ="q3">
          <p>How do I reset my password?&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  <button  class="b3"></button></p>
          <div class ="q3-ans ">
          <p style="font-weight: 400, 700;font-size: 12px;">Click “Forgot password” from the login page or </br> “Change password” from your profile page.
            A </br>reset link will be emailed to you.</p>
          </div>
          <hr>
        </div>
        <div class ="q4">
          <p>Can I cancel my subscription?&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;  <button  class="b4"></button></p>
          <div class ="q4-ans   ">
          <p style="font-weight: 400, 700;font-size: 12px;">Yes! Send us a message and we’ll process your </br>srequest no questions asked.
          </p>
          </div>
          <hr>
        </div>
        <div class ="q5">
          <p>Do you provide additional support?&nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;   <button  class="b5"></button></p>
          <div class ="q5-ans  ">
          <p style="font-weight: 400, 700;font-size: 12px;">Chat and email support is available 24/7. Phone </br> lines are open during normal business hours.
          </p>
          </div>
          <hr>
        </div>
      </div>
   
      <div class ="first">
        
       
        <div class ="background">
          
         
          <div class ="image1">
            <img src =".\images\illustration-box-desktop.svg" alt="">
           
           
          
        </div>
      </div>
  
    </div>
    
    

    </div>
</section>
 
<footer class="footer">
        <div class="container">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>Email: contact@dispensarysystem.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
            <div class="social-media">
                <h3>Follow Us</h3>
                <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg></a>
                <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg> </a>
                <a href="#" class="social-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></svg></a>
            </div>
        </div>
    </footer>

    <script>
        const images = [
            "./images/med1.jpg",
            "./images/medicine.jpg",
            "./images/banner.jpg"
        ];

        const banner = document.querySelector(".banner");
        let currentImageIndex = 0;

        function changeBackgroundImage() {
            banner.style.backgroundImage = `url(${images[currentImageIndex]})`;
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        setInterval(changeBackgroundImage, 3000); // Change image every 3 seconds


        const q1answer = document.querySelector(".q1-ans");
const q2answer = document.querySelector(".q2-ans");
const q3answer = document.querySelector(".q3-ans");
const q4answer = document.querySelector(".q4-ans");
const q5answer = document.querySelector(".q5-ans");
const button1 = document.querySelectorAll(".b1");
const button2 = document.querySelectorAll(".b2");
const button3 = document.querySelectorAll(".b3");
const button4 = document.querySelectorAll(".b4");
const button5 = document.querySelectorAll(".b5");
q1answer.classList.add("hide");
q2answer.classList.add("hide");
q3answer.classList.add("hide");
q4answer.classList.add("hide");
q5answer.classList.add("hide");


const change1 = () => {
  if (q1answer.classList.contains("hide")) {
    q1answer.classList.remove("hide");
    q1.classList.add("active");
   
    
  }
  else{
  q1answer.classList.add("hide");
  q1.classList.remove("active"); 
  

  }
};

button1.forEach((button) => button.addEventListener("click", change1));

const change2 = () => {
  if (q2answer.classList.contains("hide")) {
    q2answer.classList.remove("hide");
    q2.classList.add("active");
  } else {
    q2answer.classList.add("hide");
    q2.classList.remove("active");
  }
};

button2.forEach((button) => button.addEventListener("click", change2));

const change3 = () => {
  if (q3answer.classList.contains("hide")) {
    q3answer.classList.remove("hide");
    q3.classList.add("active");
  } else {
    q3answer.classList.add("hide");
    q3.classList.remove("active");
  }
};

button3.forEach((button) => button.addEventListener("click", change3));

const change4 = () => {
  if (q4answer.classList.contains("hide")) {
    q4answer.classList.remove("hide");
    q4.classList.add("active");
  } else {
    q4answer.classList.add("hide");
    q4.classList.remove("active");
  }
};

button4.forEach((button) => button.addEventListener("click", change4));

const change5 = () => {
  if (q5answer.classList.contains("hide")) {
    q5answer.classList.remove("hide");
    q5.classList.add("active");
  } else {
    q5answer.classList.add("hide");
    q5.classList.remove("active");
  }
};

button5.forEach((button) => button.addEventListener("click", change5));

const john = document.querySelector(".john");
const tanya = document.querySelector(".tanya");
const prevButtons = document.querySelectorAll(".prev__button");
const nextButtons = document.querySelectorAll(".next__button");


john.classList.add("hide");


const slideChange = () => {
  if (john.classList.contains("hide")) {
    john.classList.remove("hide");
    tanya.classList.add("hide");
  } else if (tanya.classList.contains("hide")) {
    tanya.classList.remove("hide");
    john.classList.add("hide");
  } else {
    john.classList.add("hide");
  }
};


prevButtons.forEach((button) => button.addEventListener("click", slideChange));
nextButtons.forEach((button) => button.addEventListener("click", slideChange));
    </script>
</body>
</html>
