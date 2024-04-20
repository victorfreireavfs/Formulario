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
    
    document.getElementById('campo_cor').style.display = 'none';
    this.style.display = 'none';
    document.getElementById('botao_cor').style.display = 'inline';
});