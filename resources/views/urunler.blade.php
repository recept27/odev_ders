
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Kullanıcılar</h2>

<table>
    <tr>
        <th>Adı</th>
        <th>E-mail</th>
        <th>Şifre</th>
    </tr>
    @foreach($urunler as $urunler)
        <tr>
            <td>{{$urunler->id}}</td>
            <td>{{$urunler->name}}</td>
            <td>{{$urunler->price}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
