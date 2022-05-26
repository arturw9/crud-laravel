<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar novo endereco</title>
    <style>
        label{
            float:left;
            display: block;
            width: 90px;
        }
    </style>
</head>
<body>
<form action="{{route('salvar_adress')}}" method="post">
    @csrf
    <div><label for="rua">Rua</label><input type="text" name="rua" id="rua"></div>
    <div><label for="numero">Numero</label><input type="text" name="numero" id="numero"></div>
    <div><label for="bairro">Bairro</label><input type="text" name="bairro" id="bairro"></div>
    <div><label for="cidade">Cidade</label><input type="text" name="cidade" id="cidade"></div>
    <div><label for="estado">Estado</label><input type="text" name="estado" id="estado"></div>
    <div><label for="pais">Pais</label><input type="text" name="pais" id="pais"></div>
    <div><label for="cep">CEP</label><input type="text" name="cep" id="cep"></div>
    <button type="submit">Salvar</button>
</form>
</body>
</html>
