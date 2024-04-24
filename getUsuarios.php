<?php

  include 'Conexao.php';

  $sql_code = "SELECT * FROM usuario";

  $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 


  $usuarios = array();

  while( $usuario = $sql_query->fetch_assoc() )
  {

    array_push($usuarios, $usuario);

    // $produtos[] = $produto;

  }

  // echo "<pre>";
  // print_r( $produtos );
  // die;
  
  
  // echo "<pre>";
  // print_r( $produtos );
  // die;

?>