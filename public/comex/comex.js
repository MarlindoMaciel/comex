//adciona produto no carrinho de compras do usuario
function adicionar(id){
    //lista.push(id);
    $('#mensagem').html('<i class="fa-solid fa-sm fa-heart"></i> Produto adicionado a sua lista de compras.');
    $('#mensagem').show();
    apagar();
 }

 //esconde a caixa de mensagem
 function apagar(){
   setTimeout(function(){ $('#mensagem').fadeOut(400); },3000);
 }
