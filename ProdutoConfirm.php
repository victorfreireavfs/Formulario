<?php

  include 'Conexao.php';

  // echo "<pre>";
  // print_r($_POST);
  // die;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    
    $sql = " SELECT * FROM produtos WHERE numid = '".$_POST['numid']."'";

    $sql_query = $mysql->query($sql) OR die("ERRO ao realizar essa operação! " . $mysql->error);

    session_start();

    if( !empty($sql_query->fetch_assoc()) )
    {
      $sql = " UPDATE produtos SET 
                              
                                nome = '".$_POST['nomepro']."',
                                quantidade = ".$_POST['quantidade']."

                            WHERE numid = '".$_POST['numid']."' ";

      $sql_query = $mysql->query($sql) OR die("ERRO ao realizar essa operação! " . $mysql->error); 

      $_SESSION['MSG_ERRO'] = 'Produto alterado com sucesso!';

    }
    else
    {
      // COMANDO PARA INSERIR REGISTRO NO BANCO, INSERINDO NA TABELA USUARIO DO BANCO.
      // PEGANDO AS INFORMAÇÕES ENVIADAS POR FORMULÁRIO.
      $sql_code = " INSERT INTO produtos ( numid, 
                                          nome, 
                                          quantidade) 
                                          
                                    value (
  
                                      ".$_POST['numid'].",
                                      '".$_POST['nomepro']."',
                                      ".$_POST['quantidade']."
                                    ) ";
  
      $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 
  
      $_SESSION['MSG_ERRO'] = 'Produto cadastrado com sucesso!';

    }

    header("location: http://localhost/formulario/tela_inicial.php");

  } 

?>