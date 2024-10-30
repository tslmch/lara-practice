<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($orders as $item)
    <table action='/cart' method='GET'>
        <tr>
            <td>Товар</td>
            <td>Количество</td>
            <td>Сумма</td>
        </tr>
        <tr>
            <td>{{ $item->product->name }}</td> <!-- Предполагая, что у товара есть связь -->
            <td>{{ $item->amount }}</td>
            <td>{{ $item->total_amount }}</td>
        </tr>
    </table>
    @endforeach
</body>

</html>