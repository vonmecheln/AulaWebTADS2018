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

  function formSubmit(){

    $.ajax({
      type: "POST",
      url:'{$sd}controleequipamento/salvar',
      data: $("#form_equipamento").serialize(),
      success: function(msg){
        alert(msg);
      },
      error: function(){
        alert("falhou");
      }
   });
  }
  </script>
</head>

<body>
  <div class="container">

  <form class="form-horizontal" id="form_equipamento"  onsubmit="formSubmit(); return false;">

  <fieldset class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="exampleInputEmail1" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile">
    <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </fieldset>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
      Option one is this and that&mdash;be sure to include why it's great
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Option two can be something else and selecting it will deselect option one
    </label>
  </div>
  <div class="radio disabled">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
      Option three is disabled
    </label>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>
</body>

</html>
