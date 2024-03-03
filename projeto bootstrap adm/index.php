<?php
try {
  
    $pdo = new PDO("mysql:host=localhost;dbname=", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT sobre FROM tb_sobre1";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    // Check if the query returned a result
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $sobre = $row['sobre'];
    } else {
        
    }
} catch (PDOException $e) {
    echo "Erro ao acessar o banco de dados: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Painel de Controle</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="colorbg">
<div class="container">

  <nav class="navbar navbar-expand-md navbar-dark ">
    <a class="navbar-brand" href="#">Marketing 360º</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul id="menu-principal" class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" ref_sys="sobre" href="#">Editar Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" ref_sys="cadastrar_equipe" href="#">Cadastrar Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" ref_sys="lista-equipe" href="#">Lista equipe</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>  <a href="?sair">Sair <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></a></li>
      </ul>
      
    </div>
    </div>
  </nav>
  </div>
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>  Painel de controle</h2>
        </div>

        <div class="col-md-3">
          <p>  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>  Seu último login foi em: 17/10/2023</p>
        </div>
      </div>
    </div>
  </header> 
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item ">Início</a></li>
        <li class="breadcrumb-item active" >Painel de Controle</a></li>
        <li class="breadcrumb-item active" >Cadastrar equipe</li>
      </ol>
    </nav>
    </section>

<section class="principal">
   <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <div class="list-group">
                    <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg> Sobre</a>
                      <a href="#" class="list-group-item" ref_sys="cadastrar_equipe"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg> Cadastrar Equipe</a>
                   <a href="#" class="list-group-item" ref_sys="lista-equipe">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
  <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
  <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
</svg> Lista Equipe <span class="badge">2</span></a>
                  </div>
                </div>
                <br><br><br><br><br><br>
                  <div class="col-md-9">
                  <?php
                  if(isset($_POST['editar_sobre'])){
                    $sobre = $_POST['sobre'];
                    $pdo->exec("DELETE FROM `tb_sobre1`");
                    $sql = $pdo->prepare("INSERT INTO `tb_sobre1` VALUES (null,?)");
                    $sql->execute(array($sobre));
                    echo '<div class="alert alert-success" role="alert">O código HTML <b>Sobre</b> foi editado com sucesso!</div>';
                    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre1`");
                    $sobre->execute();
                    $sobre = $sobre->fetch()['sobre'];
                  }else if(isset($_POST['cadastrar_equipe'])) {
                    $nome = $_POST['nome_membro'];
                    $descricao = $_POST['descricao'];
                    $sql = $pdo->prepare("INSERT INTO `tb_funcionarios` VALUES (null,?,?)");
                    $sql->execute(array($nome,$descricao));
                    echo '<div class="alert alert-success" role="alert">O membro da equipe foi cadastrado com sucesso!</div>';
                    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre1`");
                    $sobre->execute();
                  }
                ?>

            <div id="sobre_section" class="card">
                <h5 class="card-header cor-padrao">Sobre</h5>
                <div class="card-body">
        <form method="post"> 
            <div class="form-group">
                <label for="exampleInputEmail1">Código HTML:</label>
                <textarea name="sobre" style="height:200px;" class="form-control"></textarea>
                <br>
                <button type="submit" name="editar_sobre" class="btn btn-primary cor-padrao">Enviar</button>
            </div>
        </form>
    </div>
</div>

                  </br>

                  <div id="cadastrar_equipe_section" class="card">
                    
                      <h5 class="card-header cor-padrao">Cadastrar equipe</h5>
                      <div class="card-body">
                      <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do membro da equipe:</label>
                            <input type="text" name="nome_membro" class="form-control">
                        </div><BR>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Descrição do membro:</label>
                            <textarea name="descricao" class="form-control"></textarea>
                          </div>
                            <br>
                          <input type="hidden" name="cadastrar_equipe"/>
                          <button type="submit" class="btn btn-primary cor-padrao">Enviar</button>
                      </form>
                      </div>
                    </div>
             
<br>
                  <div id="lista-equipe_section" class="card">
                      <h5 class="card-header cor-padrao">Membros da equipe</h5>
                      <div class="card-body">
                      <form>
                      <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>


                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $selecionarmembros = $pdo->prepare("SELECT * FROM tb_funcionarios");
                      $selecionarmembros->execute();
                      $membros = $selecionarmembros->fetchAll();
                      foreach ($membros as $value) { 
                  
                      ?>
                      <tr>
                        <th scope="row"><?php echo $value['id']; ?></th>
                        <td><?php echo $value['nome'] ?></td>
                        <td></td>

                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                      </form>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </section>
              
          </div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+06T2T1aOp2zOGJ8Mop/sAIeHNx6Pno2zO+eIlb" crossorigin="anonymous"></script>
</body>
</html>
