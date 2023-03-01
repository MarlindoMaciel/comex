//processa calculos do itens x quantidades x total 
function Soma(){
  var soma = 0;
  $('.ids').each(function(){
    var id = $(this).val();
    var valorparcial = parseFloat($('#valor_unitario_'+id).html()) * $('#quantidade_'+id).val();
    $('#parcial_'+id).html((valorparcial).toFixed(2));

    var valorItem = parseFloat($('#parcial_'+id).html());

    if(!isNaN(valorItem))
      soma += parseFloat(valorItem);
  });
  
  $('#total').html((soma).toFixed(2));
}


//esconde a caixa de mensagem
function apagar(){
  setTimeout(function(){ $('#mensagem').fadeOut(400); },3000);
  setTimeout(function(){ $('#alertas').fadeOut(400); },3000);
}

//adiciona produto no carrinho de compras do usuario
function adicionar_produto(id){
  $.ajax({
     type: 'GET',
     url: 'operacoes/create',
     data: {
             'id': id
           },
     headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
     success: function (result){
              var retorno = JSON.parse(result);
              $('#mensagem').html(retorno.mensagem);
              $('#mensagem').show();
              apagar();
              $('#quantidade').html(retorno.quantidade);
              $('#quantidade').show();
             }
  });
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