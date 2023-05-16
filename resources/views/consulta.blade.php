<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consulta</title>

	<!-- Styles -->
	@vite([
	'resources/js/app.js',
	'resources/css/app.css',
	'node_modules/bootstrap/dist/css/bootstrap.min.css',
	'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
	])
</head>

<body>
	<div class="container">
		<div class="row">
			<nav class=" navbar navbar-expand-lg navbar-dark bg-primary col-12 ">

				<div class="container">
					<a class="navbar-brand" href="#">SISTEMA WEB</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="recolher navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="{{ url('/') }}">Cadastrar<span class="sr-only"></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ url('/consulta') }}">Consultar</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body" style="margin: auto;">
					<h5 class="card-title ">Consultar - Contatos Agendados</h5>
					<table class="table table-responsive" style="width: auto;">
						<thead class=" table-active bg-primary ">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Telefone</th>
								<th scope="col">Origem</th>
								<th scope="col">Contato</th>
								<th scope="col">Observação</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<tbody id="TableData ">
							@foreach ($agendamentos as $agendamento)
							<tr>
									<td scope="col">{{ $agendamento->nome }}</td >
									<td scope="col">{{ $agendamento->telefone }}</td>
									<td scope="col">{{ $agendamento->origem }}</td>
									<td scope="col">{{ $agendamento->data_contato }}</td>
									<td scope="col">{{ $agendamento->observacao }}</td>
									<td scope="col">
										<div class="btn-group">
											<form method="GET" action="/editar/{{ $agendamento->id }}" id="form" name="form">
												@csrf
												@method('GET')
												<button type="submit" class ="btn btn-outline-primary" style ="width: 72px;">Editar</botão>
											</form>
											<form method="POST" action="/excluir/{{ $agendamento->id }}" id="form" name="form">
												@csrf
												@method('DELETE')
												<button type="submit" class ="btn btn-outline-primary" style="width: 72px;">Excluir</button>
											</form>
										</div>
									</td>
								</tr>
								@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>

</html>