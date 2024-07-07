<!DOCTYPE html>
<html>
<head>
<title>Ejemplo Laravel</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4">
		<div class="card">
			<div class="card-header text-center font-weight-bold">
				Post disponibles
			</div>
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope='col'>#</th>
						<th scope='col'>Título</th>
						<th scope='col'>Descripción</th>
						<th scope='col'>Borrar</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($posts as $post)
					<tr>
						<th scope='row'>{{ $post->id }}</th>
						<th scope='row'>{{ $post->title }}</th>
						<th scope='row'>{{ $post->description }}</th>
						<th scope='row'><a href="{{url('borrar?id='.$post->id)}}">Borrar</a></th>
					
					</tr>
					@endforeach
				</tbody>
			</table>
			<a class="btn btn-primary" href="{{ url('nuevo') }}">Insertar nuevo	post</a>
		</div>
	</div>
</body>
</html>