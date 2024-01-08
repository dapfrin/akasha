<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"/>
    <script src="https://unpkg.com/feather-icons"></script>

    <!--my style-->
    <link rel="stylesheet" href="/css/shop.css" />
    <script src="https://kit.fontawesome.com/158e097b9e.js" crossorigin="anonymous"></script>
</head>
<body>
  
    <section id="menu" class="menu1">
      <h1>New Arrival</h1>
        <div class="about-col-2">
          </div>
          <div class="tab-contents active-tab" id="All">
            <div class="item-container">
              <a href="{{ route('purchase') }}">
                  <img src="/image/Tshirt2.png" alt="">
              </a>
              <div class="item-info">
                  <p class="item-name">Ceelt</p>
                  <p class="item-price">$79.99</p>
              </div>
          </div>
          
        
          <div class="item-container">
            <a href="{{ route('purchase') }}">
                <img src="/image/Tshirt3.png" alt="">
            </a>
            <div class="item-info">
                <p class="item-name">Fear</p>
                <p class="item-price">$79.99</p>
            </div>
        </div>
        

        <div class="item-container">
          <a href="{{ route('purchase') }}">
              <img src="/image/Tshirt5.png" alt="">
          </a>
          <div class="item-info">
              <p class="item-name">Blackhole</p>
              <p class="item-price">$79.99</p>
          </div>
      </div>
      
        
      <div class="item-container">
        <a href="{{ route('purchase') }}">
            <img src="/image/Tshirt6.png" alt="">
        </a>
        <div class="item-info">
            <p class="item-name">Ultramania</p>
            <p class="item-price">$79.99</p>
        </div>
    </div>
    
        
   

            </section>
            
  </body>


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
    <p>©2024 Akasha Fashion. All Rights Reserved.</p>
    <p>Privacy Policy | Terms of Service | Shipping & Returns.</p>
  </div>
</footer>
<!-- Footer end -->

<!-- Feather Icons -->
<script>
  feather.replace();
</script>
  </script>    
</body>
</html>