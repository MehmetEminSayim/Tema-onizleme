<div class="col-md-12">
    <h4 class="m-b-lg">
        Şifreyi değişiriyorsunuz
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <form action="<?php echo base_url("users/update_pasword/$item->id"); ?>" method="post">

                    <div class="form-group">

                        <label>Şifre</label>
                        <input required class="form-control" id="pass1" name="pasword">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("pasword"); ?>
                            </small>
                        <?php } ?>
                        <span  class="help-block text-danger sifre-uyari">Şifreler Uyuşmuyor</span>

                    </div>

                    <div class="form-group">

                        <label>Şifre Tekrar</label>
                        <input required class="form-control" id="pass2" name="re_pasword">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("re_pasword"); ?>
                            </small>
                        <?php } ?>

                    </div>




                    <button type="submit" id="kaydet" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("users"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
