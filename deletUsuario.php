<?php
    include 'Conexao.php';
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sql_code = " DELETE * FROM usuario WHERE email = '".$_POST['email']."'";

        $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 

        $_SESSION['MSG_ERRO'] = 'Usuário excluído com sucesso!';

        header("location: http://localhost/formulario/tela_usuario.php");
    


    }


?>