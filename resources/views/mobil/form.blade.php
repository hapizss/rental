<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="card">
        <h2>From tambah mobil</h2>
        <form action="/mobil/simpandata" method="post">
            @csrf
            <div class="form-group">
                <label for="">nama mobil</label><br>
                <input type="text" name="nama_mobil" required><br>
            </div>
            <div class="form-group">
                <label for="">merk mobil</label><br>
                <input type="text" name="merk_mobil" required><br>
            </div>
            <div class="form-group">
                <label for="">cc</label><br>
                <input type="text" name="cc" required><br>
            </div>
            <div class="form-group">
                <button type="submit">tambah data</button>
            </div>
        </form>
    </div>
</body>

</html>
