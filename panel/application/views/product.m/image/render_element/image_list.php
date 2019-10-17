<?php if (empty($item_images)){?>

    <div class="alert alert-info text-center">
        <p>Burada herhangi bir resim bulunmamaktadır lütfen ürün ekleyiniz</p>
    </div>
<?php } else {?>

    <table class="table table-hover " >

        <thead>
        <th><i class="fa fa-reorder"></i></th>
        <th>#id</th>
        <th>Görsel</th>
        <th>Resim Adı</th>
        <th>Durum</th>
        <th>Kapak</th>
        <th>İşlem</th>
        </thead>
        <tbody class="sortable" data-url="<?php echo base_url("product/imageRankSetter"); ?>">

        <?php foreach ($item_images as $image){ ?>

            <tr id="ord-<?php echo $image->id; ?>">
                <td><i class="fa fa-reorder"></i></td>
                <td><?php echo $image->id; ?></td>
                <td><img width="35" src="<?php echo base_url("uploads/product.m/$image->img_url"); ?>" alt="<?php echo $image->img_url; ?>" class="img-responsive"></td>
                <td><?php echo $image->img_url; ?></td>
                <td> <input
                        data-url="<?php echo base_url("product/imageIsActiveSetter/$image->id"); ?>"
                        class="aktifmi"
                        type="checkbox"
                        data-switchery
                        data-color="#35b8e0"
                    <?php echo ($image->isactive) ? "checked" :""; ?>
                </td>

                <td> <input
                            data-url="<?php echo base_url("product/isCoverSetter/$image->id/$image->urun_id"); ?>"
                            class="kapakmı"
                            type="checkbox"
                            data-switchery
                            data-color="#ff5b5b"
                    <?php echo ($image->iscover) ? "checked" :""; ?>
                </td>


                <td>

                    <button
                            data-url="<?php echo base_url("product/imageDelete/$image->id/$image->urun_id")?>"
                            class="btn btn-sn btn danger tikla-btn ">
                        <i class="fa fa-close"></i> Sil
                    </button>
                </td>
            </tr>
        <?php } ?>


        </tbody>

    </table>

<?php } ?>

