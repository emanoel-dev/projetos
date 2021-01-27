<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $msg);


//echo "Nome: $nome </br>";
//echo "Email: $email </br>";
//echo "Assunto: $assunto </br>";
//echo "Mensagem: $msg </br>";

$dados = "INSERT INTO receptor (nome, email, assunto, msg) VALUES ('$nome', '$email', '$assunto', '$msg')";
$resultado_final = mysqli_query($conexao, $dados);

if(mysqli_insert_id($conexao)){
    $_SESSION['finale'] = '
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Mensagem enviada!</strong> Aguarde a resposta pelo e-mail cadastrado!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  header('Location: index.php#contato');
}
else {
    $_SESSION['finale'] = '
    <div class="alert alert-warning" role="alert">
  Ocorreu um <p class="alert-link">erro ao encaminhar sua mensagem</p>. Queira comunicar o administrador!
</div>';
  header('Location: index.php#contato');
}
die();
?>