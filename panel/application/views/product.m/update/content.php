<div class="col-md-12">
    <h4 class="m-b-lg">
       <?php echo $item->title."kaydını düzenle"; ?>
        <a href="#" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <form action="<?php echo base_url("new_product/update/$item->id"); ?>" method="post">
                    <div class="form-group">

                        <label>Tema Adı</label>
                        <input  class="form-control" placeholder="" name="title" value="<?php echo $item->title ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:15pt; color:red; font-family: Verdana" >
                                <?php echo form_error("title"); ?>
                            </small>
                    <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>Url</label>
                        <input  class="form-control" placeholder="" name="url" value="<?php echo $item->url ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:15pt; color:red; font-family: Verdana" >
                                <?php echo form_error("url"); ?>
                            </small>
                        <?php } ?>

                    </div>

                    <div class="form-group">

                        <label>Tema Fiyat</label>
                        <input  class="form-control" placeholder="" name="tema_fiyat" value="<?php echo $item->tema_fiyat ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:15pt; color:red; font-family: Verdana" >
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




                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("new_product"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
