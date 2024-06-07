<?php

  include 'Conexao.php';

  $sql_code = "SELECT * FROM produtos";

  $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 


  $produtos = array();

  while( $produto = $sql_query->fetch_assoc() )
  {

    array_push($produtos, $produto);

    // $produtos[] = $produto;

  }

  // echo "<pre>";
  // print_r( $produtos );
  // die;

  // foreach($produtos as $index => $produto)
  // {
      
  //   echo "<pre>";
  //   print_r( 'Posição: '. $index);
    
  //   echo "<pre>";
  //   print_r( $produto );
    
  // }
  
  // die;
  
  
  // echo "<pre>";
  // print_r( $produtos );
  // die;

?>