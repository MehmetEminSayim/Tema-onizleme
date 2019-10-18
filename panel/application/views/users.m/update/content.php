<div class="col-md-12">
    <h4 class="m-b-lg">
        Kaydı Düzenle
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <form action="<?php echo base_url("users/update/$item->id"); ?>" method="post">

                    <div class="form-group">

                        <label>Kullanıcı Adı</label>
                        <input required class="form-control" name="user_name"  value="<?php echo $item->user_name ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("user_name"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>Ad Soyad</label>
                        <input required class="form-control" name="full_name" value="<?php echo $item->full_name ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("full_name"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>E-posta</label>
                        <input required  class="form-control"  name="email" value="<?php echo $item->email ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("email"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>Şifre</label>
                        <input required class="form-control" name="pasword" value="<?php echo $item->pasword ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("pasword"); ?>
                            </small>
                        <?php } ?>

                    </div>




                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("users"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
