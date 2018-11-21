<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Crud com PDO</title>
</head>

<body>
    <?php require_once 'db.php';
    
?>

        <div class="container">

            <div class="card text-white bg-success mb-3" style="max-width: 100%;">
                <div class="card-header">Painel de Usuários</div>
                <div class="card-body">
                    <h5 class="card-title">Crud PDO com Bootstrap</h5>
                    <p class="card-text">Este é apenas um Crud PDO Básico.</p>
                </div>
            </div>

            <div class="float-right mb-2">
                <a class="btn btn-primary btn-md" href="#" role="button" id="btnopenmodal"  data-toggle="modal" data-target="#cadastroModal">Adicionar</a>
            </div>
            <!-- Modal cadastro -->
<div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastro Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="db.php" method="POST">
            <div class="form-group">
                <label for="cadastro_nome">Nome</label>
                <input type="text" class="form-control" name="cadastro_nome" placeholder="Digite nome">
            </div>
            <div class="form-group">
                <label for="cadastro_email">Email</label>
                <input type="text" class="form-control" name="cadastro_email" placeholder="Digite email">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="cidade" class="input-group-text">Cidade</label>
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
                <button type="button" class="btn btn-defalut" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success" name="salvar">Salvar</button>
            </div>
        </form>
      </div>     
    </div>
  </div>
</div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($result as $row): ?>
                    <tr>
                        <td scope="row">
                            <?= $row['cadastro_id'];?>
                        </td>
                        <td>
                            <?= $row['cadastro_nome'];?>
                        </td>
                        <td>
                            <?= $row['cadastro_email'];?>
                        </td>
                        <td>
                            <?= $row['cadastro_cidade'];?>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-info" data-toggle="modal"
                                data-target="#editarModal"
                                data-whateveredit="<?= $row['cadastro_id'];?>"
                                data-whatevereditnome="<?= $row['cadastro_nome'];?>"
                                data-whatevereditemail="<?= $row['cadastro_email'];?>"
                                data-whatevereditcidade="<?= $row['cadastro_cidade'];?>"  
                                >
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger"
                             data-toggle="modal" data-target="#exampleModal"
                              data-whatever="<?= $row['cadastro_id'];?>">Deletar</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        Deseja mesmo deletar esse usuario de nome - <?= $row['cadastro_nome'] ?>?
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="submit" class="btn btn-danger" 
            href="db.php?delete=<?= $row['cadastro_id'];?>" name="delete" >Deletar</a>
      </div>
    </div>
  </div>
</div>
        <!-- Editar modal -->
        <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    Editando usuário de nome - <?= $row['cadastro_nome']; ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="db.php" method="POST">
                <input type="hidden" class="form-control" name="cadastro_id"  id="cadastro_id" value="<?php $id;?>" placeholder="Id do sistema">
            <div class="form-group">
                <label for="cadastro_nome">Nome</label>
                <input type="text" class="form-control" name="cadastro_nome" id="cadastro_nome" placeholder="Digite nome">
            </div>
            <div class="form-group">
                <label for="cadastro_email">Email</label>
                <input type="text" class="form-control" name="cadastro_email" id="cadastro_email" placeholder="Digite email">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="cidade" class="input-group-text">Cidade</label>
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
            <div class="form-group float-right">
                 <button type="submit" class="btn btn-warning" >Alterar</button>     
            </div>
        </form>
               
            </div>
        </div>

       

        <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
            
            });

            $('#editarModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipientedit = button.data('whateveredit') // Extract info from data-* attributes
                var recipienteditnome = button.data('whatevereditnome')
                var recipienteditemail = button.data('whatevereditemail')
                var recipienteditcidade = button.data('whatevereditcidade')
               
      
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Editando ' + recipienteditnome)
                modal.find('.modal-body input').val(recipienteditnome)
                modal.find('#cadastro_id').val(recipientedit)
                modal.find('#cadastro_nome').val(recipienteditnome)
                modal.find('#cadastro_email').val(recipienteditemail)
                modal.find('#cadastro_cidade').val(recipienteditcidade)
            })
        </script>
</body>

</html>