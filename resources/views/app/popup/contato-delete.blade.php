<!--Confirmação Deletar-usuário-->


<div class="modal fade" id="deletecontato-{{$cnt->idcontatos, $cnt->nome}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">


        Deseja apagar o Contato: "{{$cnt->nome}}"?. Esta ação não pode ser desfeita

      </div>

    <form>
      <div class="modal-footer">


        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-danger" type="button" onclick="destroy({{$cnt->idcontatos}})">Excluir</button>


      </div>
</form>
    </div>
  </div>

</div>
