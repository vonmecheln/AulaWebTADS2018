<?php

class TelaQuestionario
{

  function criaQuestionario($perguntas)
  {
    $h = '
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      </head>
      <body>

      <div class="container">


        <div class="jumbotron">
          <h1 class="display-4">Pesquisa de Opnião!</h1>
          <p class="lead">Este é um formulário de perguntas para conhecermos mais sobre você!</p>
        </div>

        <form action="respostas.php" method="get">';

    $qtd = count($perguntas);
    for ($i=0; $i < $qtd; $i++) {
      //$h.='<p>'.$perguntas[$i].'</p>';
      // $h.='Sim<input type="radio" name="p'.($i+1).'" value="s">
      //      Não<input type="radio" name="p'.($i+1).'" value="n">';

      $h.='
      <div class="form-group">

        <label class="form-label">'.$perguntas[$i].'</label>

        <div class="form-row">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="p'.($i+1).'" id="p'.($i+1).'s" value="s">
            <label class="form-check-label" for="p'.($i+1).'s">Sim</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="p'.($i+1).'" id="p'.($i+1).'n" value="n">
            <label class="form-check-label" for="p'.($i+1).'n">Não</label>
          </div>
        </div>
      </div>';

    }

    $h .= '
          <input type="submit" name="" value="Responder">
        </form>
        </div>
      </body>
    </html>
    ';
    return $h;
  }
}
 ?>
