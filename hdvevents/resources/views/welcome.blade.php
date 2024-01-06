@extends('layouts.main')

@section('title', 'HDV Events')

@section('content')

        <h1> Algum título </h1>
        <img src ="/img/banner.jpg" alt="banner do projeto">
        @if (10 >5)
            <p> A condição é true </p>
        @endif

            <p>{{$nome}}</p>
            @if ($nome == "Carlos")
            <p> O nome é Carlos </p>
            @elseif ($nome == "Kelvin")
            <p>O nome é {{$nome}} e ele tem {{$idade}} anos</p>
            @else
            <p> O nome não é Carlos</p>                
            @endif

            @for ( $i = 0;$i<count($arr);$i++)
            <p>{{$arr[$i]}} - {{$i}} </p>
            @if ($i == 2)
            <p> O i é 2</p>                
            @endif
            @endfor

            @foreach ($nomes as $nome )
                <p>{{$loop -> index}}</p>
                <p>{{$nome}}</p>

            @endforeach
        
        @php    
            $name = "Lara";
            echo $name;
        @endphp

@endsection