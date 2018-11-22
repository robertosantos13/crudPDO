  <?php require_once 'db.php';?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Crud com PDO e Bootstrap</title>
</head>
<body>

    <div class="container">

        <div class="card text-white bg-success mb-3">
            <div class="card-header">Painel de Usuários</div>
            <div class="card-body">
                <h5 class="card-title">Crud PDO com Bootstrap 4</h5>
                <p class="card-text">Este é apenas um Crud Básico.</p>
            </div>
        </div> <!--/card-->

        <div class="float-right">
            <button type="button" class="btn btn-primary btn-md" role="button" id=btOpenModal data-toggle="modal" data-target="#cadastroModal">Adicionar</button>
        </div>

    </div> <!--/container -->

    <div class="container">  <?php require_once 'add.php' ?>  </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Cidade</th>
                        <th colspan="2" class="text-center">Action</th>
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
                            data-target="#editModal"
                            data-whateveredit_id="<?= $row['cadastro_id'];?>"
                            data-whateveredit_nome="<?= $row['cadastro_nome'];?>"
                            data-whateveredit_email="<?= $row['cadastro_email'];?>"
                            data-whateveredit_cidade="<?= $row['cadastro_cidade'];?>"  
                            >
                            Editar
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#deleteModal"
                        data-whatever="<?= $row['cadastro_id'];?>">Deletar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>   
    </table>
</div>
</div>



 <!-- Editar -->
 <div class="container">
     <?php require_once 'edit.php' ?>     
 </div>

    <!-- deletar -->
 <div class="container">
     <?php require_once 'delete.php' ?>
 </div>
</body>
</html>