@extends('plantilla')

@section('seccion')
<h1>Este es el equipo de trabajo</h1>

@foreach($equipo as $item)
<a href="#"> {{@item}} </a>
@endforeach

@endsection