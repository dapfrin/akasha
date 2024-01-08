<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pembayaran</title>
    <link rel="stylesheet" href="/css/purchase.css" />
    <!-- Hubungkan dengan file CSS terpisah -->
    <script>
      function hitungTotalHarga() {
        var hargaPerBarang = document.getElementById("harga_per_barang").value;
        var jumlahBarang = document.getElementById("jumlah_barang").value;
        var totalHarga = hargaPerBarang * jumlahBarang;
        document.getElementById("total_harga").value = totalHarga.toFixed(2);
      } 

      
    </script>
  </head>
  <body>
    <div class="tittle">
      <h2>Form Pembayaran</h2>
    </div>
    <div class="container">
    <form action="proses_pembayaran.php" method="post">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required />

      <label for="alamat">Alamat:</label>
      <textarea id="alamat" name="alamat" rows="4" required></textarea>

      <div class="ngitung">
      <label for="harga_per_barang">Harga per Barang:</label>
      <input
        type="number"
        id="harga_per_barang"
        name="harga_per_barang"
        step="0.01"
        required
        onchange="hitungTotalHarga()"
        value="79.99"
      />

      <label for="jumlah_barang">Jumlah Barang:</label>
      <input
        type="number"
        id="jumlah_barang"
        name="jumlah_barang"
        required
        onchange="hitungTotalHarga()"
      /></div>

      <label for="metode_pembayaran">Metode Pembayaran:</label>
      <select id="metode_pembayaran" name="metode_pembayaran" required>
        <option value="transfer_bank">Transfer Bank</option>
        <option value="kartu_kredit">Kartu Kredit</option>
        <!-- Tambahkan opsi metode pembayaran lainnya jika diperlukan -->
      </select>

      <label for="metode_pengiriman">Metode Pengiriman:</label>
      <select id="metode_pengiriman" name="metode_pengiriman" required>
        <option value="reguler">Reguler</option>
        <option value="express">Express</option>
        <!-- Tambahkan opsi metode pengiriman lainnya jika diperlukan -->
      </select>

      <label for="total_harga">Total Harga:</label>
      <input type="text" id="total_harga" name="total_harga" readonly />

      <!-- Tombol untuk menampilkan popup -->
<button type="submit" id="showPopup" onclick="showPopup()">Proses Pembayaran</button>


 <!-- Popup pertama -->
<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
  <p>Confirmation Payments</p>
  <button onclick="confirmation()">Yes</button>
  <button onclick="closePopup()">No</button>
 
</div>

    
      <!-- Popup kedua -->
      <div class="overlay2" id="overlay2"></div>
      <div class="popup2" id="popup2">
        <p>Payment Successfully!</p>
        <button onclick="confirmation2()">Ok</button>
      </div>
    
      <script>
        // Fungsi untuk menampilkan popup
        function showPopup() {
          document.getElementById('overlay').style.display = 'block';
          document.getElementById('popup').style.display = 'block';
        }
    
        // Fungsi untuk menutup popup pertama
        function closePopup() {
          document.getElementById('overlay').style.display = 'none';
          document.getElementById('popup').style.display = 'none';
        }
    
        // Fungsi untuk menanggapi tombol "Yes" dan menampilkan popup kedua
        function confirmation() {
          document.getElementById('overlay').style.display = 'none';
          document.getElementById('popup').style.display = 'none';
          document.getElementById('overlay2').style.display = 'block';
          document.getElementById('popup2').style.display = 'block';
        }
    
        // Fungsi untuk menutup popup kedua
        function confirmation2() {
          document.getElementById('overlay2').style.display = 'none';
          document.getElementById('popup2').style.display = 'none';
        }
    
        // Menambahkan event listener pada tombol
        document.getElementById('showPopup').addEventListener('click', showPopup);
        
      </script>
    </div>
    </form>
  </body>
</html>
