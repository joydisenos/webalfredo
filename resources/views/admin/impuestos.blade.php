@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Impuestos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					  Nuevo Impuesto
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Nuevo impuesto</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
								<form action=" {{ route('crearimpuesto') }} " method="post">
									@csrf
					      <div class="modal-body">

					      		<div class="form-group">
								    <label for="tipo">Tipo de registro</label>
								    <select class="form-control" id="tipo" name="tipo">
								      <option value="particular">Particular</option>
								      <option value="turista">Turista</option>
								      <option value="empresa">Empresa</option>
								      <option value="distribuidor comercial">Distribuidor Comercial</option>
								    </select>
								</div>

				       			<div class="form-group">
								    <label for="exampleInputEmail1">Nombre</label>
								    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" placeholder="Nombre">
								</div>

								<div class="form-group">
								    <label for="exampleInputEmail1">Forma Abreviada</label>
								    <input type="text" class="form-control" id="abreviado" aria-describedby="abreviado" name="abreviado" placeholder="Abreviado">
								</div>

								<div class="form-group">
								    <label for="exampleInputEmail1">Porcentaje (%)</label>
								    <input type="number" min="0" class="form-control" id="porcentaje" name="porcentaje" aria-describedby="porcentaje" placeholder="(%)">
								</div>
					      </div>

					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					        <button type="submit" class="btn btn-primary">Agregar</button>
					      </div>

					      		</form>

					    </div>
					  </div>
					</div>

                    <div class="table-responsive">
                    	<table class="table table-hover">
                    		<thead>
                    			<th>
                    				Tipo de Usuario
                    			</th>
                    			<th>
                    				Estatus
                    			</th>
                    			<th>
                    				Porcentaje
                    			</th>
                    			<th>
                    				Nombre
                    			</th>
                    			<th>
                    				Abreviado
                    			</th>
                    			<th>
                    				Acciones
                    			</th>
                    		</thead>

                    		<tbody>
                    			@foreach($impuestos as $impuesto)
                    			<tr>
                    				<td>
                    					{{ $impuesto->tipo }}
                    				</td>
                    				<td>
                    					{{  $impuesto->estatus }}
                    				</td>
                    				<td>
                    					{{ $impuesto->porcentaje }}
                    				</td>
                    				<td>
                    					{{ $impuesto->nombre }}
                    				</td>
                    				<td>
                    					{{ $impuesto->abreviado }}
                    				</td>
                    				<td>
                    					<a href="#" class="btn btn-primary">Editar</a>
	                    				<a href="#" class="btn btn-danger">Eliminar</a>
                    				</td>
                    			</tr>
                    			@endforeach
                    		</tbody>
                    	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
