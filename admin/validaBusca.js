$(document).ready( function(){
  
      $('#btnBusca').click(function(){
          if($('#nomePessoa').val() == ''){
              alert('Sua Postagem Está Vazia');
              $('#nomePessoa').css({'border-color':'#A94442'});
              campoVazio = true;
          }
  
          if($('#nomePessoa').val().length > 0){
  
              $.ajax({
                  url :'admin/getPessoas.php',
                  method:'POST',
                  data:$('#formBuscaPessoa').serialize(), //Requisição AJAX para processar a postagem e evitar que a página tenha que ser recarregada a cada POST
                  success : function(data){
                      $('#pessoas').html(data);

                      $('.btn_seguir').click(function(){
                          var idUsuario = $(this).data('id_usuario');
                          
                          $.ajax({
                             url:'admin/follow.php',
                             method : 'POST',
                             data : {seguirIDusuario : idUsuario},
                             success : function(data){
                                 alert('Requisição realizada com Sucesso');
                             }  

                          });
                      });

                      $('.btn_unfollow').click(function(){
                        var idUsuario = $(this).data('id_usuario');
                        
                        $.ajax({
                           url:'admin/unfollow.php',
                           method : 'POST',
                           data : {deixarseguirIDusuario : idUsuario},
                           success : function(data){
                               alert('Remoção realizada com Sucesso');
                           }  

                        });
                    });

                  }

  
              });
  
          }
      });
  
  });	
  