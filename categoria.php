<?php

    session_start();

    if ( !isset($_SESSION['nome']) )
    {
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="bg-danger text-white p-3 text-center">
        <h1>Cadastro de Categorias</h1>
    </div>

    <div class="container">

            <div class="row">
                <div class="col-sm-8 mx-auto mt-3 border border-danger">
                <h3>Preencha os dados abaixo:</h3>

                <form action="categoria_cadastro">

                    <p>
                        Digite o nome da categoria<br>
                        <input type="text" name="nomecategoria" class="form-control">
                    </p>

                    <p>
                        <input type="submit" value="Cadastrar" class="btn btn-danger">
                        <input type="reset" value="Limpar" class="btn btn-success">
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                    </p>
                </form>
                </div>
            </div>
    </div>
</body>
</html>