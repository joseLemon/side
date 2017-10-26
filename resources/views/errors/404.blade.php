@extends('errors.master')
@section('error_code')
    404
@stop
@section('error_title')
    Página no encontrada
@stop
@section('error_message')
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
            Si fuiste redirigido a esta página, contacta al administrador para
            hacerles conocer de este problema.
        </li>
    </ul>
@stop