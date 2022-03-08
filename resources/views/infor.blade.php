@extends('layouts.main')

@section('title', 'Informações')

@section('contet')

<H1>Página do informações sobre : @if ($busca != '') {{$busca}} @else nada @endif </H1>
<p>Teste</p>
@endsection