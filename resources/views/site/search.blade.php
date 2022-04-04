@extends('site.layouts.base')

  @section('titulo')
  Pesquisa
  @endsection

  @section('conteudo')
  <div class="informacao-pagina">
      <div class="contato-principal">
        <form method="GET">
          <input type="search" placeholder="Digite o número da publicação" class="borda-preta">
        </form>
      </div>
  </div>
</div>

@endsection