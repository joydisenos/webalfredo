@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cálculo de Importe</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <div class="form-group row">
					    <label for="cantidad" class="col-sm-2 col-form-label">Importe</label>
					    <div class="col-sm-10">
					      <input type="number" class="form-control" id="cantidad" placeholder="Cantidad (Euros)">
					      <table class="table">
					      	@foreach($impuestos as $impuesto)
					      	<tr>
					      		<td>{{$impuesto->nombre}}</td>
					      		<td><span class="impuesto" data-imp="{{$impuesto->porcentaje}}">0</span></td>
					      	</tr>
					      	@endforeach
					      	<tr>
					      		<td><strong>Total</strong></td>
					      		<td><span class="total">0</span></td>
					      	</tr>
					      </table>
					    </div>
					  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
	$(document).ready(function(){
		$('#cantidad').keyup(function(){
			cantidad = $(this).val();
			total = 0;
			$('.impuesto').each(function(){
				impuesto = $(this).attr('data-imp');
				subtotal = (parseFloat(cantidad) * parseFloat(impuesto)) / 100;
				total += subtotal;
				$(this).text(subtotal);
			});
				totalImpuesto = parseFloat(cantidad) + parseFloat(total);
			$('.total').text(totalImpuesto);
		});
	});
</script>
@endsection
