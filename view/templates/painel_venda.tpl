<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>{$titulo}</title>
  <meta charset="UTF-8">
  <meta name="description" content="{$descricao}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{$sd}recursos/bootstrap/css/bootstrap.css">
  <script src="{$sd}recursos/jquery/jquery.min.js"></script>
  <script src="{$sd}recursos/popper/popper.min.js"></script>
  <script src="{$sd}recursos/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  function somaVenda() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange =
    function() {
              if (this.readyState == 4 && this.status == 200) {
                  console.log(this.responseText);
              }
          }
    xmlhttp.open("GET", "http://192.168.56.105/web/AulaWebTADS2018/controlvenda/inc", true);
    xmlhttp.send();

  }
  </script>
</head>

<body>
  <div class="container">
    <div class="row justify-content-md-center">

      <div class="panel panel-default align-middle border col-4">
        <div class="panel-body">
          <div class="row">

            <div class="col-2">
              <a href="#" class="btn btn-info btn-lg">
                <span>+</span>
              </a>
            </div>

            <div class="col text-center">
              <h1>520</h1>
            </div>

            <div class="col-2">
              <a href="#" class="btn btn-warning btn-lg">
                <span class="">-</span>
              </a>
            </div>

          </div>


        </div>
      </div>

    </div>
  </div>
</body>

</html>
