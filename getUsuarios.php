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

  
//   if (!empty($_POST['dados'])) {
//     $dados = $_POST['dados'];
//     // Aqui você processaria os dados, por exemplo, salvando-os em um banco de dados
//     // Este exemplo só imprime os dados para demonstração
//     foreach ($dados as $dado) {
//         echo htmlspecialchars($dado) . "<br>";
//     }
// } else {
//     echo "Nenhum dado recebido.";
// }

  // echo "<pre>";
  // print_r( $dados );
  // die;
  
  
  // echo "<pre>";
  // print_r( $produtos );
  // die;

?>