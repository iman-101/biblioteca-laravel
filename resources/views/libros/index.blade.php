@extends('layouts.app')
@section('content')
<table class="table">
    <tr>
        <th>IBAN</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Edition</th>
    </tr>
    @foreach ($libros as $libro)
     <tr>
        <td>{{$libro->isbn}}</td>
        <td>{{$libro->titulo}}</td>
        <td>{{$libro->autor}}</td>
        <td>{{$libro->ediciones}}</td>
     </tr>
    @endforeach
</table>
@endsection