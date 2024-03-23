<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT sobre FROM tb_sobre1"; // Alteração aqui
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $sobre = $row['sobre'];
} catch (PDOException $e) {
    echo "Erro ao acessar o banco de dados: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Bootstrap projeto</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <div class="navbar-right" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção do banner -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="hero">
                    <h1>Marketing 360º</h1>
                    <p>Empresa voltada para desenvolvimento web e marketing digital</p>
                    <button type="button" class="btn btn-light btn-lg">Saiba Mais!</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de cadastro de leads -->
    <section class="cadastro-lead">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <h2>
                        <!-- Ícone do Bootstrap -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
                            <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                        </svg>
                        Entre na nossa lista!
                    </h2>
                </div>
                <div class="col-md-6">
                    <form method="post">
                        <input type="text" name="nome" placeholder="Seu e-mail"/>
                        <input type="submit" value="Inscrever-se" />
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Depoimentos de Nossos Clientes</h2>
                    <div class="depoimento">
                        <img src="imagens/male-icon.png" alt="Cliente 1">
                        <p class="nome-cliente">João Silva</p>
                        <p>"Excelente serviço de marketing digital! Aumentou significativamente nossas vendas."</p>
                    </div>
                    <div class="depoimento">
                        <img src="imagens/male-icon.png" alt="Cliente 2">
                        <p class="nome-cliente">Maria Santos</p>
                        <p>"Equipe profissional e dedicada. Resultados surpreendentes!"</p>
                    </div>
                    <div class="depoimento">
                        <img src="imagens/male-icon.png" alt="Cliente 3">
                        <p class="nome-cliente">Pedro Almeida</p>
                        <p>"Recomendo a todos que desejam crescer no mundo digital."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="diferenciais">
        <h1>Conheça nossa empresa!</h1><br><br>
        <div class="container">
            <div class="row"><?php echo $sobre;?></div>
        </div><br>
    </section>

    <section class="equipe">
        <h2>Equipe</h2>
        <div class="container equipe-container">
            <div class="row">
                <?php
                $selectmembros = $pdo->prepare("SELECT * FROM `tb_funcionarios`"); 
                $selectmembros->execute();
                $membros = $selectmembros->fetchAll();
                for($i = 0; $i< count($membros); $i++){
                ?>
                <div class="col-md-6">
                    <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="user-picture"></div>
                            </div>
                            <div class="col-md-9">
                                <h3><?php echo $membros[$i]['nome']; ?></h3>
                                <p>
                                    <?php echo $membros[$i]['descricao']; ?>
                                </p>
                            </div>
                           
                        </div>               
                    </div>
                </div>
                <?php } ?>  
            </div>
        </div>
    </section>  

    <section class="final">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Fale conosco</h2>
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="exampleFormControlInput1">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Escreva sua mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            
                            <input type="submit" value="Enviar"/>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h2>Nossos planos</h2>
                    <table class="table"><br>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Plano semanal</th>
                                <th scope="col">Plano Diario</th>
                                <th scope="col">Plano anual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">#</th>
                                <td>$299</td>
                                <td>$105</td>
                                <td>$564</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>$299</td>
                                <td>$105</td>
                                <td>$564</td>
                            </tr>
                            <tr>
                                <th scope="row">#</th>
                                <td>$299</td>
                                <td>$105</td>
                                <td>$564</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>

    <footer>
        <p class="text-center">Todos os direitos reservados!</p>
    </footer>

</body>
</html>
