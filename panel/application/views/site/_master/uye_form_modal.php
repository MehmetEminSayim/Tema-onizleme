


<button style="margin-left: 700px;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm">
    Yada Kaydol
</button>



<!-- Modal HTML Markup -->
<div id="ModalLoginForm" class="modal fade" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">


                <form action="<?php echo base_url("users/save"); ?>" method="post">

                    <div class="form-group">


                        <input required class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı adı" name="user_name">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("user_name"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">


                        <input required class="form-control" id="exampleInputEmail1" placeholder="Ad Soyad" name="full_name">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("full_name"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">


                        <input required  class="form-control"  name="email" placeholder="E-posta">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("email"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">


                        <input required class="form-control" id="pass1" name="pasword" placeholder="Sifre">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("pasword"); ?>
                            </small>
                        <?php } ?>
                        <span  class="help-block text-danger sifre-uyari">Şifreler Uyuşmuyor</span>

                    </div>

                    <div class="form-group">

                        <input required class="form-control" id="pass2" name="" placeholder="Sifre tekrar">
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->