@extends('layouts.cms.master')
@section('content')
    <div class="container-fluid" style="padding: 0;">
        <div class="row no-margin">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
                <div class="dash-object">
                    <div class="dash-head">
                        <h4 style="margin: 0;">Editar Usuario</h4>
                    </div>
                    <div class="dash-body row row-no-margin">
                        {!! Form::open(['route' => ['user.update',$user->user_id], 'id' => 'formUser', 'class' => 'form-horizontal']) !!}
                        <div class="form-group col-xs-12">
                            <label for="name" class="control-label">Nombre</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->user_name }}" required autofocus>
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="name" class="control-label">Apellido</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->user_last_name }}" required>
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="email" class="control-label">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="password" class="control-label">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="password-confirm" class="control-label">Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>

                        <div class="form-group col-xs-12">
                            <div class="col-xs-6" style="padding-left: 0;">
                                <label for="user_role" class="control-label">Rol del usuario</label>
                                <select name="user_role" id="user_role" class="form-control">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->user_role_id }}" @if($user->user_role_id == $role->user_role_id){{ 'selected' }}@endif>{{ $role->user_role_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-6" style="padding-right: 0;">
                                <label for="user_page" class="control-label">Página asignada</label>
                                <select name="user_page" id="user_page" class="form-control">
                                    <option value="null" @if($user->page_id == null){{ 'selected' }}@endif>-- Seleccionar --</option>
                                    @foreach($pages as $page)
                                        <option value="{{ $page->page_id }}" @if($user->page_id == $page->page_id){{ 'selected' }}@endif>{{ $page->page_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xs-12">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
