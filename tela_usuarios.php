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
            border-radius: 5px;
        }

        .botao-sair {
            display:flex;
            margin:5%;
        
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

            <table class="tabela-usuarios" id="tabelaEditavel">
                <tr>
                    <th></th>
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
                                    <td> <button type='button' class='btn_excluir_produto'>EXCLUIR</button> </td>
                                    <td contenteditable='true'>". $usuario ['nome'] ."</td>
                                    <td contenteditable='true'>". $usuario ['sobrenome'] ."</td>
                                    <td contenteditable='true'>". $usuario ['email'] ."</td>
                                    <td contenteditable='true'>". $usuario ['celular'] ."</td>
                                    <td contenteditable='true'>". $usuario ['dataNascimento'] ."</td>
                                    
                                </tr>";

                    }
            
                ?>
            </table>

            <div class="botao-sair">
                <button><a href="tela_inicial.php">Voltar</a></button>
                <button tyoe="button" onclik="salvarDados()">Salvar Alterações</button>
            </div>

        </div>
    </div>
    <script src="botao_cor.js"></script>
</body>
</html>