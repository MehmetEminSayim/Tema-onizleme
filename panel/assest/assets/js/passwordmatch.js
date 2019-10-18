$('#pass1, #pass2').keyup(function() {
    if ($('#pass1').val() == $('#pass2').val()){
        $('#kaydet').prop('disabled',false);
        $('.sifre-uyari').hide();
    }else{
        $('.sifre-uyari').show();
        $('#kaydet').prop('disabled',true);
    }
});

$(document).ready(function () {
    $('#kaydet').prop('disabled',true);
    $('.sifre-uyari').hide();
})