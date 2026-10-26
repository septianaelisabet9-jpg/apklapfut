<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Lapangan Futsal</title>
</head>
<body>
    <h2>Daftar Akun Baru</h2>

    <form action="/register" method="POST">
        @csrf 
        <p>Nama Lengkap: <input type="text" name="nama" required></p>
        <p>Email: <input type="email" name="email" required></p>
        <p>Nomor HP (WhatsApp): <input type="text" name="no_hp" required></p>
        <p>Password: <input type="password" name="password" required></p>
        
        <button type="submit">Register</button>
        <br><br>
        <p>Sudah punya akun? <a href="/login">Login</a></p>
    </form>
</body>
</html>