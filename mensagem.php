
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

            <h1>Operação realizada Com sucesso!</h1>
            <a href="http://localhost/sistema_formulario/tela_login.php">IR PARA LOGIN</a>
            
        </div>
    </div>
</body>
</html>