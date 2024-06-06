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

    // echo "<pre>";
    // print_r($retorno);
    // die;

    session_start();

    $_SESSION['MSG_ERRO'] = '';

    if( !empty($retorno) )
    {

      $_SESSION['nome']             = $retorno['nome'];
      $_SESSION['email']            = $retorno['email'];
      $_SESSION['data_hora_login']  = date('d/m/Y H:i:s');
      $_SESSION['acesso_adm']       = $retorno['ACESSO_ADM'];
      
      header("location: http://localhost/formulario/tela_inicial.php"); 

    }
    else
    {
      $_SESSION['MSG_ERRO'] = 'Erro: Email ou senha incorretos!';

      header("location:  http://localhost/formulario/tela_login.php"); 
    }


  } 

?>