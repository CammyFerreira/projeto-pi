<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Criar um produto</title>
</head>
<body class="container mt-5 bg-dark">
    <h1 style="color: white">Criar Produtos</h1>
    <form method="POST" action=" {{ Route('produto.armazenar') }}">
        @CSRF
        <div class="form-group col-md-2 mt-4">
            <span style="color: white" class="form-label">Nome</span>
            <input type="text" class=form-control">
        </div>
        <div class="form-group col-md-2 mt-4">
            <span style="color: white" class="form-label">Preço</span>
            <input type="number" class=form-control">
        </div>
        <div class="form-group col-md-2 mt-4">
            <span style="color: white" class="form-label">Descrição</span>
            <textarea class="form-control"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-success col-md-2 mt-4">Salvar</button>
        </div>
    </form>
</body>
</html>