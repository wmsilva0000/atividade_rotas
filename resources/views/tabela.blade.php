<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="{{ asset('tabela.css') }}">
</head>
<body>
<table class="tabela">
    <thead>
        <tr class=titulo>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
              @foreach ($produto as $dadosproduto=>$dados)
                <td>{{ $dados }}</td>
             @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>