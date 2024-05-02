<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" type="x-icon" href="cafelucy4.png">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Lucy's Cafe</title>

   <!-- font style sa ilalim nito lols    -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <!-- custom style sa ilalim nito another lols -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Dito mag uumpisa ang header -->
<header class="header">
    
    <a href="#home" class="logo">
        <img src="cafelucy4.png" alt="Lucy's Cafe">
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#specialty">Specialty</a>
        <a href="#review">Review</a>
        <a href="#contact">Find Us</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>



    
</header>




<!-- Dito matatapos ang header -->


<!-- home section dito -->

<section class="home" id="home">
    <div class="content">
        <h3>Your neighborhood hole-in-the-wall café!</h3>
        <p>Morning and afternoon taste</p>
    </div>
</section>

<!-- home section matatapos dito -->


<!-- about section ay maguumpisa -->

<section class="about" id="about">
    <h1 class="heading"><span>About</span> Us</h1>

    <div class="row">
        <div class="image">
            <img src="Cofffeeground.jpg" alt="">
        </div>
        <div class="content">
            <h3>taste the great...</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <p>Lorem ist panum est lsrumen past ko sinb tey Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi u</p>
            <a href="#" class="btn">learn more</a>
        </div>
        
    </div>
</section>

<!--- about section ay tapos na-->

<!-- menu ay magsisimula -->

<section class="menu" id="menu">
    <h1 class="heading"> our <span>menu</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="menu1-modified.png" alt="">
            <h3>Healthy and tasty</h3>
            <div class="price">₱159 <span>₱160</span></div>
            <a href="#" class="btn">Add to cart</a>
        </div>

        <div class="box">
            <img src="menu2-modified.png" alt="">
            <h3>Great taste</h3>
            <div class="price">₱159 <span>₱160</span></div>
            <a href="#" class="btn">Add to cart</a>
          </div>
        <div class="box">
            <img src="menu3-modified.png" alt="">
            <h3>Good for the body</h3>
            <div class="price">₱159 <span>₱160</span></div>
            <a href="#" class="btn">Add to cart</a>
        </div>
        <div class="box">
            <img src="menu4-modified.png" alt="">
            <h3>Energize all the way</h3>
            <div class="price">₱159 <span>₱160</span></div>
            <a href="#" class="btn">Add to cart</a>
        </div>

    </div>
</section>
<!-- menu ay matatapos -->
<section class="specialty" id="specialty">

<h1 class="heading">our <span>specialty</span> </h1>

<div class="box-container">
    <div class="box">
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="Choco Marshmallow Frappe1.png" alt="">
        </div>
        <div class="content">
            <h3>Fresh Choco Frappe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱159 <span>₱179</span></div>
        </div>
    </div>

    <div class="box">
        <div class="icons"> <!-- Corrected class name from "icon" to "icons" -->
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
            <img src="Strawberry Frappe2.png" alt="">
        </div>
        <div class="content">
            <h3>Fresh Strawberry Frappe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₱159 <span>₱179</span></div>
        </div>
    </div>
</div>


</section>
<!-- Umpisa ng review seksyon -->

<section class="review" id="review">
    <h1 class="heading">customer's  <span>feedback</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="Quote-removebg-preview11 (1).png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
               Duis aute irure dolor in reprehenderit</p>
            <img src="Face1-modified.png" class="user" alt="">
            <h3>Michael Souveni</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="Quote-removebg-preview11 (1).png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
               Duis aute irure dolor in reprehenderit</p>
            <img src="Face2-modified.png" class="user" alt="">
            <h3>Misa Aramphen</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="Quote-removebg-preview11 (1).png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
               Duis aute irure dolor in reprehenderit</p>
            <img src="Face3-modified.png" class="user" alt="">
            <h3>Rick Astello</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>




</section>


<!-- Tapos ng review seksyon -->

<!-- Maguumpisa ang Find Us seksyon -->

<section class="contact" id="contact">
    <h1 class="heading"> <span>find</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21591.747882444248!2d121.76841249444612!3d16.929344685431193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338551aee86007db%3A0x8f516a61564e1cbb!2s154-85%20Canciller%20Ave%2C%20Cauayan%20City%2C%20Isabela!5e0!3m2!1sen!2sph!4v1714642772361!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           <form action="">
            <h3>speak with us</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="Phone number">
            </div>
            <input type='submit' value="contact now" class="btn">
           </form>
   
    </div>

</section>


<!-- Matatapos ang Find Us seksyon -->

<!-- FOOTER NALANG -->
<section class="footer">
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

<div class="links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Menu</a>
      <a href="#specialty">Specialty</a>
      <a href="#review">Review</a>
      <a href="#contact">Find Us</a>
</div>

<div class="credit"> Created by <span>Group 3</span> | all rights reserved  | <?php echo date("l, F j, Y h:i A"); ?> </div>
</section>
<!-- PATAPOS NAAA-->


    <!-- js link sa ilalim nito lolol -->
    <script src="script.js"></script>
</body>
</html>