<?php

  include 'Conexao.php';

  // echo "<pre>";
  // print_r($_POST);
  // die;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    
    // COMANDO PARA INSERIR REGISTRO NO BANCO, INSERINDO NA TABELA USUARIO DO BANCO.
    // PEGANDO AS INFORMAÇÕES ENVIADAS POR FORMULÁRIO.
    $sql_code = " INSERT INTO usuario ( nome, 
                                        sobrenome, 
                                        email, 
                                        celular, 
                                        senha, 
                                        dataNascimento) 
                                        
                                  value (

                                    '".$_POST['nome']."',
                                    '".$_POST['sobrenome']."',
                                    '".$_POST['email']."',
                                    '".$_POST['celular']."',
                                    '".$_POST['senha']."',
                                    '".$_POST['datanascimento']."'

                                  ) ";

    $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 

    header("location: http://localhost/formulario/mensagem.php");

  } 

?>