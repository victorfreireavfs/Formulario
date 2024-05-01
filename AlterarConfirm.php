<?php

  include 'Conexao.php';

  // echo "<pre>";
  // print_r($_POST);
  // die;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
   
    session_start();
    // $_SESSION['MSG_ERRO'] = '';

    // COMANDO PARA INSERIR REGISTRO NO BANCO, INSERINDO NA TABELA USUARIO DO BANCO.
    // PEGANDO AS INFORMAÇÕES ENVIADAS POR FORMULÁRIO.
    $sql_code = " UPDATE usuario SET 
                              
                              nome = '".$_POST['nome']."', 
                              sobrenome = '".$_POST['sobrenome']."', 
                              celular = '".$_POST['celular']."', 
                              datanascimento = '".$_POST['datanascimento']."' 
                              
                              WHERE email = '".$_POST['email']."'
                              
                              ";

    $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 

    $_SESSION['MSG_ERRO'] = 'Alteração Realizada com sucesso!';

    header("location: http://localhost/formulario/tela_usuarios.php");

  } 

?>