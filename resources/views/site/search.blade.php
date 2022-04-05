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
          <caption>List of users</caption>
          <thead>
            <tr>
              <th scope="col">Tipo de Publicação</th>
              <th scope="col">Nº</th>
              <th scope="col">Unidade</th>
              <th scope="col">Data da Publicação</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <tr>
                <td colspan="4">DeacordocomoCoronelCamelFaraqueelapossaapresentarvalorpúblicoparaasociedade.OplanejamentoestratégiconaPMPEjáseencontranumestágioadiantado,jáforamrealizadasasprimeirasaçõeseéperceptveloensssssssssssssssssssssssssgajamento,<br>oessssssssssssssssssssssssssssssssssssssssssssssssssssssssssssdddddddddddddddddddddddddddddddddddddddddddddddnvolvimentoededicaçãodospoliciaismilitaresqueseencontramemposiçõesquesãodecisivasparaessaatvidade-,pontuouele.</td>
              </tr>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
  </div>
</div>

@endsection