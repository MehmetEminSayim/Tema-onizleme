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
        </thead>
        <tbody class="sortable" data-url="<?php echo base_url("new_product/imageRankSetter"); ?>">

        <?php foreach ($item_images as $image){ ?>

            <tr id="ord-<?php echo $image->id; ?>">
                <td><i class="fa fa-reorder"></i></td>
                <td><?php echo $image->id; ?></td>
                <td><img width="35" src="<?php echo base_url("uploads/$image->img_url"); ?>" alt="<?php echo $image->img_url; ?>" class="img-responsive"></td>
                <td><?php echo $image->img_url; ?></td>

                <td>

                    <a href="<?php echo base_url("new_product/imageDelete/$image->id/$image->tema_id")?>" class="btn btn-sn btn warning "><i class="fa fa-pencil-square-o"></i> Sil</a>

                </td>

            </tr>
        <?php } ?>


        </tbody>

    </table>

<?php } ?>

