function showSearchResults(data){
   $('table tbody').html('');
   $.each(data, function(index, el) {
      var options = '<a class="btn btn-inverse" href="edit?id='+el.name+'">Editar</a> '+'<a class="btn btn-inverse" href="delete?id='+el.name+'" data-confirm="Deseja excluir">Excluir</a>';
      var row = '<tr><td>'+el.name+'</td><td>'+el.content+'</td><td class="options">'+options+'</td></tr>';
      $('table tbody').append(row);
   });
}

function showRecentSearchs(data){
   $('.recents ul').html('');
   $.each(data, function(index, el) {
      var recent = '<li><span class="divider"></span><a href="search?search='+el+'">'+el+'</a><span class="divider"></span>';
      $('.recents ul').append(recent);
   });
}

function dataConfirm(){
   $('a[data-confirm]').click(function(e) {
      e.preventDefault();
   
      var location = $(this).attr('href'); 
   
      bootbox.confirm($(this).data('confirm'), function(confirmed) { 
         if (confirmed) { 
            window.location.replace(location); 
         }	  
      });
   });
}

$(document).ready(function() {
dataConfirm();

   /*** BUSCA VIA AJAX **/
   $('#files-search-form').submit(function (){
      var data = $('#files-search-form').serialize()
      jQuery.ajax({
         url: '/blog/files/search', //URL de destino
         method: 'GET',
         dataType: 'json',
         //Tipo de Retorno
         data: data,
         // Dados a serem enviados
         success: function(data) {
            //Se ocorrer tudo certo
            //console.log(data);
            showSearchResults(data.searchs);
            showRecentSearchs(data.recents);
            dataConfirm();
         },
         error: function(request, status, error) {
            //console.log(request);
            alert(error);
         }
      });
      return false;
   });
});
