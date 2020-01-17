require('./bootstrap');
import $ from 'jquery';
$('#nav-menu').on('click', function(){
    if($(this).hasClass('nav-menu')){
    $(this).removeClass('nav-menu');
    $(this).addClass('nav-menu-close');
    $('.navigation').css('display','block');
    }else{
    $(this).removeClass('nav-menu-close');
    $(this).addClass('nav-menu');
    $('.navigation').css('display','none');
    }
    
});
