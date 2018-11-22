 <form action="db.php" method="POST">
  <!-- Modal -->
  <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="cadastro_id" id="cadastro_id">

          <div class="form-group">
            <label for="cadastro_nome">Nome</label>
            <input type="text" class="form-control" name="cadastro_nome" id="cadastro_nome" placeholder="Digite nome">
          </div>

          <div class="form-group">
            <label for="cadastro_email">Email</label>
            <input type="text" class="form-control" name="cadastro_email" id="cadastro_email" placeholder="Digite nome">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="cadastro_cidade">Cidade</label>
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
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success" name="salvar">Salvar</button>
        </div>
      </div>
    </div>
  </div>
</form>