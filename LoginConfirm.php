<?php

  include 'Conexao.php';

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    
    // COMANDOS PARA VERIFICAR SE UM REGISTRO EXISTE NA TABELA usuario
    // UTILIZANDO O SELECT E PASSANDO OS VALORES QUE ESTÃO SENDO ENVIADOS POR FORMULÁRIO NA CONDIÇÃO WHERE.
    $sql_code   = " SELECT * FROM usuario 
                                WHERE email     = '". $_POST['emailc'] ."' 
                                      AND senha = '". $_POST['senhac'] ."' ";

    $sql_query  = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 

    // echo "<pre>";
    // print_r( $sql_query->fetch_assoc() );
    // die;

    $retorno = $sql_query->fetch_assoc();

    if( !empty($retorno) )
    {
      session_start();

      $_SESSION['nome']             = $retorno['nome'];
      $_SESSION['email']            = $retorno['email'];
      $_SESSION['data_hora_login']  = date('d/m/Y H:i:s');
      
      header("location: http://localhost/formulario/tela_inicial.php"); 

    }
    else
    {
      echo "ERRO, EMAIL OU SENHA INCORRETOS";

      header("location:  http://localhost/formulario/tela_login.php"); 
    }

    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";
    // var_dump($email == $_SESSION['email']);
    // echo "<pre>";
    // var_dump($senha == $_SESSION['senha']);
    // die;
      
    // if($email == $_SESSION['email'] && $senha == $_SESSION['senha'])
    // {
      
    //   header("location: http://localhost/sistema_formulario/tela_inicial.php"); 

    //   $_SESSION['usuario']  = $email;
    //   $_SESSION['senha']    = $senha;

    // }
    // else
    // {
    //   // header("location:  http://localhost/sistema_formulario/tela_login.php"); 
    //   $_SESSION['erro']    = 'ERRO';
    // }

  } 

?>