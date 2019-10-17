$(document).ready(function () {



    $(".sortable").sortable();

    $(".image_list_container, .content-container").on('click', '.tikla-btn', function () {

        /**DATA URL KISMINI OKUMA YAPTIK */
        var $data_url = $(this).data("url");

        swal({
            title: 'Emin misiniz?',
            text: "Bu işlemi geri alamayacaksınız!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil!',
            cancelButtonText : "Hayır"
        }).then(function (result) {
            if (result.value) {

                /**LOCASYONUN U BELİRTEREK BULMAK İSTEDİĞİ URL İ ALDIK */
                window.location.href = $data_url;
            }
        });


    })

/** AKTİFLİK iÇİN */
$(".image_list_container, .content-container").on('change', '.aktifmi', function () {

        var $data= $(this).prop("checked");
        var $data_url = $(this).data("url");

        if (typeof $data !== "undefined" && typeof $data_url !== "undefined"){

            $.post($data_url, { data : $data }, function (response) {
                
            });

        }

    })


    /** Kapak için */
    $(".image_list_container").on('change', '.kapakmı', function () {

        var $data= $(this).prop("checked");
        var $data_url = $(this).data("url");

        if (typeof $data !== "undefined" && typeof $data_url !== "undefined"){

            $.post($data_url, { data : $data }, function (response) {

                $(".image_list_container").html(response);

                $('[data-switchery]').each(function(){
                    var $this = $(this),
                        color = $this.attr('data-color') || '#188ae2',
                        jackColor = $this.attr('data-jackColor') || '#ffffff',
                        size = $this.attr('data-size') || 'default'

                    new Switchery(this, {
                        color: color,
                        size: size,
                        jackColor: jackColor
                    });
                });

                $(".sortable").sortable();

            });

        }

    })



    $(".image_list_container, .content-container").on("sortupdate", '.sortable',function () {

        var $data = $(this).sortable("serialize");
        var $data_url=$(this).data("url");

        $.post($data_url,{data:$data},function (response) {
            alert(response);
            
        })

    })



    var uploadSection = Dropzone.forElement("#dropzone");

    uploadSection.on("complete", function(file){

        var $data_url = $("#dropzone").data("url");

        $.post($data_url, {}, function(response){

            $(".image_list_container").html(response);


            /** chekbox normal görünüm kazandırmak için kullanırız switchery komutunu  */
            $('[data-switchery]').each(function(){
                var $this = $(this),
                    color = $this.attr('data-color') || '#188ae2',
                    jackColor = $this.attr('data-jackColor') || '#ffffff',
                    size = $this.attr('data-size') || 'default'

                new Switchery(this, {
                    color: color,
                    size: size,
                    jackColor: jackColor
                });
            });

            $(".sortable").sortable();

        });

    })

})