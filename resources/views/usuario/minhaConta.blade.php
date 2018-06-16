@extends('layouts.app');
@section('content');

	<div class="container">
		<section id="hero">
			<nav aria-label="breadcrumb">

				<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Início</a></li>
					<li class="breadcrumb-item active" aria-current="page">Minha Conta</li>
				</ol>
			</nav>
			<form enctype="multipart/form-data" action="/home/minhaConta/alterarUsuario" method="POST" class="form_minha_conta">
				{{csrf_field()}}
					
					<div class="form-group">
						<label for="textNome" class="control-label">Nome</label>
						<input type="text" class="form-control" name="name_usuario" id="name_usuario" value="{{Auth::user()->name}}">
					</div>

					<div class="form-group">
						<label for="textNome" class="control-label">E-mail</label>
						<input type="text" class="form-control" name="emal_usuario" id="emal_usuario" value="{{Auth::user()->email}}">
					</div>

					<div class="form-group">
						<label for="textNome" class="control-label">CPF</label>
						<input type="text" class="form-control" name="cpf_usuario" id="cpf_usuario" value="{{Auth::user()->cpf_cnpj}}">
					</div>

					<div class="form-group">
						<label for="textNome" class="control-label">UF</label>
						<input type="text" class="form-control"  name="uf_usuario" id="uf_usuario" value="{{Auth::user()->uf}}">
					</div>

					<div class="form-group">
						<label for="textNome" class="control-label">Cidade</label>
						<input type="text" class="form-control"  name="cidade_usuario" id="cidade_usuario" value="{{Auth::user()->cidade}}">
					</div>

					<div class="form-group">
						<label for="textNome" class="control-label">Bairro</label>
						<input type="text" class="form-control"  name="bairro_usuario" id="bairro_usuario" value="{{Auth::user()->cidade}}">
					</div>

					<div class="form-group">
						<label for="textNome" class="control-label">CEP</label>
						<input type="text" class="form-control"  name="cep_usuario" id="cep_usuario" value="{{Auth::user()->cep}}">
					</div>

					@if(Auth::user()->tipo == 2)
						<div class="form-group">
							<label for="textNome" class="control-label">Descrição</label>
							<textarea class="form-control"  name="descricao_usuario" id="descricao_usuario" style="resize: none;">
								{{Auth::user()->descricao}}
							</textarea>
						</div>

						<div class="form-group">
							<label for="textNome" class="control-label">Especialidade</label>
							<input type="text" class="form-control"  name="especialidade_usuario" id="especialidade_usuario" value="{{Auth::user()->especialidade}}">
						</div>
					@endif

				<div class="form-group">
					<input type="hidden" name="id_usuario" id="id_usuario" value="{{Auth::user()->id}}">
					<label for="foto_usuario">Adicionar foto</label>
					<input type="file" name="foto_usuario" id="foto_usuario">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Alterar</button>
				</div>
			</form>
		</section>
			
	</div>

@stop