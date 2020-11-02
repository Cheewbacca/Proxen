$(document).ready(function(){

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
    
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    function getCookie(name) { 
        var nameEQ = name + "="; 
        var ca = document.cookie.split(';'); 
        for(var i=0 ;i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return 0; // if user hasn`t visit site, return false to set cookies
    }
    
    // This function set cookies for 1 year
    function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/"; // setting cookie
    }

    var images = [
        '/img/man.png',
        '/img/bg2.png',
        '/img/bg3.png',
    ];

    $(images).each(function(){
        var image = $('<img />').attr('src', this); 
    });

    $('.first_section__content__slider').slick(); 
    $('.slick-arrow').text(' ');

    $('.slick-arrow').on('click', function(){
        $('.first_section').toggleClass('femida');
        $('.first_section').toggleClass('man');
    });

    var languages = $('.header__buttons ul li a');

    var lang_arr = {
        'En' : 'en',
        'Рус' : 'ru', 
        'Укр' : 'ua',
        'Fr' : 'fr'
    };

    languages.on('click', function(e){
        languages.removeClass('active');
        $(this).addClass('active');
        setCookie('userLanguage', lang_arr[$(this).text().trim()], 360);
    });

    function getKeyByValue(object, value) {
        for (var prop in object){
            if (object.hasOwnProperty(prop)){
                if (object[prop] === value){
                    return prop;
                }
            }
        }
    }

    if (!getCookie('userLanguage')){
        setCookie('userLanguage', 'ru', 360);
    }else {
        var langText = getKeyByValue(lang_arr, getCookie('userLanguage'));
        languages.removeClass('active');
        languages.each(function(){
            if($(this).text().trim() == langText){
                $(this).addClass('active');
            }
        });
    }

    var practice = $('.practice');

    var i = 1;

    if ($(window).width() > 768){
        setInterval(function(){
            if (i == 3) i = 1;
            practice.animate({opacity: 0}, 1000, function(){
                practice.css({
                   'background-image' : 'url(wp-content/themes/proxen/assets/img/bg' + i.toString() + '.png'
                }).animate({opacity : 1});
            });
            i++;
        },
        10000);
    }
    
});