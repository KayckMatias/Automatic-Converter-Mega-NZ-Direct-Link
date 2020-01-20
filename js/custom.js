var linkInput = $("#mega_url");
var convertedInput = $("#mega_url_converted");

var buttonConvert = $("#btn_convert");

var divConvert = $('#div_convert');
var divLoading = $('#div_loading');

function copyText(){
    convertedInput.select(); 
    if(document.execCommand('copy')){
        M.toast({html: 'Copiado! (Success - M2)'});
    }
}
function convertLink(){
    if(linkInput.val() == ""){
        M.toast({html: 'Digite um Link para Converter! (Error - M3)'});
    }else if(isUrl(linkInput.val()) == false){
        M.toast({html: 'Link Inválido! (Error - M5)'});
    }else if(isUrlMega(linkInput.val()) == false){
        M.toast({html: 'Não é um Link do Mega.nz! (Error - M6)'});
    }else{
        buttonConvert.attr("disabled", "disabled");
        buttonConvert.html("Convertendo...");
        divLoading.removeClass("hide");
        divConvert.addClass("hide");
        $.post("ajax/get_link.php", {link:linkInput.val()} , function(data){
            convertedInput.val(data);
            buttonConvert.removeAttr("disabled");
            buttonConvert.html("Converter");
            divLoading.addClass("hide");
            divConvert.removeClass("hide");
        });
    }
}

$(document).keyup(function(e) {
    if(e.keyCode == 86){
        convertLink();
    }
});

function isUrl(url) {
    var res = url.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
    return (res !== null);
};
function isUrlMega(url){
    var protocol = 'https://'
    var host = 'mega.nz'
    var file = '#'
    var id = '[a-zA-Z0-9]{0,8}'
    var key = '[a-zA-Z0-9_-]+'
    var regex = `${protocol}${host}/${file}!${id}!${key}`;
    var res = url.match(regex);
    return (res !== null);
}