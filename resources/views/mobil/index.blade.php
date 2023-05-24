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
        <h2>data mobil</h2>
        <table>
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama mobil</th>
                    <th>merk mobil</th>
                    <th>cc</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($datamobil as $mobil)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mobil['namamobil'] }}</td>
                        <td>{{ $mobil['merkmobil'] }}</td>
                        <td>{{ $mobil['cc'] }}</td>
                    </tr>
                    @empty
                        <h3>data belum disimpan</h3>
                    @endempty
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
