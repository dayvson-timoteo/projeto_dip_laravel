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
      </div>
  </div>
</div>

@endsection