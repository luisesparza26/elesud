<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Productos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>

	<div class="container mx-auto">
		{!! Form::open(['route' => 'store']) !!}

<div class="form-group">
	{{ Form::label('categoria_id','Categoria') }}
	{{ Form::select('categoria_id',$categories,null, ['class' => 'form-control', 'id' => 'categoria']) }}
</div>

<div class="form-group">
	{{ Form::label('imagen_1','Imagen 1') }}
	{{ Form::text('imagen_1',null, ['class' => 'form-control', 'id' => 'imagen_1']) }}
</div>

<div class="form-group">
	{{ Form::label('imagen_2','Imagen 2') }}
	{{ Form::text('imagen_2',null, ['class' => 'form-control', 'id' => 'imagen_2']) }}
</div>

<div class="form-group">
	{{ Form::label('imagen_3','Imagen 3') }}
	{{ Form::text('imagen_3',null, ['class' => 'form-control', 'id' => 'imagen_3']) }}
</div>

<div class="form-group">
	{{ Form::label('titulo','Titulo') }}
	{{ Form::text('titulo',null, ['class' => 'form-control', 'id' => 'titulo']) }}
</div>

<div class="form-group">
	{{ Form::label('subtitulo','Subtitulo') }}
	{{ Form::text('subtitulo',null, ['class' => 'form-control', 'id' => 'subtitulo']) }}
</div>

<div class="form-group">
	{{ Form::label('descripcion','Descripcion') }}
	{{ Form::textarea('descripcion',null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('especificaciones','Especificaciones') }}
	{{ Form::textarea('especificaciones',null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>

{!! Form::close() !!}

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
		
	});

	CKEDITOR.height = 400;
	CKEDITOR.width  = 'auto';
	CKEDITOR.replace('descripcion');
	CKEDITOR.replace('especificaciones');
</script>
	</div>
	
</body>
</html>

