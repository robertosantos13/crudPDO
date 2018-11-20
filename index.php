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
    <div class="container mt-3">
    <h2 class="text-center">Crud com PDO e Bootstrap 4 </h2> <hr>
    <div class="float-right">
        <button type="button" id="btnOpenModal" class="btn btn-success">Adicionar</button>
    </div>

    <!-- adicionando modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- header -->
                <div class="modal-header">
                    <h4 class="modal-title">Cadastro de Usuários</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- body/content -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" nam="nome" class="form-control" placeholder="Digite nome">
                    </div>
                    <div class="form-group">
                        <label for="nome">Email:</label>
                        <input type="emal" name="email" class="form-control" placeholder="Digite nome">
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <select class="custom-select" name="cidade" id="cidade">
                            <option selected>Escolha a cidade...</option>
                            <option value="">Belo Horizonte</option>
                            <option value="">Betim</option>
                            <option value="">Contagem</option>
                            <option value="">Esmeraldas</option>
                            <option value="">Ibirite</option>                           
                        </select>
                    </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Adicionar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#btnOpenModal').click(function(){
                $('#myModal').modal();
            });
        });
    </script>
</body>
</html>