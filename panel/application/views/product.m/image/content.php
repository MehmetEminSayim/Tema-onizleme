<div class="col-md-12">
    <h4 class="m-b-lg">
        <?php echo $item->title; ?> 'n ait Temanın  fotogarfları
        <a href="#" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body ">

                <form data-url="<?php echo base_url("new_product/refresh_image_list/$item->id"); ?>" action="<?php echo base_url("new_product/image_upload/$item->id"); ?>" id="dropzone" class="dropzone" data-plugin="dropzone" enctype="multipart/form-data" data-options="{ url: '<?php echo base_url("new_product/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buraya sürükleyiniz. </h3>
                        <p class="m-b-lg text-muted">(Resim klasörlerinizden resim seçiniz.)</p>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <hr class="widget-separator">
            <div class="widget-body image_list_container" >

                <?php $this->load->view("{$viewFolder}/{$subViewFolder}/render_element/image_list"); ?>

            </div>
        </div>

    </div>
</div>
