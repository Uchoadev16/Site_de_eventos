<!DOCTYPE html>
<html lang="BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <h1>Algum tipo</h1>
        @if(10>5)
            <p>a condição é true</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "pedro")
            <p>nome é igual a pedro</p>
        @elseif($nome == "matheus")
            <p>nome é igual {{$nome}} e tem idade igual a {{$idade}} anos</p>
        @else
            <p>nome é pedro</p>
        @endif
        
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>

            @if($i == 2)
                <p>o i é 2</p>
            @endif
        @endfor

        @foreach ($arr as $arrs)
            <p>{{$loop->index}}</p>
            <p>p{{$arrs}}</p>
            
        @endforeach
        @php
            $name = "joao";
            echo $name;
        @endphp

        <!--comentario do html-->
        {{-- este é do blade --}}
    </body>
</html>
