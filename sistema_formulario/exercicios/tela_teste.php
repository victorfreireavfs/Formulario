<?php

    // if( $_SERVER['REQUEST_METHOD'] == 'POST' )
    // {
    //     // echo "<pre>";
    //     // print_r( $_POST );
    //     // echo "<pre>";
    //     // print_r( $_POST['nome'] );
    //     // die;
    // }

    // CODE IGNITER. UTILIZANDO O MVC COMO ARQUITETURA
    // BOOTSTRAP PARA CSS
    // JQUERY PARA JS

    // FORMATANDO A DATA PARA O FORMATO BR
    $data_formatada = explode('-', $_POST['datanascimento']);

    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";
    // print_r($data_formatada);
    // echo "<pre>";
    // print_r( $data_formatada[2] .'/'. $data_formatada[1] .'/'. $data_formatada[0]  );
    
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela Informações</title>
    <style>
        .btn-voltar button{
            border: none;
        }

        .btn-voltar button a{
            padding: 5px 15px;
            border-radius: 5px;  
            background-color: gray;
            border: none;
            font-weight: bold;
            color: white;
            text-decoration: none;
            margin-top: 3rem;
        }
        
        .formulario{
            line-height: 3rem;
            font-weight: bold;
            text-decoration: underline;
        }

        .formulario .btn-cores{
            display: flex;
            align-items: center; 
            padding: 1rem  0;
            justify-content: space-between;
            
        }

        /* BOTÃO BLACK */
        .formulario .btn-cor-black button{
            padding: 0.5rem;
            background-color: black; 
            text-decoration: none;
            color: white;
            cursor: pointer;
            font-weight:bold;
        }
        
        /* BOTÃO GOLD */
        .formulario .btn-cor-gold button{
            padding: 0.5rem;
            background-color: gold; 
            text-decoration: none;
            color: black;
            cursor: pointer;  
            font-weight:bold;
        }

        /* BOTÃO GRAY */
        .formulario .btn-cor-gray button{
            padding: 0.5rem;
            background-color: gray; 
            text-decoration: none;
            color: white;
            cursor: pointer;
            font-weight:bold;
        }

        .btn_espaco{
            margin: 0px 10px;
        }
    </style>
</head>
<body>
    <div class="conteudo">
        <div class="imagem-formulario">
            <img src="imagens/imagem-cadastro.jpg" alt="imagem">
        </div>
        
        <div class="formulario">
          
            <div class="btn-cores">
                <div class="btn_espaco btn-cor-black">
                    <button onclick="mudarCorDeFundo('black')">BLACK</button>
                </div>
                <div class="btn_espaco btn-cor-gold">
                    <button onclick="mudarCorDeFundo('gold')">GOLD</button>
                </div>
                <div class="btn_espaco btn-cor-gray">
                    <button onclick="mudarCorDeFundo('gray')">GRAY</button>
                </div>
            </div>
            
           <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $nome = ($_POST['nome']);
                $sobrenome = ($_POST['sobrenome']);
                $email = ($_POST['email']);
                $celular = ($_POST['celular']);
                $datanascimento = ($_POST['datanascimento']);
                $senha = ($_POST['senha']);
                $senhaconfirm = ($_POST['senhaconfirm']);
         
                if($senha != $senhaconfirm){
                    echo "Senhas não coincidem. Favor, tente novamente.";
                } else{  
                    echo "Nome: " . $nome . "<br>";
                    echo "Sobrenome: " . $sobrenome . "<br>";
                    echo "E-mail: " . $email. "<br>";
                    echo "Celular: " . $celular. "<br>";
                    echo "Data de nascimento: " . ( $data_formatada[2] .'/'. $data_formatada[1] .'/'. $data_formatada[0]) . "<br>";               
                }
            }
            ?>

            <div class= "btn-voltar">
                <!-- <button onclick= "window.location.href='index.php';">Voltar para tela de cadastro</button> -->
                <button><a href="index.php">Voltar para tela de cadastro</a></button>   
            </div>
       </div>
    </div>

    <script>
        function mudarCorDeFundo(black) {
        document.body.style.backgroundColor = black}

        function mudarCorDeFundo(gold){
        document.body.style.backgroundColor = gold}

        function mudarCorDeFundo(gray) {
        document.body.style.backgroundColor = gray}
    </script>

</body>
</html>