
// function salvarDados() {

//     // Encontrar todos os elementos editáveis na tabela
//     var celulas = document.querySelectorAll('#tabelaEditavel td[contenteditable="true"]');
//     var dados = [];

//     celulas.forEach(function(celula, index) {
//         dados.push(celula.innerText);
//     });

//     // Criar um formulário para enviar os dados
//     var form = new FormData();
    
//     for (let i = 0; i < dados.length; i++) {
//         form.append('dados[]', dados[i]);
//     }

//     fetch('CadastroConfirm.php', {
//         method: 'POST',
//         body: form
//     })
//     .then(response => response.text())
//     .then(texto => alert("Dados salvos com sucesso!"))
//     .catch(erro => console.error('Erro ao salvar dados:', erro));
// }

function alterarUsuario(elemento)
{
    console.log(elemento)
    
    // PEGANDO O NÚMERO DA LINHA PELO ATRIBUTO 'linha' CRIADO no botão.
    linha = elemento.getAttribute('linha');
    console.log(elemento.getAttribute('linha'))
    
    // PEGANDO O TR TODO PARA PEGAR AS INFORMAÇÕES DO PRODUTO.
    tr = document.getElementById('linha_'+ linha);
    console.log( tr )
    
    tds = tr.children;
    console.log( tds )
    
    document.getElementById('usuario_nome').value           = tds[1].innerText;
    document.getElementById('usuario_sobrenome').value      = tds[2].innerText;
    document.getElementById('usuario_email').value          = tds[3].innerText;
    document.getElementById('usuario_celular').value        = tds[4].innerText;
    document.getElementById('usuario_dataNascimento').value = tds[5].innerText;
    
    document.getElementById('formAlterarUsuario').submit();
}

