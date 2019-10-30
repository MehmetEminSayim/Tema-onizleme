
<div class="col-md-12">
    <h4 class="m-b-lg">
       Siparis Detay
        <button id="yazdir" type="button" href="<?php echo base_url("siparis/detail2"); ?>" class="btn pull-right btn-primary btn-sm"><i class="fa fa-file"></i> Pdf Oluştur.</button>
    </h4>
</div>

<div class="row">
    <div class="col-md-6" style="margin-left: 25%">
        <div class="widget">
            <div class="widget-body">
                <div id="yazdirmaalani" style="text-align: center">

                    <p style="font-size: 18px; font-weight: bold;">FATURA BİLGİLERİ</p><br>
                    <label>Sipariş Verenin Adı:</label>
                <span><?php echo $item->adi_soyadi; ?></span><br>
                    <label>E Maili:</label>
                <span><?php echo $item->e_posta; ?></span><br>
                    <label>Telefonu:</label>
                <span><?php echo $item->telefon_no; ?></span><br>
                    <label>Domain Adresi:</label>
                <span><?php echo $item->domain;  ?></span><br>
                    <label>Ns Yönlendirme Alanı:</label>
                <span><?php echo $item->ns_alanı; ?></span><br>
                    <label>Ödeme Türü:</label>
                <span><?php echo $item->odeme_tipi; ?></span><br>
                    <label>Sipariş Teması:</label>
                <span><?php echo $item->tema; ?></span><br>

                </div>

            </div>
        </div>

    </div>
</div>

