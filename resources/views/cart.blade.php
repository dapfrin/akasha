<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--my style-->
    <link rel="stylesheet" href="css/cart.css" />
    <script src="https://kit.fontawesome.com/158e097b9e.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Items in My Cart</h2>
    <div class="cart-form-container">
        <ul class="cart-list">
            <li class="cart-container">
                <div class="product-details">
                    <div class="product-image">
                        <!-- Gambar produk -->
                        <img src="/image/tes1.jpg" alt="Product Image">
                    </div>
                    <div class="product-description">
                        <!-- Deskripsi produk -->
                        <h3>Hoodie Motif Bizzaro</h3>
                        <p>Size: S</p>
                        <p>Price: $50</p>
                    </div>
                </div>
            </li>
            
            <li class="cart-container">
                <div class="product-details">
                    <div class="product-image">
                        <!-- Gambar produk -->
                        <img src="/image/tes1.jpg" alt="Product Image">
                    </div>
                    <div class="product-description">
                        <!-- Deskripsi produk -->
                        <h3>Hoodie Motif Bizzaro</h3>
                        <p>Size: S</p>
                        <p>Price: $50</p>
                    </div>
                </div>
            </li>
        
            <li class="cart-container">
                <div class="product-details">
                    <div class="product-image">
                        <!-- Gambar produk -->
                        <img src="/image/tes1.jpg" alt="Product Image">
                    </div>
                    <div class="product-description">
                        <!-- Deskripsi produk -->
                        <h3>Hoodie Motif Bizzaro</h3>
                        <p>Size: S</p>
                        <p>Price: $50</p>
                    </div>
                </div>
            </li>
        </ul>
        
        <div class="form-container">
        <div class="purchase-form">
            <h3>Order Summary</h3>
            <div class="description">
            <div class="desc">
            <p> Sub total: </p>
            <p> Shipping: </p>
            <p> Total: </p>
            </div>
            <div class="desc1">
                <p> $150 </p>
                <p> $5</p>
                <p> $155 </p>
            </div>
            </div>
            <form id="purchaseForm">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="payment-method">Metode Pembayaran:</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="credit-card">Kartu Kredit</option>
                    <option value="bank-transfer">Transfer Bank</option>
                    <option value="paypal">PayPal</option>
                </select>

                <button type="button" onclick="purchase()">Beli</button>
            </form>
        </div>
    </div>
</div>

    <!-- Popup Pembelian Berhasil -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <p>Pembelian Berhasil!</p>
        </div>
    </div>

    <script>
        function purchase() {
            // Logika pembelian, validasi form, dll.
            // Disini Anda dapat menambahkan logika untuk memproses pembelian.

            // Tampilkan popup pembelian berhasil
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            // Tutup popup
            document.getElementById("popup").style.display = "none";
        }
    </script>
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
          <p>Copyright Â© 2024 Akasha Fashion, Ltd. All Rights Reserved, Site Credit.</p>
        </div>
      </footer>
      <!-- Footer end -->
  
      <!-- Feather Icons -->
      <script>
        feather.replace();
      </script>
      
</body>
</html>