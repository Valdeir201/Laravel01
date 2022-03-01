    @extends('layouts.main')

    @section('title','Telecentro')

    @section('contet')

    <H1>Helo World</H1>
    <img src="/img/volta.png" width="300px" alt="Volta as aulas">
    <br><br><br>

    @if($nome == "val")
        <p>nada</p>
    @else 
        <P>Seu nome é {{$nome}},  e vc tem {{$idade}} anos</P>
    @endif
    
    @for($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
    
        @if ($i == 3)
            <p>O i acima é 3</p>
            
        @endif

    @endfor
    @php
        $nome = "Maria";
        echo $nome;
    @endphp

            @for($i = 0; $i <= 10; $i++)
                
                <p> 7 X {{$i}} = {{$i*7}}</p> 
            @endfor

    @foreach ( $nomes as $nome2)

        <p> {{$loop->index}} - {{ $nome2}}</p>
        
    @endforeach

    <!-- Comentário   -->
    {{-- Comentário com blade--}}
  
    @endsection