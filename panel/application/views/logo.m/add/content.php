<div class="col-md-12">
    <h4 class="m-b-lg">
       Logo Ekle
        <a href="#" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php echo base_url("logo/save"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">

                        <label>Logo Adi</label>
                        <input  class="form-control"name="logo_adi">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("logo_adi"); ?>
                            </small>
                    <?php } ?>

                    </div>

                        <div class="form-group">
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("logo"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
