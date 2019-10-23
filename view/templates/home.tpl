<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>{$titulo}</title>
  <meta charset="UTF-8">
  <meta name="description" content="{$descricao}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{$sd}/recursos/bootstrap/css/bootstrap.css">
  <script src="{$sd}recursos/jquery/jquery.min.js"></script>
  <script src="{$sd}recursos/popper/popper.min.js"></script>
  <script src="{$sd}recursos/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
    {if $p404}
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Atenção!</strong> Pagina não encontrada: {$p404}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    {/if}


    <h1>Você está na pagina principal!!</h1><br>
    <h2>Conheça o nossos projetos</h2>

  </div>
</body>
</html>
