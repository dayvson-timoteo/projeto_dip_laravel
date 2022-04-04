@extends('site.layouts.base')

  @section('conteudo')
  <div class="informacao-pagina">
      <div class="contato-principal">
        <form method="GET">
          <label for="inputText" class="form-label" >Tipo de Publicação </label>  
          <select class="borda-preta">
            <option value="">Boletim Geral</option>
            <option value="">Boletim Interno</option>
            <option value="">Notas em Geral</option>
            <option value="">Portaria</option>
            <option value="">SUNOR</option>
            <option value="">Suplemento de Pessoal</option>
          </select>
          <br>
          <label for="inputText2" class="form-label" >Número da Publicação </label>
          <input type="text" placeholder="Digite o número da publicação" class="borda-preta">
          <br>
          <label for="inputText3" class="form-label" >Unidade</label>
          <input type="text" placeholder="Digite o nome abreviado de sua unidade" class="borda-preta">
          <br>
          <label for="inputText3" class="form-label" >Data da Publicação</label>
          <input type="date" placeholder="Nome" class="borda-preta">
          <br>
          <label for="FormControlTextarea1" class="form-label">Conteúdo do Documento</label>
          <textarea class="borda-preta" placeholder="Cole o conteúdo do documento. Não deve conter imagens!"></textarea>
          <br>
          <button type="submit" class="borda-preta">ENVIAR</button>
        </form>
      </div>
  </div>
</div>

@endsection
