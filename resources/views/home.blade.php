<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--my style-->
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/158e097b9e.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#home"><i class="fa-solid fa-meteor"></i><img src="/image/logo.png" alt=""> </a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Collection</a>
        <a href="#socials">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="{{ route('login') }}" id="login"> <i data-feather="user"></i></a>
        
        <a href="#" id="hamburger-menu"> <i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <img src="image/head1.jpg" alt="Hero Image">
        <div class="text-overlay">
          <h1>Welcome to Akasha</h1>
          <p>Step into Fashion, Step into Akasha.</p>
          <div class="btn"><a href="{{ route('shop') }}" ><p>Go to Shop</p></a></div>
        </div>
      </main>
    </section>
    

    <!-- Hero Section end -->
    <section id="about" class="about">
      <!--<h2><span>About </span>Us</h2>-->
      <div class="row">
        <div class="col">
          <h3>Our Vision</h3>
          <p>
            Trailblazing the Future of Fashion with a Modern Twist. 
            Sculpting Tomorrow's Wardrobe, Today, with an Innovative Edge. 
            Envisioning a Fashion Revolution with a Dash of Creativity. 
            Spearheading the Charge Towards Futuristic Apparel Infused with Modern Flair. <br>
            Our Vision: Redefining Style for a Bold Tomorrow. </p>
          </div>
        <div class="col1">
          <h3>Our Mission</h3>
          <p>
            Infuse Every Wardrobe with a Splash of Futuristic Elegance and Modern Panache. 
            Pioneering Fashion Beyond Conventional Limits with Creative Sparks. 
            Igniting Your Style Odyssey into the Future with a Modern Touch. 
            Committing to Sustainability in the Realm of Futuristic Fashion, 
            Embellished with a Modern Aesthetic. <br>
            Our Mission: Inspiring Confidence through Attire that Speaks to the Creative Soul.</p>
            </div>       
      </div>
    </section>
    <div class="col2">
      <p>Crafting Fashion with Passion <br>"The Akasha Story." </p>
      <img src="image/head2.jpg" alt=""></div>
    </section>
    <!-- About Section start -->
    <section id="menu" class="menu">
      <h2><span>Best</span> Seller</h2>
      <div class="bestseller">
        <img src="/image/tes.jpeg" alt="">
        <img src="/image/tes1.png" alt="">
        <img src="/image/tes3.png" alt="">
        <img src="/image/tes4.png" alt="">
       </div> 
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
      <h2><span>Our</span> Collection</h2>
      <div class="collection">
        <div class="item">
          <img src="image/col1.jpg" alt="">
          <p class="overlay-text">Outer</p>
        </div>
        <div class="item">
          <img src="image/col2.jpg" alt="">
          <p class="overlay-text">T-shirt</p>
        </div>
        <div class="item">
          <img src="image/col3.jpg" alt="">
          <p class="overlay-text">Pants</p>
        </div>
      </div>
    </section>
    
</body>
<script>
    var tablinks = document.querySelectorAll(".tab-link");
    var tabcontents = document.querySelectorAll(".tab-contents");

    function opentab(tabname) {
        tablinks.forEach(function (tablink) {
            tablink.classList.remove("active-link");
        });
        tabcontents.forEach(function (tabcontent) {
            tabcontent.classList.remove("active-tab");
        });
        document.querySelector("#" + tabname).classList.add("active-tab");
        event.currentTarget.classList.add("active-link");
    }

    function showPopup(element) {
    const popupContent = element.querySelector(".popup-content");
    if (popupContent.style.display === "block") {
        popupContent.style.display = "none";
    } else {
        // Menyembunyikan semua popup yang terbuka
        const allPopups = document.querySelectorAll(".popup-content");
        allPopups.forEach(function (popup) {
            popup.style.display = "none";
        });
        // Menampilkan popup yang sesuai dengan gambar yang ditekan
        popupContent.style.display = "block";
    }
}


</script>

    <!-- Contact Section end -->

    <!-- Search Section start -->
    
    <!-- Search Section end -->

    <!-- Login Section start -->
    
    <!-- Login Section end -->

    <!-- Footer start -->
    <footer>
      <div class="socials" id="socials">
        <p>Connect with Akasha</p>
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="credit">
        <p>Privacy Policy   |   Terms of Service   |   Shipping & Returns.</p>
        <p>Copyright © 2024 Akasha Fashion, Ltd. All Rights Reserved, Site Credit.</p>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

  </body>
</html>
