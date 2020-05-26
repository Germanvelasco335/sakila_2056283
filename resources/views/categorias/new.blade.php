<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" method="post" action="{{ url('categorias/store')  }}" >
    @csrf
    <fieldset>
    <!-- detectar s la variable "exito" tiene un valor -->
    @if(session("exito")):
      <div class="alert-sucess">{{  session("exito")  }}</div>
    @endif

    <!-- Form Name -->
    <legend>Nueva categoria</legend>

    <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Nombre">Nombre de la categoria:</label>  
        <div class="col-md-4">
    <input id="textinput" name="categoria" value="{{  old('categoria')  }}" type="text" placeholder="" class="form-control input-md">
          <strong class="text-danger">{{  $errors->first('categoria')  }}</strong>
    
        </div>
        </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" type="submit" class="btn btn-info">Enviar</button>
  </div>
</div>

</fieldset>
</form>
    
</body>
</html>