<!DOCTYPE html>
<html>
<head>
<title>Ejemplo Laravel</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4">
		@if(session('status'))
		<div class="alert alert-success">{{ session('status') }}</div>
		@endif
		<div class="card">
			<div class="card-header text-center font-weight-bold">Ejemplo Laravel
				insertar POST</div>
			<div class="card-body">
				<form name="formulario" id="formulario" method="post"
					action="{{url('guardar')}}">
					@csrf
					<div class="form-group">
						<label for="title">Título</label> <input type="text" id="title"
							name="title" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="description">Descripción</label>
						<textarea name="description" class="form-control" required=""></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
					<a class="btn btn-primary" href="{{ url('mostrar') }}">Mostrar
						Posts</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>