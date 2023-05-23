<?php
session_start();
$nome = $_POST ['Nome'];
$senha = $_POST ['Senha'];

$dataBase = new PDO('mysql:host=localhost;dbname=pwLogin', 'root','etec');
print 'Conexão efetuada com sucesso ! <br><br>';

$query = $dataBase -> prepare("SELECT * FROM tbUsuarios WHERE nmUsuario = :nome AND senha = :senha");

$query -> bindParam(':nome', $nome);
$query -> bindParam(':senha', $senha);
$query -> execute();
$data = $query -> fetch(PDO::FETCH_ASSOC);

if($data) {
    $_SESSION['Nome'] = $nome;
    $_SESSION['Senha'] = $senha;
    header('location:paginaSessao.php');
    exit();
 }
 else {
    header ('location:erro.php');
 }

 //, PDO::PARAM_STR