
    $(document).ready(function(){
        SyntaxHighlighter.all();

        $('#logo').click(function(){
            $('html,body').animate({scrollTop: 0}, 'slow');
        });
        
        $(window).scroll(function(){
            $('#menu a').each(function(){
                if ($($(this).attr('href')).offset().top-24 <= $(window).scrollTop()){
                    $('#menu a').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
        });

        $('#menu a').click(function(e){
            e.preventDefault();
            $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top-24}, 'slow');
        });
    });