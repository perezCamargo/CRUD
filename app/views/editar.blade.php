<!Doctype html>
<html>
<head>
	<title>Editar CRUD</title>
	<script type="text/javascript">
		function sendToEdit(user,id){
			alert(user+'___'+id);
			document.getElementById('textEdit').value = user;
			document.getElementById('hideId').value	= id;	
		}
	</script>
	{{ HTML::script('public/js/ruta') }}
</head>
<body>

	<h1>EDITAR</h1>
	
		@if ($datos)
		<table>
			@foreach ($datos as $dato)
			<tr>	
				<td>{{ $dato->id }}</td>			
				<td>{{ $dato->usuario }}</td>
				<td><a href="{{ URL::to('delete/' . $dato->id) }}">Borrar</td>
				<td><button type="button" onclick="sendToEdit('{{ $dato->usuario }}','{{ $dato->id }}')">Editar</button></td>
			</tr>
			@endforeach
		</table>
	@endif

	<br/>	
	<br/>
	{{ Form::open(array('url' => 'update'))	}}
		{{ Form::label('textEdit', 'Nombre') }}
		{{ Form::text('textEdit') }}
		{{ Form::hidden('hideId','', ['id'=>'hideId'])}}
		{{ Form::submit('Guardar') }}
	{{ Form::close() }}


	<br/>
	<br/>
	{{ HTML::link('/', 'Home') }}

</body>
</html>