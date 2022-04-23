var Logo = document.querySelector('.logo');
var img = document.querySelector('.img_logo');
var imgSrc =  img.getAttribute('data-src');
var homeUrl = document.querySelector('.home-url').href;

// thanh tìm kiếm
$('.search').on('click',function(){
    var inputText = $('.bg-input-header');
        if(inputText.css('display') == 'none'){
            $('.bg-input-header').show(300);
    
        }else{
            $('.bg-input-header').hide(300); 
        }    
})

$('.bg-input-header i').on('click',function(){
    var inputText = $('.bg-input-header');
        if(inputText.css('display') == 'none'){
            $('.bg-input-header').show(300);
    
        }else{
            $('.bg-input-header').hide(300); 
        }    
})


// button bar menu mobile
function myFunction(x) {
  x.classList.toggle("change");
}

$('.container-bar').on('click', function() {
	$('.menu-mobile').slideToggle();
});

// menu pc
$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 260) {
            $('.bg-banner').addClass('sticky');
        }
        else {
             $('.bg-banner').removeClass('sticky');
        }
    })
})

// menu mobile

