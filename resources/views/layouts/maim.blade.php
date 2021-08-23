<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="/img/hdcevents_logo.svg" />
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>

    <!-- Fonte do google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body class="antialiased">

    @yield('content')

    <footer>
        <p>HDC Events &copy; 2021</p>
    </footer>
</body>
</html>
