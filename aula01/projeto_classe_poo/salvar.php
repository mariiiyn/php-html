<?php
require_once "usuario.php";
require_once "professor.php";
require_once "aluno.php";

//caminho do arquivo json
$banco = 'banco.json';

//Ler dados existentes
$dados = [];
if (file_exists($banco)) {
    $json = file_get_contents($banco);
    $dados = json_decode($json, true);
}

//Receber dados do formulário
$tipo = $_POST['tipo'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($tipo === 'professor') {
    $disciplina = $_POST['disciplina'] ?? '';
    $usuario = new professor($nome, $email, $disciplina);
    $dados[ 'professores'][] = [
        'nome' => $usuario->getNome(),
        'email' => $usuario->getEmail(),
        'disciplina' => $usuario->getDisciplina()
    ];
} elseif ($tipo === 'aluno') {
    $matricula = $_POST['matricula'] ?? '';
    $usuario = new aluno($nome, $email, $matricula);
    $dados['alunos'][] = [
        'nome' => $usuario->getNome(),
        'email' => $usuario->getEmail(),
        'matricula' => $usuario->getMatricula()
    ];
}
//Salvar de volta no json
file_put_contents($banco, json_encode($dados, JSON_PRETTY_PRINT));

echo"<h2>Cadastro realizado com sucesso!</h2>";
echo '<a href="index.html">Voltar</a>';
echo "a href = 'index.php'>Ver usuários cadastrados</a>";
?>
   