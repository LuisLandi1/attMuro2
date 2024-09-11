<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe Dados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    session_start();
    include 'aluno.php'; // Inclua a definição da classe

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['nome'], $_POST['nascimento'], $_POST['curso'], $_POST['matricula'])) {
            $nome = $_POST['nome'];
            $nascimento = $_POST['nascimento'];
            $curso = $_POST['curso'];
            $matricula = $_POST['matricula'];

            $aluno = new Aluno($nome, $nascimento, $curso, $matricula);
            $_SESSION['aluno'] = serialize($aluno);

            // Redireciona após a exibição do modal
            echo "<script>window.location.href = 'mostra.php';</script>";
        } else {
            echo "Dados do formulário incompletos.";
        }
    }

    include 'menu.php';
    ?>

    <div class="container mt-4">
        <h1>Dados Recebidos</h1>
        <!-- Botão para abrir o modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alunoModal">
            Mostrar Dados
        </button>

        <!-- Modal -->
        <div class="modal fade" id="alunoModal" tabindex="-1" role="dialog" aria-labelledby="alunoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="alunoModalLabel">Dados do Aluno</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php if (isset($_SESSION['aluno'])): ?>
                            <?php $aluno = unserialize($_SESSION['aluno']); ?>
                            <p><strong>Nome:</strong> <?php echo htmlspecialchars($aluno->getNome()); ?></p>
                            <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($aluno->getNascimento()); ?></p>
                            <p><strong>Curso:</strong> <?php echo htmlspecialchars($aluno->getCurso()); ?></p>
                            <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($aluno->getMatricula()); ?></p>
                        <?php else: ?>
                            Nenhum aluno encontrado na sessão.
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <a href="mostra.php" class="btn btn-primary">Ir para Mostrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
