<!-- Herda do layout principal -->
@extends('layouts.app')
<!-- Inicia o conteudo que será escrito dentro do layout principal -->
@section('content')
    <section style="background-color: #F5F5DC;">
        <div class="row">
            <div class="col-md-12">
                <h2 for="" style="color:#8B4513; font-weight:700; margin-left: 75px;">Cadastro Marceneiro</h2>
            </div>
        </div>
                <form action="/cadastrarUsuario/formularioMarceneiro/cadastroMarceneiro" method="POST" style="margin-top:80px; margin-bottom: 100px; margin-left: 75px;">
                    <input type="hidden" name="_token" value="{{{csrf_token()}}}" />
                    <input type="hidden" name="tipo" value="2">
                    <div class="form-group">
                        <input style="width:300px; margin-right: 20px;"  type="text" name="nome" class="input" placeholder="Nome" required="">
                        <input style="width:300px;" type="email" name="email" class="input" placeholder="E-mail" required="true">
                    </div>
                    <div class="form-group">
                        <input style="width:300px; margin-right: 20px;"  type="text" name="cpf_cnpj" class="input" placeholder="CPF/CNPJ" required="true">
                    </div>
                    <div class="form-group">
                        <input style="width:300px; margin-right: 20px;"  type="password" name="senha" class="input" placeholder="Senha" required="true">
                        <input style="width:300px;" type="password" name="confirmarSenha" class="input" placeholder="Confirmar Senha"  required="true">
                    </div>
                    <div class="form-group">
                        <input style="width:300px; margin-right: 20px;"  type="text" name="cep" class="input" placeholder="CEP" required="true">
                    </div>
                    <div class="form-group">
                        <select style="width:300px; height:34px; margin-right: 20px;" name="uf" class="input" required="true">
                            <option>Selecione a UF</option>
                            <option>PE</option>
                        </select>
                        <select required="true" name="cidade">
                            <option>Selecione a Cidade</option>
                            <option>Recife</option>
                            <option>Olinda</option>
                            <option>Jaboatão dos Guararapes</option>
                            <option>Paulista</option>
                            <option>Teste</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="especialidade" placeholder="Especialidade" />
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea rows="6" name="descricao" placeholder="Digite uma breve descrição do seu perfil" style="position: relative; width: 50%;" required="true"></textarea> 
                            </div>
                        </div>      
                    <button class="btn btn-primary btn-lg" type="submit" style="margin-top: 30px;  padding-left: 50px; padding-right: 50px; background-color: #8B4513; border: none;">Salvar</button>
                </form>
    </section>
@stop