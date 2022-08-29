<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/styless.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Mi primer Crud</title>
    <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}
body{
    background-color:aquamarine;
}
.form-register {
  width: 400px;
  background: #24303c;
  padding: 30px;
  margin: auto;
  margin-top: 100px;
  border-radius: 4px;
  font-family: 'calibri';
  color: white;
  box-shadow: 7px 13px 37px #000;
}

.form-register h4 {
  font-size: 22px;
  margin-bottom: 20px;
}

.controls {
  width: 100%;
  background: #24303c;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 16px;
  border: 1px solid #1f53c5;
  font-family: 'calibri';
  font-size: 18px;
  color: white;
}

.form-register p {
  height: 40px;
  text-align: center;
  font-size: 18px;
  line-height: 40px;
}

.form-register a {
  color: white;
  text-decoration: none;
}

.form-register a:hover {
  color: white;
  text-decoration: underline;
}

.form-register .botons {
  width: 100%;
  background: #1f53c5;
  border: none;
  padding: 12px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
}   
    </style>
</head>
<body>
    
 

    <section class="form-register">
   
    <form action="{{route('post.store')}}" method="post">
    @csrf
    <h4>Formulario Registro Post</h4>

    @error('title')
      <small class=text-danger">{{$message}} </small>
      @enderror
    <input class="controls" type="text" name="title"  placeholder="Ingrese el titulo">
    @error('slug')
      <small class=text-danger">{{$message}} </small>
      @enderror
    <input class="controls" type="text" name="slug"  placeholder="Ingrese la url corta">
    @error('content')
      <small class=text-danger">{{$message}} </small>
      @enderror
    <textarea class="controls" type="text" name="content" placeholder="Ingrese el contenido"></textarea> 
    
    @error('description')
      <small class=text-danger">{{$message}} </small>
      @enderror
    <textarea class="controls" type="text" name="description" placeholder="Ingrese una descripcion"></textarea> 

    <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
   
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>