<?php

  include 'Conexao.php';

  // echo "<pre>";
  // print_r($_POST);
  // die;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    
    $sql_code = " SELECT * FROM usuario WHERE email = '".$_POST['email']."'";

    $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 
    
    session_start();
    $_SESSION['MSG_ERRO'] = '';

    if( !empty($sql_query->fetch_assoc()) )
    {
      $_SESSION['MSG_ERRO'] = 'Email já existe cadastrado!';
      
      header("location: http://localhost/formulario/tela_cadastro.php");
      die;
    }


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

    $_SESSION['MSG_ERRO'] = 'Cadastro Realizado com sucesso!';

    header("location: http://localhost/formulario/mensagem.php");

  } 

  if (!empty($_POST['dados'])) {
    $dados = $_POST['dados'];
    // Aqui você processaria os dados, por exemplo, salvando-os em um banco de dados
    // Este exemplo só imprime os dados para demonstração
    foreach ($dados as $dado) {
        echo ($dado) . "<br>";
    }
} else {
    echo "Nenhum dado recebido.";
}
?>