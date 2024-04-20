<?php

  include 'Conexao.php';

  // echo "<pre>";
  // print_r($_POST);
  // die;

  if($_SERVER["REQUEST_METHOD"] == "POST")
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

    header("location: http://localhost/sistema_formulario/tela_inicial.php");

  } 

?>