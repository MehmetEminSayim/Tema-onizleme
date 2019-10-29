
<div class="col-md-12">
    <h4 class="m-b-lg">
        Site Ayarları
        <a href="<?php echo base_url("ayarlar/new_form"); ?>" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($items)){?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır lütfen ürün ekleyiniz</p>
                </div>
            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>

