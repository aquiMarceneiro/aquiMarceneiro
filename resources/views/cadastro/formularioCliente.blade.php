<!-- Herda do layout principal -->
@extends('layouts.app')
<!-- Inicia o conteudo que será escrito dentro do layout principal -->
@section('content') 
    <section id="profile" style="background-color: #F5F5DC;">
        <div class="row">
            <h2 for="" class="title2">Cadastro Cliente</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/cadastrarUsuario/formularioCliente/cadastroCliente" method="POST">
                    <input type="hidden" name="_token" value="{{{csrf_token()}}}" />
                    <input type="hidden" name="tipo" value="1">
                    <div class="form-group" style="position: relative; padding-left: 100px; padding-top: 150px;">
                        <input style="width:300px; margin-right: 20px;"  type="text" name="nome" class="input" placeholder="Nome" required="">
                        <input style="width:300px;" type="email" name="email" class="input" placeholder="E-mail" required="true">
                    </div>
                    <div class="form-group" style="position: relative; padding-left: 100px; padding-top: 15px;">
                        <input style="width:300px; margin-right: 20px;"  type="password" name="senha" class="input" placeholder="Senha" required="true">
                        <input style="width:300px;" type="password" name="confirmarSenha" class="input" placeholder="Confirmar Senha"  required="true">
                    </div>
                    <div class="form-group" style="position: relative; padding-left: 100px; padding-top: 15px;">
                        <select style="width:300px; height:34px; margin-right: 20px;" name="uf" class="input">
                            <option>Selecione a UF</option>
                            <option>PE</option>
                        </select>
                        <select style="width:300px; height:34px" name="cidade" class="input">
                            <option>Selecione a Cidade</option>
                            <option>Recife</option>
                            <option>Olinda</option>
                            <option>Jaboatão dos Guararapes</option>
                            <option>Paulista</option>
                            <option>Teste</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit" style="float: left; position: relative; margin-top: 50px;  margin-left: 100px; padding-left: 50px; padding-right: 50px; background-color: #8B4513; border: none;">Salvar</button>
                </form>
            </div>
        </div>
    </section>
@stop