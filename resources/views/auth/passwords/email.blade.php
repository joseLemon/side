@extends('layouts.cms.login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="login-box">
                @if(count($errors) != 0 || \Session::has('alertMessage'))
                    <div class="box-errors alert alert-danger fade in alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        @if ($errors->has('email'))
                            <div>{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                @endif
                <div class="box-header">Recupera tu contraseña</div>
                <div class="box-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Correo electrónico</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Enviar link de recuperación
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
