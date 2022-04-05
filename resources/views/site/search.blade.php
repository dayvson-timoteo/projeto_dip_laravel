@extends('site.layouts.base')

  @section('titulo', 'Pesquisa')
  
  @section('conteudo')
  <div class="informacao-pagina">
      <div class="contato-principal">
        <form method="POST" action="{{ route('site.search') }}">
          @csrf
          <input type="search" name="pesquisa" placeholder="Digite o número da publicação" class="borda-preta">
          <button type="submit" class="borda-preta" >pesquisar</button>
        </form>
      <div class="resultado">
        <table class="table caption-top">
          <caption></caption>
          <thead>
            <tr>
              <th scope="col">Tipo de Publicação</th>
              <th scope="col">Nº</th>
              <th scope="col">Unidade</th>
              <th scope="col">Data da Publicação</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cadastros as $indice=>$cadastro)
            <tr>
              <th scope="row">{{$cadastro['tipo']}}</th>
              <td>{{$cadastro['numero']}}</td>
              <td>{{$cadastro['unidade']}}</td>
              <td>{{$cadastro['data']}}</td>
              <tr>
                @php
                  $msg = $cadastro['conteudo'];
                  $msg = explode(' ', $msg);
                  $msg = array_slice($msg, 0, 101);
                  $msg = $msg = implode(" ", $msg) ;
                @endphp
                <td colspan="4">{{$msg}}</td>
              </tr>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
  </div>
</div>

@endsection