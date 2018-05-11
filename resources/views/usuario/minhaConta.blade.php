@extends('layouts.app');
@section('content');

	<div class="container">
		<section id="hero">
			<form>
				<!-- <div class="row"> -->

					<div class="content">
					<div class="blc">
						<label for="textNome" class="control-label">Nome</label>
						<input type="text" class="form-control" name="name_usuario" id="name_usuario" value="{{Auth::user()->name}}" disabled>
					</div>
					<div class="blc">
						<label for="textNome" class="control-label">E-mail</label>
						<input type="text" class="form-control" name="emal_usuario" id="emal_usuario" value="{{Auth::user()->email}}" disabled>
					</div>
					<div class="blc">
						<label for="textNome" class="control-label">CPF</label>
						<input type="text" class="form-control" name="cpf_usuario" id="cpf_usuario" value="{{Auth::user()->cpf_cnpj}}" disabled>
					</div>
					</div>

					<div class="content">
					<div class="blc">
						<label for="textNome" class="control-label">UF</label>
						<input type="text" class="form-control"  name="uf_usuario" id="uf_usuario" value="{{Auth::user()->uf}}" disabled>
					</div>
					<div class="blc">
						<label for="textNome" class="control-label">Cidade</label>
						<input type="text" class="form-control"  name="cidade_usuario" id="cidade_usuario" value="{{Auth::user()->cidade}}" disabled>
					</div>
					<div class="blc">
						<label for="textNome" class="control-label">CEP</label>
						<input type="text" class="form-control"  name="cep_usuario" id="cep_usuario" value="{{Auth::user()->cep}}" disabled>
					</div>
					</div>

					@if(Auth::user()->tipo == 2)
						<div class="content">
						<div class="blc">
							<label for="textNome" class="control-label">Descrição</label>
							<input type="text" class="form-control"  name="descricao_usuario" id="descricao_usuario" value="{{Auth::user()->descricao}}" disabled>
						</div>
						<div class="blc">
							<label for="textNome" class="control-label">Especialidade</label>
							<input type="text" class="form-control"  name="especialidade_usuario" id="especialidade_usuario" value="{{Auth::user()->especialidade}}" disabled>
						</div>
						</div>
					@endif
			</form>

<!-- 			
			<p>{{Auth::user()->name}}</p>
			<p>{{Auth::user()->email}}</p>
			<p>{{Auth::user()->cpf_cnpj}}</p>
			<p>{{Auth::user()->uf}}</p>
			<p>{{Auth::user()->cidade}}</p>
			<p>{{Auth::user()->cep}}</p> -->
			<!-- @if(Auth::user()->tipo == 2)
				<p>{{Auth::user()->descricao}}</p>
				<p>{{Auth::user()->especialidade}}</p>
			@endif -->

			<form enctype="multipart/form-data" action="/home/minhaConta/inserirFotoUsuario" method="POST" class="form-horizontal">
				{{csrf_field()}}
				<div class="content">

				<div class="blc">
					<input type="hidden" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">
					<label for="foto_usuario">Adicionar foto</label>
					<input type="file" name="foto_usuario" id="foto_usuario">
				</div>
				<div class="blc">
					<button type="submit" class="btn btn-primary">Salvar Foto</button>
				</div>
				</div>
			</form>
			<!-- </div> -->
		</section>

		<!-- <button type="button" class="btn btn-primary">Alterar</button>
		<button type="submit" class="btn btn-primary">Salvar</button> -->
			
	</div>

@stop