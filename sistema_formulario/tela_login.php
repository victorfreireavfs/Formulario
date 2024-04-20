<?php

    include "DadosSession.php";
    include "Conexao.php";
    
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['tela_cadastro']) )
    {
        $_SESSION['email']      = $_POST['email'];
        $_SESSION['senha']      = $_POST['senha'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de Login</title>
    <style>
        .botao-entrar button{
            margin-top: 2.5rem;
            font-weight: bold;
            color: white;
            border: none;
            padding: 4px 10px;
            border-radius: 5px;
            cursor: pointer;
            background-color: gray;
            text-decoration: none;
        }

        .formulario{
            background-color: ;
        }
        .caixa-formulario{
            border: 0.1rem solid grey;
            padding: 3rem;
            border-radius: 2rem;
            box-shadow: 2rem 2rem grey;
        }
        .cabecalho-formulario h1{
            font-family: verdana;
            color: black;
        }
        .botao-cadastro{
            display: flex;
            align-items: right;
            margin-left: 20rem;
        }
       .botao-cadastro button{
            border: none;
            background-color: gray;
            padding: 4px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .botao-cadastro button:hover{
            background-color: rgba(128, 128, 128, 0.699);
        }
        .botao-cadastro button a{
            text-decoration: none;
            font-weight: bold;
            color: white;
        }

    </style>
</head>
<body>
    <div class="conteudo">
        
        <div class="imagem-formulario">
            <img src="imagens/imagem-cadastro.jpg" alt="imagem">
        </div>
        
        <div class="formulario">

            <div class="botao-cadastro">
                <button><a href="tela_cadastro.php">Cadastre-se</a></button>
            </div>
            
            <div class="cabecalho-formulario">
                <h1>LOGIN</h1>
            </div>
            
            <form action="http://localhost/sistema_formulario/LoginConfirm.php" method="POST">
                
                <div class="caixa-formulario">
                    
                    <div class="caixa-input">
                        <label for="email">Email</label>
                        <input type="email" name="emailc" id="emailc" placeholder="Digite seu email" required>
                    </div>
                
                    <div class="caixa-input">
                        <label for="senha">Senha</label>
                        <input type="password" name="senhac" id="senhac" placeholder="Digite sua senha" maxlength=8 required>
                    </div>
                
                    <div class="botao-entrar">
                        <button><a>Entrar</a></button>
                    </div>
                
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>