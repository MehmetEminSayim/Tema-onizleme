
<div class="col-md-12">
    <h4 class="m-b-lg">
        Kategoriler
        <a href="<?php echo base_url("kategori/new_form"); ?>" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($this->basic_model->getTable('kategoriler'))){?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır lütfen ürün ekleyiniz</p>
                </div>
            <?php } else {?>

                <table class="table table-hover content-container ">
                    <thead>

                    <th>#id</th>
                    <th>Sözleşme Adi</th>

                    </thead>
                    <tbody>

                    <?php foreach ($this->basic_model->getTable('kategoriler') as $item){?>
                        <tr>


                            <td><?php echo $item->id; ?></td>
                            <td> <?php echo $item->kategori_adi; ?></td>

                            <td>

                                <a href="<?php echo base_url("kategori/delete/$item->id")?>" class="btn btn-sn btn danger "><i class="fa fa-pencil-square-o"></i> Sil</a>
                                <a href="<?php echo base_url("kategori/update_form/$item->id")?>" class="btn btn-sn btn warning "><i class="fa fa-pencil-square-o"></i> Düzenle</a>


                            </td>


                        </tr>
                    <?php }?>

                    </tbody>
                </table>

            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>

