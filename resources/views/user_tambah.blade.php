<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form method="post" action="{{ url('/user/tambah_simpan') }}">
        @csrf
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" required>
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" required>
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level" required>
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>
