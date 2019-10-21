
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

                <form action="<?php echo base_url("news/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">

                        <label>Haber Başlığı</label>
                        <input  class="form-control" id="exampleInputEmail1" placeholder="Haber Başlığı" name="title" value="<?php echo $item->title; ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error" style="font-size:10pt; color:red; font-family:sans-serif, Verdana; font-style: italic"; >
                                <?php echo form_error("title"); ?>
                            </small>
                        <?php } ?>

                    </div>
                    <div class="form-group">
                        <label ">Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                              <?php echo $item->description; ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="control-demo-6" class="">Haberin Türü</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control news_type_select" name="news_type">

                                <?php if (isset($form_error)) { ?>

                                    <option <?php echo ($news_type == "image") ? "selected" : ""; ?> value="image">Görsel</option>
                                    <option <?php echo ($news_type == "video") ? "selected" : ""; ?> value="video">Video</option>

                                <?php } else { ?>

                                    <option <?php echo ($item->news_type == "image") ? "selected" : ""; ?> value="image">Görsel</option>
                                    <option <?php echo ($item->news_type == "video") ? "selected" : ""; ?> value="video">Video</option>

                                <?php } ?>

                            </select>
                        </div>
                    </div><!-- .form-group -->




                    <?php if(isset($form_error)){ ?>

                        <div class="form-group image_upload_container" style="display: <?php echo ($news_type == "image") ? "block" : "none"; ?>">
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="img_url" class="form-control">
                        </div>

                        <div class="form-group video_url_container" style="display: <?php echo ($news_type == "video") ? "block" : "none"; ?>">

                            <label>Video Url</label>
                            <input  class="form-control" id="exampleInputEmail1" placeholder="Video_url" name="video_url">


                        </div>


                    <?php } else { ?>

                       <div class="row">
                           <div class="col-md-1 image_upload_container" >
                               <img src="<?php echo base_url("uploads/$viewFolder/$item->img_url") ?>" alt="" class="img-responsive">
                           </div>
                           <div class="form-group image_upload_container" style="display: <?php echo ($item->news_type == "image") ? "block" : "none"; ?>">
                               <label>Görsel Seçiniz</label>
                               <input type="file" name="img_url" class="form-control">
                           </div>
                       </div>

                        <div class="form-group video_url_container"    style="display: <?php echo ($item->news_type == "video") ? "block" : "none"; ?>">

                            <label>Video Url</label>
                            <input  class="form-control" id="exampleInputEmail1" placeholder="Video_url" name="video_url" value="<?php echo $item->video_url ?>">


                        </div>

                    <?php } ?>


                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("news"); ?>" class="btn btn-md btn danger ">İptal</a>
                </form>
            </div>
        </div>

    </div>
</div>

