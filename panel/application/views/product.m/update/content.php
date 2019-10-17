<div class="col-md-12">
    <h4 class="m-b-lg">
       <?php echo $item->title."kaydını düzenle"; ?>
        <a href="#" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body">

                <form action="<?php echo base_url("new_product/update/$item->id"); ?>" method="post">
                    <div class="form-group">

                        <label>Ürünün Adı</label>
                        <input  class="form-control" placeholder="urunadı" name="title" value="<?php echo $item->title ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:15pt; color:red; font-family: Verdana" >
                                <?php echo form_error("title"); ?>
                            </small>
                    <?php } ?>

                    </div>
                    <div class="form-group">
                        <label ">Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                            <?php echo $item->description ?>
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("new_product"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>
