@extends('errors.master')
@section('error_code')
    @if(\Auth::check())
        403
    @else
        404
    @endif
@stop
@section('error_title')
    @if(\Auth::check())
        Página no asignada
    @else
        Página no encontrada
    @endif
@stop
@section('error_message')
    @if(\Auth::check())
        <p>
            La página a la que deseas acceder puede que no esté asignada a tu usuario o que
            no tengas una página asignada actualmente.
        </p>
        <p>
            Favor de intentar lo siguiente:
        </p>
        <ul>
            <li>
                Si fuiste redirigido a esta página, contacta al administrador para
                hacerles conocer de este problema para que se te asigne la página
                correspondiente.
            </li>
            <li>
                Si escribiste la dirección de esta página manualmente, asegurate
                que esté escrita correctamente.
            </li>
            <li>
                Presiona el botón de retroceso para regresar a la página anterior.
            </li>
            <li>
                Cierra sesión en <a href="{{ url('/').'/logout' }}"><strong>esta liga</strong></a>
                y vuelve a intentarlo más tarde.
            </li>
        </ul>
    @else
        <p>
            La página que estás buscando puede haber sido removida, que se haya cambiado
            su nombre o está temporalmente fuera de servicio.
        </p>
        <p>
            Favor de intentar lo siguiente:
        </p>
        <ul>
            <li>
                Si escribiste la dirección de esta página manualmente, asegurate
                que esté escrita correctamente.
            </li>
            <li>
                Presiona el botón de retroceso para regresar a la página anterior.
            </li>
            <li>
                Si fuiste redirigido a esta página, contacta al administradpr para
                hacerles conocer de este problema.
            </li>
        </ul>
    @endif
@stop