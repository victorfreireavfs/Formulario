<?php

    $base_url = "http://localhost/sistema_formulario/";
    
    include "Conexao.php";

    session_start();

    $_POST['nomepro']          = '';
    $_POST['numid']         = '';
    $_POST['quantidade']    = '';

    if( $_SERVER["REQUEST_METHOD"] == "POST" )
    {
        $_POST['nomepro']          = $_POST['nomepro'];
        $_POST['numid']         = $_POST['numid'];
        $_POST['quantidade']    = $_POST['quantidade'];
    }
    
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
        .formulario{
            background-color: ;
        }
        .caixa-formulario{
            border: 0.1rem solid grey;
            padding: 3rem;
            border-radius: 2rem;
            box-shadow: 2rem 2rem grey;
        }
        .nome-usuario h1{
            text-align:center;
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
            margin:30%;
        }
        .tabela-produtos tr th{
            background-color: white;
        }
        .tabela-produtos tr td{
            background-color: lightgreen;
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
           
            
            <form action="http://localhost/sistema_formulario/ProdutoConfirm.php" method="POST">
                
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

                    <div class="botao-salvar">
                        <button><a>Salvar</a></button>
                    </div>
                    <div class="botao-salvar">
                        <button><a>Salvar</a></button>
                    </div>
                </div>
            </form>
        </div>

        <div class="produtos-cadastrados">
        <?php 
               
            // if ($_SERVER["REQUEST_METHOD"] == "POST") {       
            //     $nome = htmlspecialchars($_POST['nomepro']);
            //     $numeroid = htmlspecialchars($_POST['numid']);
            //     $quantidade = htmlspecialchars($_POST['quantidade']);
            // }

            // session_start();
            // if (!isset($_SESSION['produtos'])) {
            //     $_SESSION['produtos'] = [];
            // }

            // if ($_SERVER['REQUEST_METHOD'] == 'POST' 
            //     && !empty($_POST['nomepro']) 
            //     && !empty($_POST['numid'] 
            //     && !empty($_POST['quantidade']))){
               
            //     $produto = [
            //         'nomepro' => $_POST['nomepro'],
            //         'numid' => $_POST['numid'],
            //         'quantidade' => $_POST['quantidade'],
            //     ];

            //     $_SESSION['produtos'][] = $produto;
                 
            // }
        ?>

            <div class="nome-usuario">
                <h1><?php echo $_SESSION['nome'] ?></h1>
            </div>

            <table class="tabela-produtos">
                <tr>
                    <th>Nome</th>
                    <th>Nº Identificador</th>
                    <th>Quantidade</th>
                </tr>
               
                <?php
                    
                    if (!empty($array_produtos)) {

                        foreach ($array_produtos as $produto){

                            echo "  <tr>

                                        <td>". $produto['nomepro']      ."</td>
                                        <td>". $produto['numid']        ."</td>
                                        <td>". $produto['quantidade']   ."</td>
                                        
                                    </tr>";

                        }
                    }
                
                ?>

                <!-- <tr>

                    <td><?php echo ($produto['nomepro'])?></td>
                    <td><?php echo ($produto['numid'])?></td>
                    <td><?php echo ($produto['quantidade'])?></td>
                    
                </tr> -->
                    
            </table>
        </div>
        <script src="botao_cor.js"></script>

    </div>
</body>
</html>