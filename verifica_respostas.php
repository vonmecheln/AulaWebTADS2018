<?php
class VerificaResposta
{
  function contabilizar($respostas)
  {
    $qs = 0;
    $qn = 0;
    for ($i=1; $i <= count($respostas); $i++) {
      $p = 'p'.$i;
      if ($respostas[$p] == 's') {
        $qs ++;
      } else {
        $qn ++;
      }
    }
    return "Sim: $qs e Não: $qn";
  }
}
 ?>
