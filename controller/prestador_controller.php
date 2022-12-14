<?php
@session_start();
@include_once '../model/conexao.php';
@include_once '../model/prestador.php';
@include_once '../model/upload.php';


$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['email']) )? $_POST['email'] : null; 
$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['senha']) )? $_POST['senha'] : null; 
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['nome']) )? $_POST['nome'] : null; 
$idade = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['idade']) )? $_POST['idade'] : null; 
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['telefone']) )? $_POST['telefone'] : null; 
$cor = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['cor']) )? $_POST['cor'] : null; 
$placa = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['placa']) )? $_POST['placa'] : null; 
$modelo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['modelo']) )? $_POST['modelo'] : null; 
$chassi = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['chassi']) )? $_POST['chassi'] : null;
$tela =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['tela']) ) ? $_POST['tela'] : null; 
$imagem =  ( $_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_FILES['idImagem']) ) ? $_FILES['idImagem'] : null; 


// $usuarioObj = new Prestador(null, null, null, null, null, null, null, null);
// $lista = $usuarioObj->listar();
// var_dump($lista);
// $usuarioObj = new Prestador(null, null, null, null, null, null, null, null);
// $lista = $usuarioObj->buscarPorId(1);
// var_dump($lista);
// $cadastro = new Prestador('jhonatha@gmail', '123', 'jhonatha', '20', 'preto', 'PEK6722', 'XJ6', '23334GDGFEFEF',);
// $cadastro->cadastrar();

// $uploadObj = new Upload(null, null);
// $list = $uploadObj->exibirTabela();


// Barrar o prestador
if(!Prestador::barrarPrestador()){
    header('Location: http://localhost/projeto-integrador/?erro=nãoLogado');
}

if($_GET['sair']){
    session_destroy();
    header('Location: http://localhost/projeto-integrador/?saiu');
}

// Verifica o Cadastro de Prestador
if($tela == 'cadastroDePrestador'){
    $prestadorObj = new Prestador($email, $senha, $nome, $idade, $telefone, $cor, $placa, $modelo, $chassi);
    $resultado = $prestadorObj->buscarPorEmail($prestadorObj->getEmail());
    //Se existir o email cadastrado no bd ele não deve ser gravado
    if($resultado){
        header('Location: http://localhost/projeto-integrador/?cadastro=usuarioExiste');
    } else {
        if($imagem) {
            $uploadObj = new Upload($imagem);
            $uploadObj->cadastrarImagem();   
        }
        if($prestadorObj->cadastrar()){
            header('Location: http://localhost/projeto-integrador/?cadastro=sucesso');
        }else{
            header('Location: http://localhost/projeto-integrador/?cadastro=erro');
        }
    }
}

// Verifica o login do Prestador
if($tela == 'loginDoPrestador'){
    $prestadorObj = new Prestador($email, $senha, $nome, null, null, null, null, null, null);
    if($prestadorObj->verificarLogin()){
        $_SESSION["prestadorLogado"] = true;
        $_SESSION["prestadorName"] = $prestadorObj->getEmail();
        header('Location: http://localhost/projeto-integrador/?pagina=3');
    }else {
        header('Location: http://localhost/projeto-integrador/?erro=senhaInválida');
    }
}



$uploadObj = new Upload($imagem);
$listaImagem = $uploadObj->exibirTabela();


