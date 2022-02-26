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
    });    

});	

