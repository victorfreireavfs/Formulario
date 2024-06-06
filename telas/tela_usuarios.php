<?php

    $base_url = "http://localhost/formulario/";
    
    include "getUsuarios.php";

    session_start();
  
    // if( !empty($_SESSION['MSG_ERRO']) )
    // {
    //     $_SESSION['MSG_ERRO'] = $_SESSION['MSG_ERRO'];
    // }
    // else
    // {
    //     $_SESSION['MSG_ERRO'] = '';
    // }

    $_SESSION['MSG_ERRO'] = !empty($_SESSION['MSG_ERRO']) ? $_SESSION['MSG_ERRO'] : '';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuarios</title>
    <style>
        
        .nome-usuario h1{
            padding-top: 2rem;
            padding-left: 5rem;
            text-align: center;
            font-family: verdana;
            color: black;
        }
        
        .tabela-usuarios, tr, th, td{
            border: 1px solid black;
        }
        th,td{
            padding-right: 18px;   
            padding-left: 18px;
        }
        .tabela-usuarios{
            margin-top: 3rem;
        }
        .tabela-usuarios tr th{
            background-color: white;
        }
        .tabela-usuarios tr td{
            background-color: lightgreen;
        }

        .conteudo{
            width: 90%;
            height: 90%;
            display: flex;
            box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.452);
        }

        .formulario{
            width: 100%;
            display: flex;
            flex-direction: column;
            background-color: #fff;
        }


        .botao-sair a {
            font-weight:bold;
            text-decoration: none;
            background-color: grey;
            color:white;
            padding: 4px 10px;
            
        }

        .botao-sair button{
            margin:2%;
            font-weight:bold;
            text-decoration: none;
            background-color: grey;
            color:white;
            padding: 4px 10px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
<div class="conteudo">
               
    <div class="formulario">

        <div class="cabecalho-formulario">
            <h1>Usuários cadastrados</h1>
        </div>
           
        <div class="msg_erro">
            <h1><?php echo $_SESSION['MSG_ERRO'];?></h1>
        </div>
        
        <div class="usuarios-cadastrados">

            <div class="nome-usuario">
                <h1><?php echo 'Bem vindo, '.$_SESSION['nome'].'!' ?></h1>
            </div>

            <table class="tabela-usuarios" id="tabelaEditavel">
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Data de Nascimento</th>
                    <th></th>
                    
                </tr>
               
                <?php

                    foreach($usuarios as $posicao => $usuario)
                    {
                        
                        echo "  <tr id='linha_".$posicao."'> 

                                    <td> <button type='button' class='btn_excluir_usuario'  linha='".$posicao."' onclick='excluirUsuario(this)'>EXCLUIR</button> </td>
                                    <td contenteditable='true'>". $usuario ['nome'] ."</td>
                                    <td contenteditable='true'>". $usuario ['sobrenome'] ."</td>
                                    <td contenteditable='true'>". $usuario ['email'] ."</td>
                                    <td contenteditable='true'>". $usuario ['celular'] ."</td>
                                    <td contenteditable='true'>". $usuario ['dataNascimento'] ."</td>
                                    <td> <button type='button' class='btn_alterar_usuario' linha='".$posicao."' onclick='alterarUsuario(this)'>ALTERAR</button> </td>
                                    
                                </tr>";

                    }
            
                ?>
            </table>

            <div class="botao-sair">
                <button><a href="tela_inicial.php">Voltar</a></button>
                <button type="button" onclick="salvarDados()">Salvar Alterações</button>
            </div>

        </div>
    </div>
    
    <form method="post" action="<?php echo $base_url?>tela_cadastro.php" id="formalterarusuario">
        
        <input type="hidden" name="nome"                id="usuario_nome"           value="">
        <input type="hidden" name="sobrenome"           id="usuario_sobrenome"      value="">
        <input type="hidden" name="email"               id="usuario_email"          value="">
        <input type="hidden" name="celular"             id="usuario_celular"        value="">
        <input type="hidden" name="dataNascimento"      id="usuario_dataNascimento" value="">
        
    </form>
    
    <form method="post" action="http://localhost/formulario/deletUsuario.php" id="formexcluirusuario">
        <input type="hidden" name="email" id="usuario_email_excl" value="">
    </form>
    
    <script src="usuario.js"></script>

</body>
</html>