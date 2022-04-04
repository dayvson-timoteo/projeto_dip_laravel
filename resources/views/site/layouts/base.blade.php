<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/base-style.css')}}">
  <title>@yield('titulo')</title>
</head>
<body>
  <div class="topo">

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
          <li><a href="{{route('site.home')}}">Home</a></li>
          <li><a href="{{route('app.cadastro')}}">Cadastro</a></li>
          <li><a href="{{route('site.login')}}">Login</a></li>
          <li><a href="{{route('site.search')}}">Search</a></li>
          <li><a href="{{route('site.sobrenos')}}">Sobre Nós</a></li>
        </ul>
    </div>
  </div>
  <div class="conteudo-pagina">
    <div class="titulo-pagina">
      <h1>PMPE - DIP</h1>
    </div>

  @yield('conteudo')
  
  <div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{ asset('img/facebook.png') }}">
        <img src="{{ asset('img/linkedin.png') }}">
        <img src="{{ asset('img/youtube.png') }}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(81) 97117-4769</span>
        <br>
        <span>dayvson.timoteo@pm.pe.gov.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="{{ asset('img/mapa.png') }}">
    </div>
</div>
</body>
</html>