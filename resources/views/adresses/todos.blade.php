<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de enderecos</title>
</head>
<body>
<table>
    <tr><th>rua</th><th>numero</th><th>bairro</th><th>cidade</th><th>estado</th><th>pais</th><th>cep</th></tr>
    @foreach($adresses as $adress)
        <tr>
            <td>{{$adress->rua}}</td>
            <td>{{$adress->numero}}</td>
            <td>{{$adress->bairro}}</td>
            <td>{{$adress->cidade}}</td>
            <td>{{$adress->estado}}</td>
            <td>{{$adress->pais}}</td>
            <td>{{$adress->cep}}</td>
            <td><a href="{{route('editar_adress', ['id'=>$adress->id])}}" title="Excluir endereco {{$adress->cep}}">Editar</a></td>
            <td><a href="{{route('excluir_adress', ['id'=>$adress->id])}}" title="Excluir endereco {{$adress->cep}}">Excluir</a></td>
        </tr>
@endforeach

</body>
</html>
