<style type="text/css">
    .form-style-8{
        font-family: 'Open Sans Condensed', arial, sans;
        width: 85%;
        padding: 30px;
        background: #FFFFFF;
        margin: 0px auto;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
        -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
        -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

    }
    .form-style-8 h2{
        background: #4D4D4D;
        text-transform: uppercase;
        font-family: 'Open Sans Condensed', sans-serif;
        color: #797979;
        font-size: 18px;
        font-weight: 100;
        padding: 20px;
        margin: -30px -30px 30px -30px;
    }
    .form-style-8 input[type="text"],
    .form-style-8 input[type="date"],
    .form-style-8 input[type="datetime"],
    .form-style-8 input[type="email"],
    .form-style-8 input[type="number"],
    .form-style-8 input[type="search"],
    .form-style-8 input[type="time"],
    .form-style-8 input[type="url"],
    .form-style-8 input[type="password"],
    .form-style-8 textarea,
    .form-style-8 select
    {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        display: block;
        width: 100%;
        padding: 7px;
        border: none;
        border-bottom: 1px solid #ddd;
        background: transparent;
        margin-bottom: 10px;
        font: 16px Arial, Helvetica, sans-serif;
        height: 45px;
    }
    .form-style-8 textarea{
        resize:none;
        overflow: hidden;
    }
    .form-style-8 input[type="button"],
    .form-style-8 input[type="submit"]{
        -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
        -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
        box-shadow: inset 0px 1px 0px 0px #45D6D6;
        background-color: #2CBBBB;
        border: 1px solid #27A0A0;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 14px;
        padding: 8px 18px;
        text-decoration: none;
        text-transform: uppercase;
    }
    .form-style-8 input[type="button"]:hover,
    .form-style-8 input[type="submit"]:hover {
        background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
        background-color:#34CACA;
    }
</style>
<script type="text/javascript">
    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight)+"px";
    }
</script>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="form-style-8">
            <h2>SİPARİŞ EKRANI</h2>
            <form action="<?php echo base_url("home/save"); ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <input required type="text" name="adi_soyadi" placeholder="Ad Soyad" />
                    <?php if (isset($form_error)) { ?>
                        <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                            <?php echo form_error("adi_soyadi"); ?>
                        </small>
                    <?php } ?>

                </div>

                <input required type="email" name="e_posta" placeholder="Email" />
                <input required type="number" name="telefon_no" placeholder="Telefon Numaranız" />
                <input required type="text" name="domain" placeholder="Kurulacak Domain" />
                <input required type="text" name="ns_alanı" placeholder="Yönlendirilecek ns alanı" />
                <input required type="text" name="banka_bilgileri" placeholder="Banka Hesap Bilgileri" />

                <input type="hidden" name="tema" value="<?php  echo $tema?>">
                <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
            </form>
        </div>
    </div>

</div>

