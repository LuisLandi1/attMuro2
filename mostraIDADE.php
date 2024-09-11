<?php
// mostra_idade.php

session_start();
include 'aluno.php'; // Inclua a definição da classe

if (isset($_SESSION['aluno'])) {
    // Desserializa o objeto armazenado na sessão
    $aluno = unserialize($_SESSION['aluno']);

    // Verifica se o objeto é uma instância da classe Aluno
    if ($aluno instanceof Aluno) {
        // Mostra o nome e a idade do aluno
        echo "<h1>Idade do Aluno</h1>";
        echo htmlspecialchars($aluno->getNome()) . ", " . $aluno->idade() . " anos";
        echo "<br><a href='mostra.php'>Voltar</a><br>";
        echo "<a href='SAIDA.php'>Sair</a>";
    } else {
        echo "O objeto na sessão não é uma instância da classe Aluno.";
    }
} else {
    echo "Nenhum aluno encontrado na sessão.";
}
?>
