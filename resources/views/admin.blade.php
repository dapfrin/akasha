<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Welcome to Admin Dashboard!</h2>

    <!-- Tombol Tambah -->
    <a href="{{ route('admin.create') }}">Tambah Produk</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name_product }}</td>
                <td>{{ $product->image_product }}</td>
                <td>{{ $product->price_product }}</td>
                <td>{{ $product->category }}</td>
                <td>
                    <!-- Tombol Ubah -->
                    <a href="{{ route('admin.edit', ['id' => $product->id]) }}">Ubah</a>
                    
                    <!-- Tombol Hapus -->
                    <form method="post" action="{{ route('admin.destroy', ['id' => $product->id]) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
