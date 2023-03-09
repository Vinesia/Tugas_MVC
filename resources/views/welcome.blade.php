<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th> name </th>
            <th> nim </th>
            <th> gender </th> 
        </tr>
        @foreach ($modelStudent as $item)
        <tr>
            <td> {{$item->name}} </td>
            <td> {{$item->nim}} </td>
            <td> {{$item->gender}} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>