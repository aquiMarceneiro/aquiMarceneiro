@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<section id="hero">	
					<form enctype="multipart/form-data" method="POST" action="/home/consultaProfissional" class="form-horizontal form_pesquisa">
                        {{ csrf_field() }}
						<div class="row">
							<div class="col-md-2">
								<input type="text" name="pesquisa_cep" id="pesquisa_cep" class="form-control" placeholder="Digite o CEP" data-mask="00000-000	" />	
							</div>
							<div class="col-md-3">
								<select name="pesquisa_especialidade" id="pesquisa_especialidade" class="form-control selectpicker">
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
								<div class="col-md-3 input-group">
									<input type="text" class="form-control" placeholder="Digite uma Cidade" id="pesquisa_cidade" name="pesquisa_cidade">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit">Pesquisar</button>
									</span>
								</div>
						</div>
					</form>

						@if(count($profissional) < 1)
							<div class="alet alert-danger" style="padding: 10px; width:50%; border-radius:5px;">
								<p><strong>Não encontramos nenhum resultado para sua pesquisa.</strong</p>
							</div>
						@else
							<table id="tabela-profissionais" class="table table-condensed" cellspacing="0" style="width: 100%;">
								<thead>
									<th>#</th>
									<th>Nome</th>
									<th>Especialidade</th>
									<th>UF/Cidade</th>
									<th>Informações</th>
								</thead>
							@foreach($profissional as $p)
								<tbody>
									<tr>
										<td>
											<div class="">
												<img src="/img/fotoupload/{{ $p->foto_usuario }}" class="" style="width: 70px; height: auto;" alt="{{$p->name}}" />
											</div>
										</td>
										<td>
											{{$p->name}}
										</td>
										<td>
											{{$p->especialidade}}
										</td>
										<td>
											{{$p->uf}} - {{$p->cidade}}
										</td>
										<td align="center">
											<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-mensagem"><span class="glyphicon glyphicon-plus"></button>
										</td>
									</tr>
								</tbody>
							
						</div>
					</div>

							<!-- Modal -->
							<div class="modal fade" id="modal-mensagem">
							    <div class="modal-dialog">
							         <div class="modal-content">
							             <div class="modal-header">
							                 <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
							                 <h4 class="modal-title">Informações do Profissional</h4>
							             </div>
							             <div class="modal-body">
							                <p><strong>Nome: </strong>{{$p->name}}</p>
											<p><strong>UF/Cidade: </strong>{{$p->uf}} - {{$p->cidade}}</p>
											<p><strong>CEP: </strong>{{$p->cep}}</p>
											<p><strong>Rua: </strong>{{$p->rua}}</p>
											<p><strong>Descrição: </strong>{{$p->descricao}}</p>
											<p><strong>Especialidade de Serviço: </strong>{{$p->especialidade}}</p>
											<p><strong>Email: </strong>{{$p->email}}</p>
											<a href="http://api.whatsapp.com/send?1=pt_BR&phone=55{{$p->numero_celular}}" class="btn btn-primary " target="_BLANK">Whatsapp <img src="{{asset('img/icones/whatsapp_icon.png')}}" class="icone" /></a>
											<div id="map" class="margemTop15"></div>
											<input type="hidden" value="{{$p->latitude}}" name="" id="latitude">
											<input type="hidden" value="{{$p->longitude}}" name="" id="longitude">
							             </div>
							             <div class="modal-footer">
							                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							            </div>
							         </div>
							     </div>
							</div>
						    <script type="text/javascript">

							      function initMap() {
							      	latitude = parseFloat(document.getElementById('latitude').value);
							      	longitude = parseFloat(document.getElementById('longitude').value);

									var uluru = {lat: latitude, lng: longitude};
							        var map = new google.maps.Map(document.getElementById('map'), {
							          zoom: 14,
							          center: uluru
							        });
							        var marker = new google.maps.Marker({
							          position: uluru,
							          map: map
							        });
								 	}
							</script>

							@endforeach 
						</table>
						@endif 
				</div>
			</div>
		</div>
	</section>
</div>
@endsection