$(document).ready(function(){
/*function adaptaciya(){
$("#block").css({
"height":$("#block_glavnaya, #block_napravleniya, #block_glavnaya, #block_novosty, #block_kontakty, #block_glavnaya, #block_sobytiya, #block_lichnyy_kabinet, #block_vhod, #block_registraciya").height()+3
});
$("#block_glavnaya, #block_napravleniya, #block_glavnaya, #block_novosty, #block_kontakty, #block_glavnaya, #block_sobytiya, #block_lichnyy_kabinet, #block_vhod, #block_registraciya").css({
"width":$(window).width()/2/2/2-2,
"height":"40px"
});
if($(window).width() >= $(window).height()){
$(".text").css({
"font-size":$(window).width()/2/2/2/2/2/2+1.9,
"margin-top":$("#block_glavnaya, #block_napravleniya, #block_glavnaya, #block_novosty, #block_kontakty, #block_glavnaya, #block_sobytiya, #block_lichnyy_kabinet, #block_vhod, #block_registraciya").height()/5
});
}else{
$(".text").css({
"font-size":$(window).width()/2/2/2/2/2/2+2.4,
"margin-top":$("#block_glavnaya, #block_napravleniya, #block_glavnaya, #block_novosty, #block_kontakty, #block_glavnaya, #block_sobytiya, #block_lichnyy_kabinet, #block_vhod, #block_registraciya").height()/5
});
}
}
setInterval(adaptaciya, 500);*/
//Кнопки верхней панели
$("#fadeNapravleniya").fadeOut();
$("#btn_glavnaya").click(function(){
$("#fadeGlavnaya").fadeIn();

$("#fadeNapravleniya").fadeOut();
});

$("#btn_napravleniya").click(function(){
$("#fadeNapravleniya").fadeIn();

$("#fadeGlavnaya").fadeOut();
 });
});