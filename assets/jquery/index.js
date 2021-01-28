/* navbar */
var oculto = $(".oculto");
var btnHam = $("#ham");

btnHam.click(function(){
    oculto.toggleClass("oculto-activo");

    console.log("entra");
})


/* contacta */
var whatsapp = $("#whatsapp");
var numero = $("#numero");
var mail = $("#mail");
var correo = $("#correo");
var instagram = $("#instagram");
var insta = $("#insta");
var facebook = $("#facebook");
var face = $("#face");

whatsapp.hover(function(){
    numero.slideToggle();
    console.log("entra");
})

mail.hover(function(){
    correo.slideToggle();
    console.log("entra");
})

instagram.hover(function(){
    insta.slideToggle();
    console.log("entra");
})

facebook.hover(function(){
    face.slideToggle();
    console.log("entra");
})



