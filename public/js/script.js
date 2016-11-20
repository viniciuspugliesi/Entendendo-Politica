jQuery(document).ready(function($){
   
    $(".button-collapse").sideNav();
    $('.parallax').parallax();
    $('.conteudo_principal').hide().fadeIn(6000);
    $('.modal-trigger').leanModal();

    $(document).on('click', '.img-abas div > a', function(e){
        e.preventDefault();
       
        var $id = $(this).attr('href');
        
        $('.tabs a[href="'+$id+'"]').trigger('click');
    });
    
    $(document).on('click', '.tabs .tab > a', function(){
        var $poder = $(this).attr('href').substring(5);
        
        Materialize.showStaggeredList('#id-list-'+$poder);
    });
});