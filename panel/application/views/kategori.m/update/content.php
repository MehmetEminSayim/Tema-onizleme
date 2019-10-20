<div class="col-md-12">
    <h4 class="m-b-lg">
        Kategoriyi Düzenle
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <form action="<?php echo base_url("kategori/update/$item->id"); ?>" method="post">

                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input required class="form-control" name="kategori_adi"  value="<?php echo $item->kategori_adi ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("kategori_adi"); ?>
                            </small>
                        <?php } ?>
                    </div>


                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("kategori"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
