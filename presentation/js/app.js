$(document).ready(function(){
    function textAnim1(){
    setTimeout(function(){
        $('.textAnim1').removeClass('hidden');
        $('.textAnim1').css("color", "white");
    }, 100);
}
textAnim1();

function textAnim2(){
    setTimeout(function(){
        $('.textAnim2').removeClass('hidden');
        $('.textAnim2').css("color", "white");
    }, 1000);
}
textAnim2();

function textAnim3(){
    setTimeout(function(){
        $('.textAnim3').removeClass('hidden');
        $('.textAnim3').css("color", "white");
    }, 1900);
}
textAnim3();

function textAnim4(){
    setTimeout(function(){
        $('.textAnim4').removeClass('hidden');
        $('.textAnim4').css("color", "white");
    }, 2800);
}
textAnim4();

function textAnim5(){
    setTimeout(function(){
        $('.textAnim5').removeClass('hidden');
        $('.textAnim5').css("color", "white");
        $('#image').innerHTML="<img src='../img/becode.png'>";
    }, 4000);
}
textAnim5();

function text() {
    setTimeout(function(){
        $('.text').removeClass("hidden");
        $(".text").css("color", "white");
    }, 6500);
}
text();

let carre = [].slice.call(document.querySelectorAll('.carre'));

let timer = setInterval(coche, 5000); 

function coche() {
    for (let i = 0; i < carre.length; i++){
            document.getElementsByClassName('carre')[i].src = "img/coche.png";
    }
}

//fonction scrolling
$(function(){
    $('a[href*=skills]').on('click', function(e) {
        e.preventDefaul();
    $("html, body").animate({
        scrollTop:
        $(s(this).attr('href')).offset().top}, 500, 'linear');
    });
});

$(function(){
    $('a[href*=contact]').on('click', function(e) {
        e.preventDefaul();
    $("html, body").animate({
        scrollTop:
        $(s(this).attr('href')).offset().top}, 500, 'linear');
    });
});

$(function(){
    $('a[href*=index]').on('click', function(e) {
        e.preventDefaul();
    $("html, body").animate({
        scrollTop:
        $(s(this).attr('href')).offset().top}, 500, 'linear');
    });
});





});