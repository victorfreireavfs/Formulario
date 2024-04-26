<?php

    include "getProdutos.php";      
    include "ProdutoConfirm.php";
    session_start();


    // echo "<pre>";
    // print_r($_SESSION);
    // die;

    // $_POST['nomepro']       = '';
    // $_POST['numid']         = '';
    // $_POST['quantidade']    = '';

    // if( $_SERVER["REQUEST_METHOD"] == "POST" )
    // {
    //     $_POST['nomepro']          = $_POST['nomepro'];
    //     $_POST['numid']         = $_POST['numid'];
    //     $_POST['quantidade']    = $_POST['quantidade'];
    // }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Produtos</title>
    <style>
        .botao-salvar button{
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
        .botao-sair button {
            margin-top: 2.5rem;
            margin-left:1rem;
            font-weight: bold;
            color: white;
            border: none;
            padding: 4px 10px;
            border-radius: 5px;
            cursor: pointer;
            background-color: gray;
            text-decoration: none;
        }

        .botao-sair button a{
            background-color: gray;
            text-decoration: none;
            color: white;
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

        .caixa-botao{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .nome-usuario h1{
            padding-top: 2rem;
            padding-left: 5rem;
            text-align: center;
            font-family: verdana;
            color: black;
        }
        .botao_muda_cor{
            display: flex;
            align-items: right;
            margin: 2rem;
        }
        .botao_muda_cor button{
            border: none;
            font-weight: bold;
            background-color: gray;
            padding: 4px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .botao_muda_cor button:hover{
            background-color: rgba(128, 128, 128, 0.699);
        }
        .botao_muda_cor button a{
            text-decoration: none;
            font-weight: bold;
        }
        #botao_aplicar, #campo_cor{
            display: none;
        }
        .tabela-produtos, tr, th, td{
            border: 1px solid black;
        }
        th,td{
            padding-right: 18px;   
            padding-left: 18px;
        }
        .tabela-produtos{
            margin:20%;
        }
        .tabela-produtos tr th{
            background-color: white;
        }
        .tabela-produtos tr td{
            background-color: lightgreen;
        }
        .msg_cadastro_produto{
            text-align:center;
            color: lightgreen;
            margin-bottom:20px;
        }
    </style>
</head>
<body>
<div class="conteudo">
               
        <div class="formulario">

            <div class="botao_muda_cor">
                <button id="botao_cor">Mudar cor de Fundo</button>
                <input type="text" id="campo_cor" placeholder="#FFFFFF">
                <button id="botao_aplicar">Aplicar</button>
            </div>
            
            <div class="cabecalho-formulario">
                <h1>CADASTRE O PRODUTO</h1>
            </div>
           
            
            <form action="http://localhost/formulario/ProdutoConfirm.php" method="POST">
                
                <div class="caixa-formulario">
                    
                    <div class="caixa-input">
                        <label for="email">NOME</label>
                        <input type="text" name="nomepro" id="nomepro" placeholder="Digite o nome do produto" required>
                    </div>
                
                    <div class="caixa-input">
                        <label for="numid">Nº ID.</label>
                        <input type="text" name="numid" id="numid" placeholder="Digite o número identificador" maxlength=8 required>
                    </div>
                
                    <div class="caixa-input">
                        <label for="quantidade">QUANTIDADE</label>
                        <input type="text" name="quantidade" id="quantidade" placeholder="Digite a quantidade" maxlength=8 required>
                    </div>

                    <div class="caixa-botao">
                        <div class="botao-salvar">
                            <button><a>Salvar</a></button>
                        </div>
                        <div class="botao-sair">
                            <button><a href="tela_login.php">Sair</a></button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <div class="produtos-cadastrados">

            <div class="nome-usuario">
                <h1><?php echo 'Bem vindo, '.$_SESSION['nome'].'!' ?></h1>

                <?php if($_SESSION['acesso_adm'] == 1){ ?>

                    <a href="tela_usuarios.php"><button id="botao-usuarios">Tela Usuários</button></a>

                <?php } ?>

            </div>

            <table class="tabela-produtos">
                <tr>
                    <th>Nome</th>
                    <th>Nº Identificador</th>
                    <th>Quantidade</th>
                </tr>
               
                <?php
                    
                    foreach($produtos as $produto)
                    {
                        
                        echo "  <tr>

                                    <td>". $produto['nome']      ."</td>
                                    <td>". $produto['numid']        ."</td>
                                    <td>". $produto['quantidade']   ."</td>
                                    
                                </tr>";

                    }
            
                ?>
                    
            </table>

            <div class="msg_cadastro_produto">
                <h1><?php echo $_SESSION['MSG_ERRO'];?></h1>
            </div>

        </div>
        <script src="botao_cor.js"></script>

    </div>
</body>
</html>