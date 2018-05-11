@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro</div>

                <div class="panel-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}" class="form-horizontal">
                        {{ csrf_field() }}

                         <div class="form-group">
                            <label class="col-md-4 control-label">Você é ?</label>

                            <div class="col-md-6">
                                <select class="form-control" name="tipo" id="tipoUsuario" onclick="selecionarTipoUsuario()">
                                    <option selected="ng-transclude" selected="true" value="default">Selecione</option>
                                    <option value="1">Usuário</option>
                                    <option value="2">Profissional</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label" id="labelName">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" id="labelEmail">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="numero_celular" class="col-md-4 control-label" id="labelTelefone">Telefone</label>

                            <div class="col-md-6">
                                <input id="numero_celular" type="text" class="form-control" name="numero_celular" value="{{ old('numero_celular') }}" data-mask="(00)00000-0000" placeholder="(00)00000-0000" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" id="labelPassword">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label" id="labelPassConfirm">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="cpf_cnpj" class="col-md-4 control-label" id="labelCpfCnpj">CPF/CNPJ</label>

                            <div class="col-md-6">
                                <input id="cpf_cnpj" type="text" class="form-control" name="cpf_cnpj" data-mask="000.000.000-00 " required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="cep" class="col-md-4 control-label" id="labelCEP">CEP</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="cep" name="cep" value="" data-mask="00000-000" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rua" class="col-md-4 control-label" id="labelRua">Rua</label>

                            <div class="col-md-6">
                                <input id="rua" type="text" class="form-control" name="rua" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bairro" class="col-md-4 control-label" id="labelBairro">Bairro</label>

                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control" name="bairro" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cidade" class="col-md-4 control-label" id="labelCidade">Cidade</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control" name="cidade" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="uf" class="col-md-4 control-label" id="labelUF">UF</label>

                            <div class="col-md-6">
                                <input id="uf" type="text" class="form-control" name="uf" required>
                            </div>
                        </div>

                        <div class="form-group" id="localizacaoGeografica">
                            <label id="demo" class="col-md-4 control-label">Clique no botão para obter sua localização geográfica</label>
                            <div class="col-md-6">
                                <a id="btnLocation" onclick="getLocation()" class="form-control btn btn-primary">Clique aqui</a>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <div id="mapholder"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="especialidade" class="col-md-4 control-label" id="labelEspcialidade">Especialidade</label>

                            <div class="col-md-6">
                            <select name="especialidade[]" id="especialidade" class="form-control selectpicker" multiple>
                                <option value="Montador de móveis">Montador de móveis</option>
                                <option value="Reforma de móveis">Reforma de móveis</option>
                                <option value="Restauração de móveis">Restauração de móveis</option>
                                <option value="Móveis sob medida">Móveis sob medida</option>
                                <option value="Móveis rústicos">Móveis rústicos</option>
                                <option value="Projetos de móveis">Projetos de móveis</option>
                                <option value="Projeto de interiores">Projeto de interiores</option>
                                <option value="Outros">Outros</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descricao" class="col-md-4 control-label" id="labelDescricao">Descrição</label>

                            <div class="col-md-6">

                                 <textarea rows="6" id="descricao" name="descricao" placeholder="Digite uma breve descrição do seu perfil" class="form-control" style="resize: none;"></textarea> 
                            </div>
                        </div>
                        <input type="hidden" id="latitude" name="lat" class="form-control">
                        <input type="hidden" id="longitude" name="lon" class="form-control">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="cadastrar">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
   defaultPage();
})
    function defaultPage(){
         //Inputs
        $('#name').hide();
        $('#email').hide();
        $('#numero_celular').hide();
        $('#password').hide();
        $('#password-confirm').hide();
        $('#cpf_cnpj').hide();
        $('#uf').hide();
        $('#cep').hide();
        $('#cidade').hide();
        $('#rua').hide();
        $('#bairro').hide();
        $('#especialidade').hide();
        $('#descricao').hide();
        $('#cadastrar').hide();

        //Labels
        $('#labelName').hide();
        $('#labelEmail').hide();
        $('#labelPassword').hide();
        $('#labelPassConfirm').hide();
        $('#labelCpfCnpj').hide();
        $('#labelUF').hide();
        $('#labelCEP').hide();
        $('#labelCidade').hide();
        $('#labelBairro').hide();
        $('#labelRua').hide();
        $('#labelCidade').hide();
        $('#labelEspcialidade').hide();
        $('#labelDescricao').hide();
        $('#labelTelefone').hide();
        $('#btnLocation').hide();
        $('#demo').hide();


        $('#tipoUsuario option[value=default]').prop('selected', true);
    }

    function usuarioComum(){
        //Inputs
        $('#name').show();
        $('#email').show();
        $('#password').show();
        $('#password-confirm').show();
        $('#cpf_cnpj').show();
        $('#uf').show();
        $('#cep').show();
        $('#cidade').show();
        $('#rua').show();
        $('#bairro').show();
        $('#numero_celular').show();
        
        $('#localizacaoGeografica').hide();
        $('#especialidade').hide();
        $('#descricao').hide();

        $('#cadastrar').show();

        //Labels
        $('#labelName').show();
        $('#labelEmail').show();
        $('#labelPassword').show();
        $('#labelPassConfirm').show();
        $('#labelCpfCnpj').show();
        $('#labelUF').show();
        $('#labelCEP').show();
        $('#labelCidade').show();
        $('#labelRua').show();
        $('#labelBairro').show();
        $('#labelTelefone').show();

        $('#labelEspcialidade').hide();
        $('#labelDescricao').hide();

    }

    function usuarioProfissional(){
        $('#labelEspcialidade').show();
        $('#labelDescricao').show();

        $('#localizacaoGeografica').show();
        $('#especialidade').show();
        $('#descricao').show();
        $('#btnLocation').show();
        $('#demo').show();

    }

    function selecionarTipoUsuario(){

    //captura o tipo de usuário selecionado no select input    
        var tipoUsuario = $('#tipoUsuario').val();

        if (tipoUsuario == 1){

            usuarioComum();

        }else if(tipoUsuario == 2){

            usuarioComum();
            usuarioProfissional();

        } else if(tipoUsuario == 'default'){

            defaultPage();

        }
    }


    //Buscar endereço atrvés do CEP

   $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

// Pegando latitude e longitude com google maps.
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocalização não é suportada nesse browser.";}
  }
 
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;

  latlon=new google.maps.LatLng(lat, lon);
  mapholder=document.getElementById('mapholder');
  mapholder.style.height='250px';
  mapholder.style.width='100%';

  //Atribuindo valores aos campos hidden para armazenar no banco de dados.
  $("#latitude").val(lat);
  $("#longitude").val(lon);

 
  var myOptions={
  center:latlon,zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"Você está Aqui!"});
  }
 
function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Usuário rejeitou a solicitação de Geolocalização."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Localização indisponível."
      break;
    case error.TIMEOUT:
      x.innerHTML="O tempo da requisição expirou."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Algum erro desconhecido aconteceu."
      break;
    }
  }
</script>
@endsection
