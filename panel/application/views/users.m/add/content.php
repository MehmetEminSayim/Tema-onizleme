<div class="col-md-12">
    <h4 class="m-b-lg">
        Yeni Kullanıcı Ekle
        <a href="#" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php echo base_url("users/save"); ?>" method="post">

                    <div class="form-group">

                        <label>Kullanıcı Adı</label>
                        <input required class="form-control" id="exampleInputEmail1" placeholder="" name="user_name">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("user_name"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>Ad Soyad</label>
                        <input required class="form-control" id="exampleInputEmail1" placeholder="" name="full_name">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("full_name"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>E-posta</label>
                        <input required  class="form-control"  name="email">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("email"); ?>
                            </small>
                        <?php } ?>

                    </div>

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
                        <input required class="form-control" id="pass2" name="">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error(""); ?>
                            </small>
                        <?php } ?>

                    </div>


                    <button type="submit" id="kaydet" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("users"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>

