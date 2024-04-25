<?php

    $base_url = "http://localhost/sistema_formulario/";
    
    include "getUsuarios.php";

    session_start();
    
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
            width: 70%;
            height: 90vh;
            display: flex;
            box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.452);
        }

        .formulario{
            width: 100%;
            display: flex;
            flex-direction: column;
            background-color: #fff;
        }

    </style>
</head>
<body>
<div class="conteudo">
               
    <div class="formulario">

        <div class="cabecalho-formulario">
            <h1>Usuários cadastrados</h1>
        </div>
           
            
        <div class="usuarios-cadastrados">

            <div class="nome-usuario">
                <h1><?php echo 'Bem vindo, '.$_SESSION['nome'].'!' ?></h1>
            </div>

            <table class="tabela-usuarios">
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Data de Nascimento</th>
                </tr>
               
                <?php
                    
                    foreach($usuarios as $usuario)
                    {
                        
                        echo "  <tr>

                                    <td>". $usuario ['nome'] ."</td>
                                    <td>". $usuario ['sobrenome'] ."</td>
                                    <td>". $usuario ['email'] ."</td>
                                    <td>". $usuario ['celular'] ."</td>
                                    <td>". $usuario ['dataNascimento'] ."</td>
                                    
                                </tr>";

                    }
            
                ?>
            </table>

            <div class="botao-sair">
                <button><a href="tela_inicial.php">Voltar</a></button>
            </div>

        </div>
    </div>
</body>
</html>