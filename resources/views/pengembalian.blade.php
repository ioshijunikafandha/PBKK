<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.return-container {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    width: 100%;
    text-align: center;
}

.return-container h2 {
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 3px;
}

button:hover {
    background-color: #555;
}
    </style>
</head>
<body>
    <div class="return-container">
        <h2>Pengembalian Buku</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="book">Pilih Buku:</label>
                <select name="book" id="book">
                    <option value="buku1">Buku 1</option>
                    <option value="buku2">Buku 2</option>
                    <option value="buku3">Buku 3</option>
                </select>
            </div>
            <button type
