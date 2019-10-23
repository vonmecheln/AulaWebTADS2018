<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>{$titulo}</title>
  <meta charset="UTF-8">
  <meta name="description" content="{$descricao}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{$sd}/recursos/bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="container">
    {if $p404}
    <div>
      <strong>Atenção!</strong> Pagina não encontrada: {$p404}
    </div>
    {/if}


    <h1>Você está na pagina principal!!</h1><br>
    <h2>Conheça o nossos projetos</h2>

  </div>
</body>
</html>
