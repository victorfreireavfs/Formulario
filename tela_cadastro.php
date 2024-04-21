<?php

// abrir tag php <?php?

    // UTILIZADOS PARA VERIFICAÇÃO E EXIBIÇÃO OU NÃO DOS ELEMENTOS DA TELA;
    $permitir_email = 1;

    $exibe_email  = 1;


    // - adicione uma configuração para não exibir o campo sobrenome para o usuario.
    $exibe_sobrenome = 1;
    

    // - adicione uma configuração que se estiver habilitada irá bloquear o campo CELULAR.
    $bloquear_celular = 1;


    // - Adicione uma configuração que se estiver habilitada irá mudar a cor de fundo.
    $background_color = 0;

	// - Se 'EXIBIR EMAIL' e 'EXIBIR SOBRENOME' estiverem habilitados, adicionar CAMPO DATA DE NASCIMENTO, do tipo date, na tela.
    $exibir_data_nascimento = ($exibe_email == 1 && $exibe_sobrenome == 1);

	// - exibir a data atual no final da tela.
    // - função date() do php, pegar date e hora, formatação da exibição 
        
   $hora = date("H:i:s");

	// - Se a hora atual estiver entre 6h até 12h, exibir o fundo branco.
	// - Se a hora atual estiver entre 12:01h até 17h, exibir o fundo cinza.
	// - Se a hora atual estiver entre 17:01h até 5:59h, exibir o fundo preto.

    $_POST['nome']              = '';
    $_POST['sobrenome']         = '';
    $_POST['email']             = '';
    $_POST['celular']           = '';
    $_POST['senha']             = '';
    $_POST['senhaconfirm']      = '';
    $_POST['datanascimento']    = '';

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){        
        $_POST['nome']              = $_POST['nome'];
        $_POST['sobrenome']         = $_POST['sobrenome'];
        $_POST['email']             = $_POST['email'];
        $_POST['celular']           = $_POST['celular'];
        $_POST['senha']             = $_POST['senha'];
        $_POST['senhaconfirm']      = $_POST['senhaconfirm'];
        $_POST['datanascimento']    = $_POST['datanascimento'];
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<title>Cadastro Usuário</title>
    <style>
        body{
            
            <?php 
                echo 'background-color: '. (($background_color == 1) ? 'black':'none') .';';

                // echo 'background-color: ';

                // if ($hora>=6 and $hora <12){
                //     echo('white');
                // }else if($hora >= 12 and $hora <17){
                //     echo('gray');
                // } else{
                //     echo('blue');
                // }
                
                // echo(';');
            ?>;
            
            /* background-color: 
            <?php
                if ($hora>=6 and $hora <12){
                    echo('white');
                }else if($hora >= 12 and $hora <17){
                    echo('gray');
                } else{
                    echo('blue');
                }
            ?>; */
        }

        .hora-sistema{
            padding: 0.3rem 0.5rem;
            background-color: lightgray;
            color: black;
            text-align: center;
            margin: 2rem 3rem;
            border-radius: 0.5rem 0.5rem;
            box-shadow: 0.1em 0.1em gray;
        }

        .botao-continuar button{
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: gray;
            padding: 6px;
            border-radius: 5px;
            cursor: pointer;
        }
        .botao-continuar button:hover{
            background-color: rgba(128, 128, 128, 0.76);
        }
        .formulario .botao-continuar button {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        </style>
    </head>
<body>
    <div class="conteudo">
        <div class="imagem-formulario">
            <img src="imagens/imagem-cadastro.jpg" alt="imagem">
        </div>
        
        <div class="formulario">
           
            <form action="http://localhost/formulario/CadastroConfirm.php" method="POST">
              
                <input type="hidden" name="tela_cadastro" value="1">

                <div id="cabecalho-formulario_" class="cabecalho-formulario">
                    <div class="titulo">
                        <h1>Cadastre-se</h1>
                    </div>
                    
                    <div class="botao-login">
                        <button><a href="tela_login.php">Login</a></button>
                    </div>
                </div>

                <div class="grupo-input">
                    <div class="caixa-input">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="<?php echo $_POST['nome']?>" placeholder="Digite seu primeiro nome" required>
                    </div>
                    
                    <?php if($exibe_sobrenome == 1) { ?>

                        <div class="caixa-input">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" name="sobrenome" id="sobrenome" minlength="3" value="<?php echo $_POST['sobrenome']?>" placeholder="Digite seu sobrenome" required>
                        </div>

                    <?php } ?>

                    <?php if($exibe_email == 1) { ?>

                        <div class="caixa-input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $_POST['email']?>" <?php echo ($permitir_email == 1 ? '': 'disabled') ?> placeholder=" Digite seu email" required>
                        </div>

                    <?php } ?>

                    
                    <div class="caixa-input">
                        <label for="celular">Celular</label>
                        <input type="tel" name="celular" id="celular" value="<?php echo $_POST['celular']?>" <?php echo ($bloquear_celular == 1 ? ' ' : 'disabled');?>  placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="caixa-input">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" maxlength=8 required>
                    </div>

                    <div class="caixa-input">
                        <label for="senhaconfirm">Confirme sua senha</label>
                        <input type="password" name="senhaconfirm" id="senhaconfirm" placeholder="Confirme sua senha" maxlength=8 required>
                    </div>

                    <?php if($exibir_data_nascimento) { ?>
                        <div class="caixa-input">
                            <label for="datanascimento">Data de Nascimento</label>
                            <input type="date" name="datanascimento" id="datanascimento" value="<?php echo $_POST['datanascimento']?>" required>
                        </div>
                    <?php } ?>
                    
                </div>

                <div class="botao-continuar">
                    <button id="btn_salvar">Salvar</button>
                </div>

                <div class="hora-sistema">
                    
                    <?php
                        date_default_timezone_set('America/Sao_Paulo');
                        print_r ("Data atual: "  . date( "d/m/Y "));
                        // echo date( "d/m/Y H:i:s");
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>