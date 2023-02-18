//adciona produto no carrinho de compras do usuario
function adicionar(id){
    //lista.push(id);
    $('#message').html('Produto adicionado a sua lista de compras.');
    $('#message').show();
    apagar();
 }

 //esconde a caixa de mensagem
 function apagar(){
   setTimeout(function(){ $('#message').fadeOut(400); },3000);
 }
