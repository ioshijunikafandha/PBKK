<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

section {
    background-color: #fff;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 10px;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    margin-bottom: 10px;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
}
</style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Sistem Informasi Perpustakaan</h1>
    </header>
    
    <div class="container">
        <section>
            <h2>Daftar Buku</h2>
            <ul>
                <li>Buku 1 - Penulis 1</li>
                <li>Buku 2 - Penulis 2</li>
                <li>Buku 3 - Penulis 3</li>
            </ul>
        </section>

        <section>
            <h2>Peminjaman</h2>
            <form action="#" method="post">
                <label for="book">Pilih Buku:</label>
                <select name="book" id="book">
                    <option value="buku1">Buku 1</option>
                    <option value="buku2">Buku 2</option>
                    <option value="buku3">Buku 3</option>
                </select>
                <button type="submit">Pinjam</button>
            </form>
        </section>

        <section>
            <h2>Pengembalian</h2>
            <form action="#" method="post">
                <label for="book">Pilih Buku:</label>
                <select name="book" id="book">
                    <option value="buku1">Buku 1</option>
                    <option value="buku2">Buku 2</option>
                    <option value="buku3">Buku 3</option>
                </select>
                <button type="submit">Kembalikan</button>
            </form>
        </section>

        <section>
        <form action="#" method="post">
                <button type="submit">LOGOUT</button>
            </form>
        </section>
    </div>

    <footer>
        &copy; 2023 Sistem Informasi Perpustakaan
    </footer>
</body>
</html>
