<?php 
// ----------------------FUNÇÃO STR_REPLACE-------------------------
// EXEMPLO 01

// $texto_original = "Meu gato rouba comida o armário. É um gato disgraçado!";
// $texto_modificado = str_replace("gato", "cachorro", $texto_original);
// echo $texto_modificado;

// *str_replace (str original , str nova, $original, / n de subst. )


// EXEMPLO 02

    // $post_original = "Esse filme é uma bosta. Perda de tempo. Não acredito que gastei dinheiro nisso.";

    // $palavras_proibidas = array("uma bosta", "Perda de tempo" , "gastei dinheiro");
    // $palavras_substitutas = array("horrível" , "Não foi do meu agrado", "investi");

    // $post_aceito = str_replace($palavras_proibidas, $palavras_substitutas, $post_original, $total_substituições);
    // echo "Postagem filtrada :" .  $post_aceito , "\n";
    // echo "<br>";
    // echo "Total de substituições: " . $total_substituições;




    // --------------------------FUNÇÃO SUBSTR-----------------------------
// EXEMPLO 01

// *substr($original, posição da str / qtd de posições)

// $contagem = "0123456789";
// $parte = substr($contagem, 0);
// echo $parte;

// EXEMPLO 02

// $texto = "O rato roeu a roupa do Rei de Roma";
// $parte = substr($texto, -11);
// echo $parte;



// -------------------------FUNÇÃO TRIM----------------------------
// EXEMPLO 01

// $texto_original = " eu   nao  vou          para    academia        hoje!";
// // $texto_limpo = trim($texto_original);
// echo (trim($texto_original));
?>
