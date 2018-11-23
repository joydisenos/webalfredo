@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Calculadora de Conversiones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <div class="form-group row mb-4">
                       
                            <div class="col-sm-4">
                                <img src="{{ asset('img/euro.png') }}" width="30px" alt="">
                            <label for="euro">Euro</label>
                        </div>
                        <div class="col">
                            <input type="number" id="euro" class="form-control">
                        </div>
                      
                    </div>

                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/pound.png') }}" width="30px" alt="">
                            Libra: <span id="libra">£0</span>
                        </div>

                        <div class="col">
                            <img src="{{ asset('img/dollar.png') }}" width="30px" alt="">
                            Dollar: <span id="dolar">$0</span>
                        </div>

                        <div class="col">
                            <img src="{{ asset('img/bitcoin.png') }}" width="30px" alt="">
                            Bitcoin: <span id="btc">0</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
           

            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active">
               Registrado como: {{title_case(Auth::user()->tipo)}}
              </a>
              <a href="{{ route('pago') }}" class="list-group-item list-group-item-action">Cálculo de Importe</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        // Valores de conversiones
        btc = 0.00027;
        libra = 0.89;
        dolar = 1.14;

        $('#euro').keyup(function(){

            libraTotal = parseFloat($(this).val()) * parseFloat(libra);
            dolarTotal = parseFloat($(this).val()) * parseFloat(dolar);
            btcTotal = parseFloat($(this).val()) * parseFloat(btc);

            $('#libra').text('£ '+libraTotal);
            $('#dolar').text('$ '+dolarTotal);
            $('#btc').text(btcTotal.toFixed(8));

        });
    });
</script>
@endsection

