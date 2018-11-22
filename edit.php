

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadastro_nome"><?= $row['cadastro_nome']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="db.php" method="POST">
         <input type="hidden" class="form-control" id="edit_id" name="cadastro_id">
         <div class="form-group">
          <label for="recipientedit_nome" class="col-form-label">Nome:</label>
          <input type="text" class="form-control" name="cadastro_nome"
          id="cadastro_nome">
        </div>
        <div class="form-group">
          <label for="message-text" class="col-form-label">Email:</label>
          <input type="text" class="form-control" name="cadastro_email"
          id="cadastro_email">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label for="cadastro_cidade" class="input-group-text">Cidade</label>
          </div>
          <select name="cadastro_cidade" id="cadastro_cidade" class="custom-select">
            <option selected>Escolha a cidade...</option>
            <option value="<?php echo (isset($cidade) ? $cidade: 'Belo Horizonte'); ?>">
              Belo Horizonte
            </option>
            <option value="<?php echo (isset($cidade) ? $cidade: 'Esmeraldas'); ?>">
              Esmeraldas
            </option>
            <option value="<?php echo (isset($cidade) ? $cidade: 'Ibirite'); ?>">
              Ibirite
            </option>
            <option value="<?php echo (isset($cidade) ? $cidade: 'Mario Campos'); ?>">
              Mario Campos
            </option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-warning">Atualizar</button>
        </div>
      </form>
    </div>

  </div>
</div>
</div>


<script>

  $('#editModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipientedit_id = button.data('whateveredit_id')
  var recipientedit_nome = button.data('whateveredit_nome')
  var recipientedit_email = button.data('whateveredit_email')
  var recipientedit_cidade = button.data('whateveredit_cidade')
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Editando usuário ........ ' + recipientedit_nome)
  modal.find('#edit_id').val(recipientedit_id)
  modal.find('#cadastro_nome').val(recipientedit_nome)
  modal.find('#cadastro_email').val(recipientedit_email)
  modal.find('#cadastro_cidade').val(recipientedit_cidade)
})
</script>