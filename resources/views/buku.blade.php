<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Data Buku</h1>
        @foreach($user as $us)
        <li>
            <h2>{{ $us->name }}</h2>
            <h2>{{ $us->email }}</h2>
            <h2>@foreach($us->buku as $buku)
                {{ $buku->judul_buku }}
                @endforeach
            </h2>
        </li>
        @endforeach

        <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            @foreach($u->buku as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $b->judul_buku }}</td>
                <td>{{ $b->penulis_buku }}</td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
    </div>

    

   
</body>
</html>