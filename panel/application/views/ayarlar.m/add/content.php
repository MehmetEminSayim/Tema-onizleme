<div class="col-md-12">
    <h4 class="m-b-lg">
        Yeni Kullanıcı Ekle
        <a href="#" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>


<div class="col-md-12">
    <form action="<?php echo base_url("ayarlar/save"); ?>" method="post">
    <div class="widget">
        <div class="m-b-lg nav-tabs-horizontal">
            <!-- tabs list -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">Site Bilgileri</a></li>
                <li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Logo Değiştir</a></li>
                <li role="presentation"><a href="#tab-3"  aria-controls="tab-2" role="tab" data-toggle="tab">Sözleşme Ekle</a></li>
                <li role="presentation"><a href="#tab-4"  aria-controls="tab-2" role="tab" data-toggle="tab">Banka Hesap Bilgileri</a></li>
            </ul><!-- .nav-tabs -->


            <!-- Tab panes -->
                    <div class="tab-content p-md">
                        <div role="tabpanel" class="tab-pane in active fade" id="tab-1">
                            <h4 class="m-b-md">Site Metaları</h4>

                            <div class="row ">

                            <div class="form-group col-md-6">
                                <label>Meta Adı 1</label>
                                <input required class="form-control" id="exampleInputEmail1" placeholder="" name="site_metaları">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                        <?php echo form_error("site_metaları"); ?>
                                    </small>
                                <?php } ?>
                            </div>


                        <div class="form-group col-md-6">
                            <label>Meta Adı 2</label>
                            <input required class="form-control" id="exampleInputEmail1" placeholder="" name="meta2">
                            <?php if (isset($form_error)) { ?>
                                <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                    <?php echo form_error("meta2"); ?>
                                </small>
                            <?php } ?>
                        </div>
                            </div>
                            <div class="row" >

                    <div class="form-group col-md-6" >
                        <label>Meta Adı 3</label>
                        <input required class="form-control" id="exampleInputEmail1" placeholder="" name="meta3">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("meta3"); ?>
                            </small>
                        <?php } ?>
                    </div>



                <div class="form-group col-md-6">
                    <label>Meta Adı 4</label>
                    <input required class="form-control" id="exampleInputEmail1" placeholder="" name="meta4">
                    <?php if (isset($form_error)) { ?>
                        <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                            <?php echo form_error("meta4"); ?>
                        </small>
                    <?php } ?>
                </div>
                            </div>
            </div><!-- .tab-pane  -->

                        <div role="tabpanel" class="tab-pane fade" id="tab-2">
                            <h4 class="m-b-md">Logo değiştiriniz</h4>
                            <div class="form-group">
                                <label>Görsel Seçiniz</label>
                                <input type="file" name="site_logo" class="form-control">
                            </div>
                        </div><!-- .tab-pane  -->

                        <div role="tabpanel" class="tab-pane fade" id="tab-3">
                            <h4 class="m-b-md">Sözleşme Ekle</h4>

                            <label>Sözleşme Adı</label>
                            <input  class="form-control" name="sozlesme_adi">
                            <?php if (isset($form_error)) { ?>
                                <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                    <?php echo form_error("sozlesme_adi"); ?>
                                </small>
                            <?php } ?>
                            <div class="form-group">
                                <label ">Açıklama</label>
                                <textarea name="sozlesme_aciklama" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                            </div>



                    </div><!-- .tab-pane  -->

                        <div role="tabpanel" class="tab-pane fade" id="tab-4">
                            <h4 class="m-b-md">Banka Hesap Bilgileri</h4>
                            <div class="form-group">
                                <label ">Açıklama</label>
                                <textarea name="sozlesme_aciklama" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                            </div>
                    </div><!-- .tab-content  -->

        </div><!-- .nav-tabs-horizontal -->
    </div><!-- .widget -->

        <button type="submit"  class="btn btn-primary">Kaydet</button>
        <a href="<?php echo base_url("ayarlar"); ?>" class="btn btn-md btn danger ">İptal</a>
    </form>
</div><!-- END column -->



