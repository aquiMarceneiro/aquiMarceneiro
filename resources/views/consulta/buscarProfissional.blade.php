@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<section id="hero">

				<div class="row">
					  <div class="col-md-6">
					    <div class="input-group" style="margin-bottom: 15px;">
					      <input type="text" class="form-control" placeholder="Digite uma Cidade">
						  <!-- <input type="text" class="form-control" placeholder="Digite um CEP">
						  <input type="text" class="form-control" placeholder="Digite um Bairro">
						  <input type="text" class="form-control" placeholder="Digite uma Especialidade"> -->
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button">Pesquisar</button>
					      </span>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
						<div class="col-md-12 col-sm-12">
							<table id="tabela-profissionais" class="table table-condensed" cellspacing="0" style="width: 100%;">
								<thead>
									<th>#</th>
									<th>Nome</th>
									<th>Descrição</th>
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
											{{$p->descricao}}
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
											<p><strong>Especialidade de Serviço: </strong>{{$p->email}}</p>
											<div id="map"></div>
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
								     /* Map options
								        var options = {
								        	zoom:14,
								        	center:{lat:latitude, lng:longitude}

								        }
								 //New map
								        var map = new google.maps.Map(document.getElementById('map'), options);
								      
								 //Marker
								 		var marker = new google.maps.Marker({
								 			position:{lat:latitude, lng:longitude},
								 			map: map,
								 		});
								 		*/

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
				</div>
			</div>
		</div>
	</section>
</div>

@endsection