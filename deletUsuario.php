<?php
    include 'Conexao.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sql_code = " DELETE FROM usuario WHERE email = '".$_POST['email']."'";

        $sql_query = $mysql->query($sql_code) OR die("ERRO ao realizar essa operação! " . $mysql->error); 

        session_start();

        $_SESSION['MSG_ERRO'] = 'Usuário excluído com sucesso!';

        header("location: http://localhost/formulario/tela_usuarios.php");
    }

?>