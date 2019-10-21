
<div class="col-md-12">
    <h4 class="m-b-lg">
        Logo
        <a href="<?php echo base_url("logo/new_form"); ?>" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($this->basic_model->getTable('logo'))){?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır lütfen ürün ekleyiniz</p>
                </div>
            <?php } else {?>

                <table class="table table-hover content-container ">
                    <thead>

                    <th>#id</th>
                    <th>logo Adi</th>
                    <th>Görsel</th>

                    </thead>
                    <tbody>

                    <?php foreach ($this->basic_model->getTable('logo') as $item){?>
                        <tr>


                            <td><?php echo $item->id; ?></td>
                            <td> <?php echo $item->logo_adi; ?></td>
                            <td> <?php echo $item->image; ?></td>

                            <td>

                                <a href="<?php echo base_url("logo/delete/$item->id")?>" class="btn btn-sn btn danger "><i class="fa fa-pencil-square-o"></i> Sil</a>

                            </td>


                        </tr>
                    <?php }?>

                    </tbody>
                </table>

            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>

