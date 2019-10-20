<div class="col-md-12">
    <h4 class="m-b-lg">
        Kaydı Düzenle
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <form action="<?php echo base_url("contract/update/$item->id"); ?>" method="post">

                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input required class="form-control" name="contract_name"  value="<?php echo $item->contract_name ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("contract_name"); ?>
                            </small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label ">Açıklama</label>
                        <textarea name="contract_description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                            <?php echo $item->contract_description ?>
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("contract"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
