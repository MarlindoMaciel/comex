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

 function ativar_tabela(tabela,botao) {
  var table = $('#'+tabela).DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'excel', 'pdf', botao
                ],
      "order": [[ 0, "desc" ]],
      "pagingType": "full_numbers",
      "language": {
                      "sEmptyTable": "Nenhum registro encontrado",
                      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                      "sInfoPostFix": "",
                      "sInfoThousands": ".",
                      "sLengthMenu": "_MENU_ resultados por página",
                      "sLoadingRecords": "Carregando...",
                      "sProcessing": "Processando...",
                      "sZeroRecords": "Nenhum registro encontrado",
                      "sSearch": "Pesquisar",
                      "oPaginate": {
                                      "sNext": "Próximo",
                                      "sPrevious": "Anterior",
                                      "sFirst": "Primeiro",
                                      "sLast": "Último"
                                  },
                      "oAria": {
                          "sSortAscending": ": Ordenar colunas de forma ascendente",
                          "sSortDescending": ": Ordenar colunas de forma descendente"
                      }   
                  }
  });

}