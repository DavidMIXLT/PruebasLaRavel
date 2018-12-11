@extends('plantilla')
@section('seccion')

<h1>Nosotros</h1>

  @foreach($equipo as $item)
    <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br/>
  @endforeach

  @if(!empty($nombre))
    @switch($nombre)
      @case($nombre == 'David')
        <h2>El nombre es {{$nombre}}</h2>
      @break
      @case($nombre == 'Juan')
        <h2>El nombre es {{$nombre}}</h2>
      @break
      @case($nombre == 'Jose')
        <h2>El nombre es {{$nombre}}</h2>
      @break
    @endswitch
  @endif
@endsection
