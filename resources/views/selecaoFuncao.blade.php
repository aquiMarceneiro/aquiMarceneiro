@extends('layouts.app')
@section('content')
	<section>
		<header>
			<div class="row">
				<div class="col-md-12" style="display: block;">
					<h1 style="color:brown;margin-top:50px;text-align: center">Você é ?</h1>
				</div>
			</div>
		</header>
		<div class='row' style="margin-top: 50px; margin-bottom: 200px; text-align: center; ">
			<div class="col-md-6">
				<a href="cadastrarUsuario/formularioCliente"><img src="/img/cliente-icon.png" style="width: 250px; height: auto;"></a>
				<p>Cliente</p>
			</div>
			<div class="col-md-6">
				<a href="cadastrarUsuario/formularioMarceneiro"><img src="/img/marceneiro-icon.jpg" style="width: 250px; height: auto;"></a>
				<p>Marceneiro</p>
			</div>
		</div>
	</section>

@stop