@extends('layouts.main')

@section('title', 'Perfil')

@section('contet')

<H1>Página do Usuário: @if ($id != null)
    
 {{$id}}@endif </H1>

<p> Bem vindo @if ($id != null) {{$id}} @endif</p>


@endsection