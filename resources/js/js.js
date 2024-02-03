$(document).ready(function(){
	// Função para alternar a classe 'active' para o menu lateral e alterar o ícone na barra de navegação ao ser clicado
    $('.nav-bar').on('click', function() {
        // Toggle da classe 'active' no menu lateral
        $('.menu-lateral').toggleClass('active');
        
        // Toggle do ícone na barra de navegação entre 'fa-xmark' e 'fa-bars-staggered'
        $('.nav-bar i').toggleClass('fa-xmark fa-bars-staggered');
    });

    // Inicialização do carrossel usando o plugin 'slick' para a seção de vídeos
    $('.videos .itens').slick({
        dots: true,
        arrows: false,                
        infinite: true,            
        speed: 300,
        autoplay: true,               
        slidesToShow: 3,           
        slidesToScroll: 3,         
        responsive: [
            {
                breakpoint: 1024,   
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,    
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,    
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

   $('a').on('click', function(){
        if($(this).is('[href]')){
            var link = $(this).attr('href');
            if(link.indexOf('#') > - 1){
                event.preventDefault();
                $('.menu-lateral').removeClass('active');
                $('.nav-bar i.fa-xmark').toggleClass('fa-xmark fa-bars-staggered');
                $('html, body').animate({scrollTop: $(link).offset().top - 50}, 1500);
            }
        }
    });

});