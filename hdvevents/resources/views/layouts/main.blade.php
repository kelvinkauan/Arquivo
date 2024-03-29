<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>    @yield('title')
</title>

<!--Fonte do Google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

<!--CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!--CSS da aplicação -->
        <link 
        rel="stylesheet" href="/css/style.css">



        <script src="/js/script.js"> </script>

    </head>
    <body >
          <header>
          <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
          <a hre="/" class="navbar-brand">
          <img src="/img/hdcevents_logo.svg" alt="HDC eventos">
          </a>
          <ul class="navbar-nav">
          <li class="nav-item">
              <a href="/" class="nav-link">Eventos</a>
          </li>
           <li class="nav-item">
              <a href="/" class="nav-link">Criar Eventos</a>
          </li>
           <li class="nav-item">
              <a href="/" class="nav-link">Entrar</a>
          </li>
           <li class="nav-item">
              <a href="/" class="nav-link">Cadastrar</a>
          </li>

          
          
          
          </header>
    @yield('content')
      <footer>
        <p>HDV Events &copy; 2024</p>
      </footer>

    </body>
</html>
