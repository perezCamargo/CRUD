<!Doctype html>
<html>
<head>
	<title>Save CRUD</title>
	<style type="text/css">

	</style>
</head>
<body>
	
	<h1>CRUD</h1>

	{{ Form::open(array('url' => 'create'))	}}
		{{ Form::label('usuario', 'Nombre') }}
		{{ Form::text('usuario') }}
		{{ Form::submit('Guardar') }}
	{{ Form::close() }}

	<br/>
	<br/>
	

	{{ HTML::link('editar', 'Ver/Editar usuarios') }}

</body>
</html>