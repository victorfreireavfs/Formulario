document.getElementById('botao_cor').addEventListener('click', function() {
    
    document.getElementById('campo_cor').style.display = 'inline';
    document.getElementById('botao_aplicar').style.display = 'inline';
    this.style.display = 'none';
});

document.getElementById('botao_aplicar').addEventListener('click', function() {
    
    var color = document.getElementById('campo_cor').value;
    
    if (color) {
        document.body.style.backgroundColor = color;
    }
    
    document.document('campo_cor').style.display = 'none';
    this.style.display = 'none';
    document.getElementById('botao_cor').style.display = 'inline';
});

// FUNÇÂO CANCEÇAR ALTERAÇÕES
function recarregarPagina(){
    window.location.reload();
};

// FUNÇÃO ALTERAR PRODUTO   

function alterarProduto(elemento)
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
    
    document.getElementById('nomepro').value = tds[1].innerText;
    document.getElementById('numid').value = tds[2].innerText;
    document.getElementById('quantidade').value = tds[3].innerText;

    document.getElementById('numid').setAttribute('readonly', 'readonly');

}

function salvarDados() {
    // Encontrar todos os elementos editáveis na tabela
    var celulas = document.querySelectorAll('#tabelaEditavel td[contenteditable="true"]');
    var dados = [];

    celulas.forEach(function(celula, index) {
        dados.push(celula.innerText);
    });

     // Criar um formulário para enviar os dados
     var form = new FormData();
     for (let i = 0; i < dados.length; i++) {
         form.append('dados[]', dados[i]);
     }

     fetch('CadastroConfirm.php', {
        method: 'POST',
        body: form
    })
    .then(response => response.text())
    .then(texto => alert("Dados salvos com sucesso!"))
    .catch(erro => console.error('Erro ao salvar dados:', erro));
}