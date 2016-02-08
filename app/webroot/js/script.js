$(document).ready(function(){
    $('.search').click(function(e) {
    var $message = $('.s_input');
    if ($message.css('display') != 'block') {
        $message.show();
 
        var firstClick = true;
        $(document).bind('click.myEvent', function(e) {
            if (!firstClick && $(e.target).closest('.s_input').length == 0) {
                $message.hide();
                $(document).unbind('click.myEvent');
            }
            firstClick = false;
        });
    }
    e.preventDefault();
    });
    $('.m_search').click(function(e) {
    var $message = $('.m_input');
    if ($message.css('display') != 'block') {
        $message.show();
 
        var firstClick = true;
        $(document).bind('click.myEvent', function(e) {
            if (!firstClick && $(e.target).closest('.m_input').length == 0) {
                $message.hide();
                $(document).unbind('click.myEvent');
            }
            firstClick = false;
        });
    }
    e.preventDefault();
    });

    $('input[type="radio"]').mousedown(function() { 
        // if it was checked before
        if(this.checked) {
            // bind event to reset state after click is completed
            $(this).mouseup(function() {  
                // bind param, because "this" will point somewhere else in setTimeout
                var radio = this;
                // apparently if you do it immediatelly, it will be overriden, hence wait a tiny bit
                setTimeout(function() { 
                    radio.checked = false; 
                }, 5); 
                // don't handle mouseup anymore unless bound again
                $(this).unbind('mouseup');
            });
        }
    });
    $(".character").lightTabs();
    $('.filter_set').on('click', function(){
        $('.filter_set').removeClass('filter_show');
        $(this).addClass('filter_show');
    });

    var filtr = document.getElementsByClassName('.filtr');
    var input = document.getElementsByTagName('input');
    var button = document.getElementById('btn');
    $('input').on('click', function(){
          var check = $('input').is(":checked");
          if(check){
        button.click();
        };
    });
     $('.mob_filtr').on('click', function(){
          $('.filtr').css('display','block');
          $('.filtr').addClass('filtr_show');       
    });
     $('.mob_filt_title').on('click', function(){
          $('.filtr').css('display','none');
    });
   
    var menu = document.querySelector(".m_menu");
    var mob_part = document.querySelector(".mob_part");
    var close = document.querySelector(".mob_close");
    var m_sub = document.querySelector(".m_sub");
    menu.addEventListener("click", function(){
        mob_part.classList.add("m_show"); 
    });
    close.addEventListener("click", function(){
        mob_part.classList.remove("m_show"); 
    });

});

            (function($){               
    jQuery.fn.lightTabs = function(options){
        
        var createTabs = function(){
            tabs = this;
            i = 0;
            
            showPage = function(i){
                $('.gal_tabs').children("div").hide();
                $('.gal_tabs').children("div").eq(i).show();
                $('.tabs').children("li").removeClass("active");
                $('.tabs').children("li").eq(i).addClass("active");
            }
            
            showPage(0);                
            
            $('.tabs').children("li").each(function(index, element){
                $(element).attr("data-page", i);
                i++;                        
            });
            
            $('.tabs').children("li").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });             
        };      
        return this.each(createTabs);
    };  
})(jQuery);
