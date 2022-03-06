$(document).ready( function(){
  $('#btn_login').click(function(){
      
      var campoVazio = false;

       if($('#campo_usuario').val() == ''){
           alert('Campo Usuário Está Vazio');
           $('#campo_usuario').css({'border-color':'#A94442'});
           campoVazio = true;
       }

       else{
           $('#campo_usuario').css({'border-color':'#CCC'});
       }

        if($('#campo_senha').val() == ''){
           alert('Campo Senha Está Vazio');
           $('#campo_senha').css({'border-color':'#A94442'});
           campoVazio = true;
       }

       else {
           $('#campo_senha').css()({'border-color':'#CCC'});
       }

       if (campoVazio){
           return false;
       }
    
    });

    $('#btnPostagem').click(function(){
        if($('#textoPostagem').val() == ''){
            alert('Sua Postagem Está Vazia');
            $('#textoPostagem').css({'border-color':'#A94442'});
            campoVazio = true;
        }

        if($('#textoPostagem').val().length > 0){

            $.ajax({
                url :'admin/incluirPostagem.php',
                method:'POST',
                data:$('#formPostagem').serialize(), //Requisição AJAX para processar a postagem e evitar que a página tenha que ser recarregada a cada POST
                success : function(data){
                    $('#textoPostagem').val(''); //Após o Conteúdo Postado , o campo é esvaziado automaticamente
                    atualizaPostagem(); //Após postado o conteúdo , a função é executada para que não haja a necessidade de dar refresh na página
                }

            });

        }
    });

    function atualizaPostagem(){
        //carregar postagens
        $.ajax ({
            url :'admin/getPostagem.php',
            success : function(data){
                $('#postagens').html(data);
            }
        });
    }
    atualizaPostagem();

});	

git config --global user.email "you@example.com"
  git config --global user.name "Your Name"
