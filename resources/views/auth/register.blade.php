@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs pull-right"  id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="particulares-tab" data-toggle="tab" href="#particulares" role="tab" aria-controls="particulares" aria-selected="true">Particulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="turista-tab" data-toggle="tab" href="#turista" role="tab" aria-controls="turista" aria-selected="false">Turistas (Tax Free)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="empresas-tab" data-toggle="tab" href="#empresas" role="tab" aria-controls="empresas" aria-selected="false">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dc-tab" data-toggle="tab" href="#dc" role="tab" aria-controls="dc" aria-selected="false">Distribuidor Comercio</a>
                    </li>
                </ul>
    </div>

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="particulares" role="tabpanel" aria-labelledby="particulares-tab">
                        
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <input type="hidden" value="particular" name="tipo">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="number" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="telefono" required>
                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="documento" class="col-md-4 col-form-label text-md-right">Documento DNI/NIE/Pasaporte/CI</label>

                                <div class="col-md-6">
                                    <input id="documento" type="number" class="form-control{{ $errors->has('documento') ? ' is-invalid' : '' }}" name="documento" required>
                                    @if ($errors->has('documento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('documento') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pais" class="col-md-4 col-form-label text-md-right">Pais</label>

                                <div class="col-md-6">
                                    <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" required>
                                    @if ($errors->has('pais'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" required>
                                    @if ($errors->has('ciudad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ciudad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codigo" class="col-md-4 col-form-label text-md-right">Código Postal</label>

                                <div class="col-md-6">
                                    <input id="codigo" type="number" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" required>
                                    @if ($errors->has('codigo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('codigo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required>
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        </div>

                        
                        
                        <div class="tab-pane fade" id="turista" role="tabpanel" aria-labelledby="turista-tab">
                        
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <input type="hidden" value="turista" name="tipo">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="number" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="telefono" required>
                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="documento" class="col-md-4 col-form-label text-md-right">Documento DNI/NIE/Pasaporte/CI</label>

                                <div class="col-md-6">
                                    <input id="documento" type="number" class="form-control{{ $errors->has('documento') ? ' is-invalid' : '' }}" name="documento" required>
                                    @if ($errors->has('documento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('documento') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pais" class="col-md-4 col-form-label text-md-right">Pais</label>

                                <div class="col-md-6">
                                    <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" required>
                                    @if ($errors->has('pais'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" required>
                                    @if ($errors->has('ciudad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ciudad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codigo" class="col-md-4 col-form-label text-md-right">Código Postal</label>

                                <div class="col-md-6">
                                    <input id="codigo" type="number" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" required>
                                    @if ($errors->has('codigo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('codigo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required>
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        </div>
  <div class="tab-pane fade" id="empresas" role="tabpanel" aria-labelledby="empresas-tab">
    
  <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <input type="hidden" value="empresa" name="tipo">

                            <h3>Datos de la Empresa</h3>
                            <div class="form-group row">
                                <label for="nombre_emp" class="col-md-4 col-form-label text-md-right">Nombre de la Empresa</label>

                                <div class="col-md-6">
                                    <input id="nombre_emp" type="text" class="form-control{{ $errors->has('nombre_emp') ? ' is-invalid' : '' }}" name="nombre_emp" value="{{ old('nombre_emp') }}" required autofocus>

                                    @if ($errors->has('nombre_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre_com_emp" class="col-md-4 col-form-label text-md-right">Nombre Comercial de la Empresa</label>

                                <div class="col-md-6">
                                    <input id="nombre_com_emp" type="text" class="form-control{{ $errors->has('nombre_com_emp') ? ' is-invalid' : '' }}" name="nombre_com_emp" value="{{ old('nombre_com_emp') }}" required autofocus>

                                    @if ($errors->has('nombre_com_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre_com_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cif_nif" class="col-md-4 col-form-label text-md-right">CIF / NIF</label>

                                <div class="col-md-6">
                                    <input id="cif_nif" type="text" class="form-control{{ $errors->has('cif_nif') ? ' is-invalid' : '' }}" name="cif_nif" value="{{ old('cif_nif') }}" required autofocus>

                                    @if ($errors->has('cif_nif'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cif_nif') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="correo_emp" class="col-md-4 col-form-label text-md-right">Correo Electrónico</label>

                                <div class="col-md-6">
                                    <input id="correo_emp" type="email" class="form-control{{ $errors->has('correo_emp') ? ' is-invalid' : '' }}" name="correo_emp" value="{{ old('correo_emp') }}" required autofocus>

                                    @if ($errors->has('correo_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('correo_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="telefono_emp" class="col-md-4 col-form-label text-md-right">Número de Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono_emp" type="number" class="form-control{{ $errors->has('telefono_emp') ? ' is-invalid' : '' }}" name="telefono_emp" value="{{ old('telefono_emp') }}" required autofocus>

                                    @if ($errors->has('telefono_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pais_emp" class="col-md-4 col-form-label text-md-right">Pais</label>

                                <div class="col-md-6">
                                    <input id="pais_emp" type="text" class="form-control{{ $errors->has('pais_emp') ? ' is-invalid' : '' }}" name="pais_emp" required>
                                    @if ($errors->has('pais_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pais_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad_emp" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input id="ciudad_emp" type="text" class="form-control{{ $errors->has('ciudad_emp') ? ' is-invalid' : '' }}" name="ciudad_emp" required>
                                    @if ($errors->has('ciudad_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ciudad_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codigo_emp" class="col-md-4 col-form-label text-md-right">Código Postal</label>

                                <div class="col-md-6">
                                    <input id="codigo_emp" type="number" class="form-control{{ $errors->has('codigo_emp') ? ' is-invalid' : '' }}" name="codigo_emp" required>
                                    @if ($errors->has('codigo_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('codigo_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion_emp" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion_emp" type="text" class="form-control{{ $errors->has('direccion_emp') ? ' is-invalid' : '' }}" name="direccion_emp" required>
                                    @if ($errors->has('direccion_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <hr>
                            <h3>Contacto</h3>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} (Inicio de Sesión)</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="number" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="telefono" required>
                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="documento" class="col-md-4 col-form-label text-md-right">Documento DNI/NIE/Pasaporte/CI</label>

                                <div class="col-md-6">
                                    <input id="documento" type="number" class="form-control{{ $errors->has('documento') ? ' is-invalid' : '' }}" name="documento" required>
                                    @if ($errors->has('documento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('documento') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pais" class="col-md-4 col-form-label text-md-right">Pais</label>

                                <div class="col-md-6">
                                    <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" required>
                                    @if ($errors->has('pais'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" required>
                                    @if ($errors->has('ciudad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ciudad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codigo" class="col-md-4 col-form-label text-md-right">Código Postal</label>

                                <div class="col-md-6">
                                    <input id="codigo" type="number" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" required>
                                    @if ($errors->has('codigo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('codigo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required>
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
  
  </div>
  <div class="tab-pane fade" id="dc" role="tabpanel" aria-labelledby="dc-tab">
  
  <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <input type="hidden" value="distribuidor comercial" name="tipo">

                            <h3>Datos de la Empresa</h3>
                            <div class="form-group row">
                                <label for="nombre_emp" class="col-md-4 col-form-label text-md-right">Nombre de la Empresa</label>

                                <div class="col-md-6">
                                    <input id="nombre_emp" type="text" class="form-control{{ $errors->has('nombre_emp') ? ' is-invalid' : '' }}" name="nombre_emp" value="{{ old('nombre_emp') }}" required autofocus>

                                    @if ($errors->has('nombre_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre_com_emp" class="col-md-4 col-form-label text-md-right">Nombre Comercial de la Empresa</label>

                                <div class="col-md-6">
                                    <input id="nombre_com_emp" type="text" class="form-control{{ $errors->has('nombre_com_emp') ? ' is-invalid' : '' }}" name="nombre_com_emp" value="{{ old('nombre_com_emp') }}" required autofocus>

                                    @if ($errors->has('nombre_com_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre_com_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cif_nif" class="col-md-4 col-form-label text-md-right">CIF / NIF</label>

                                <div class="col-md-6">
                                    <input id="cif_nif" type="text" class="form-control{{ $errors->has('cif_nif') ? ' is-invalid' : '' }}" name="cif_nif" value="{{ old('cif_nif') }}" required autofocus>

                                    @if ($errors->has('cif_nif'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cif_nif') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="correo_emp" class="col-md-4 col-form-label text-md-right">Correo Electrónico</label>

                                <div class="col-md-6">
                                    <input id="correo_emp" type="email" class="form-control{{ $errors->has('correo_emp') ? ' is-invalid' : '' }}" name="correo_emp" value="{{ old('correo_emp') }}" required autofocus>

                                    @if ($errors->has('correo_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('correo_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="telefono_emp" class="col-md-4 col-form-label text-md-right">Número de Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono_emp" type="number" class="form-control{{ $errors->has('telefono_emp') ? ' is-invalid' : '' }}" name="telefono_emp" value="{{ old('telefono_emp') }}" required autofocus>

                                    @if ($errors->has('telefono_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pais_emp" class="col-md-4 col-form-label text-md-right">Pais</label>

                                <div class="col-md-6">
                                    <input id="pais_emp" type="text" class="form-control{{ $errors->has('pais_emp') ? ' is-invalid' : '' }}" name="pais_emp" required>
                                    @if ($errors->has('pais_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pais_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad_emp" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input id="ciudad_emp" type="text" class="form-control{{ $errors->has('ciudad_emp') ? ' is-invalid' : '' }}" name="ciudad_emp" required>
                                    @if ($errors->has('ciudad_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ciudad_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codigo_emp" class="col-md-4 col-form-label text-md-right">Código Postal</label>

                                <div class="col-md-6">
                                    <input id="codigo_emp" type="number" class="form-control{{ $errors->has('codigo_emp') ? ' is-invalid' : '' }}" name="codigo_emp" required>
                                    @if ($errors->has('codigo_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('codigo_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion_emp" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion_emp" type="text" class="form-control{{ $errors->has('direccion_emp') ? ' is-invalid' : '' }}" name="direccion_emp" required>
                                    @if ($errors->has('direccion_emp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion_emp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <hr>
                            <h3>Contacto</h3>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} (Inicio de Sesión)</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="number" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="telefono" required>
                                    @if ($errors->has('telefono'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="documento" class="col-md-4 col-form-label text-md-right">Documento DNI/NIE/Pasaporte/CI</label>

                                <div class="col-md-6">
                                    <input id="documento" type="number" class="form-control{{ $errors->has('documento') ? ' is-invalid' : '' }}" name="documento" required>
                                    @if ($errors->has('documento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('documento') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pais" class="col-md-4 col-form-label text-md-right">Pais</label>

                                <div class="col-md-6">
                                    <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" required>
                                    @if ($errors->has('pais'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>

                                <div class="col-md-6">
                                    <input id="ciudad" type="text" class="form-control{{ $errors->has('ciudad') ? ' is-invalid' : '' }}" name="ciudad" required>
                                    @if ($errors->has('ciudad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ciudad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="codigo" class="col-md-4 col-form-label text-md-right">Código Postal</label>

                                <div class="col-md-6">
                                    <input id="codigo" type="number" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" required>
                                    @if ($errors->has('codigo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('codigo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required>
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
  
  </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
