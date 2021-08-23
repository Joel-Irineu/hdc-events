<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>

</head>
<body class="antialiased">
    <h1>Index</h1>

    <img src="/img/banner.jpg" alt="banner" srcset="">

    @if (10 > 5)
        <p>A condição é true</p>
    @endif

    {{-- <p>{{$nome}}</p> --}}

    @if ($nome == 'pedro')
        <p>o nome é pedro</p>
    @else
        <p>o nome é {{$nome}}, ele tem {{$idade}} anos e ele trabalha como {{$profissao}}</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
        @if ($i == 2)
            <p>o i é 2</p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>{{$loop->index}} - {{$nome}}</p>
    @endforeach

    @php
        $name = 'joel';
        echo $name;
    @endphp

    <!-- Comentario HTML -->
    {{-- Comentario blade --}}
</body>
</html>
