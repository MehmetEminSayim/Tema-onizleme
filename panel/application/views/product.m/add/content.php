<div class="col-md-12">
    <h4 class="m-b-lg">
        Yeni Ürün Ekle
        <a href="#" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php echo base_url("new_product/save"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">

                        <label>Tema Adı</label>
                        <input  class="form-control" id="exampleInputEmail1" placeholder="" name="title">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("title"); ?>
                            </small>
                    <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>url</label>
                        <input  class="form-control" id="exampleInputEmail1" placeholder="" name="url">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("url"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>Tema fiyatı</label>
                        <input  class="form-control" id="exampleInputEmail1" placeholder="" name="tema_fiyat">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("tema_fiyat"); ?>
                            </small>
                        <?php } ?>

                    </div>


                    <div class="form-group ">
                        <label for="control-demo-6" class="col-sm-3">Tema Kategori</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control" name="tema_kategori">
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>Javascript</option>
                                <option>Bootstrap</option>
                                <option>WordPress</option>
                            </select>
                        </div>
                    </div><!-- .form-group -->


                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("new_product"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
