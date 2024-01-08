<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk</title>
</head>
<body>
    <h2>Update Produk</h2>
    <form method="post" action="{{ route('product.update', $product->id) }}">
        @csrf
        @method('PUT')

        <label for="nama_produk">Product Name:</label>
        <input type="text" name="nama_produk" value="{{ $product->name_product }}" required><br>

        <label for="image_product">Stok:</label>
        <input type="number" name="image_product" value="{{ $product->image_product }}" required><br>

        <label for="price_produk">Harga:</label>
        <input type="number" name="price_produk" value="{{ $product->price_product }}" required><br>

        <label for="category">Kategori:</label>
        <input type="number" name="category" value="{{ $product->category }}" required><br>

        <input type="submit" name="update_produk" value="Update Produk">
    </form>
</body>
</html>
