<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Lista de produtos</title>
</head>
<body class="container mt-5 bg-dark">
    <h1 style="color: white">Lista de Produtos</h1>
    <a href=" {{ Route('product.create') }}" class="btn btn-lg btn-light">Criar Produto</a>
    <table>
        <thead >

        </thead>
        <tbody>
            @foreach($products as $prod)
            <tr>
                <th style="color: white"> {{ $prod->id }} </th>
                <th style="color: white"> {{ $prod->nome }} </th>
                <th style="color: white"> {{ $prod->descricao }} </th>
                <th style="color: white"> {{ $prod->preco }} </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>