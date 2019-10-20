
<div class="col-md-12">
    <h4 class="m-b-lg">
        Sözleşmeler
        <a href="<?php echo base_url("contract/new_form"); ?>" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($this->basic_model->getTable('contracts'))){?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır lütfen ürün ekleyiniz</p>
                </div>
            <?php } else {?>

                <table class="table table-hover content-container ">
                    <thead>

                    <th>#id</th>
                    <th>Sözleşme Adi</th>
                    <th>Açıklama</th>

                    </thead>
                    <tbody>

                    <?php foreach ($this->basic_model->getTable('contracts') as $item){?>
                        <tr>


                            <td><?php echo $item->id; ?></td>
                            <td> <?php echo $item->contract_name; ?></td>
                            <td> <?php echo limit_text($item->contract_description,5) ?></td>


                            <td>

                                <a href="<?php echo base_url("contract/delete/$item->id")?>" class="btn btn-sn btn danger "><i class="fa fa-pencil-square-o"></i> Sil</a>
                                <a href="<?php echo base_url("contract/update_form/$item->id")?>" class="btn btn-sn btn warning "><i class="fa fa-pencil-square-o"></i> Düzenle</a>


                            </td>


                        </tr>
                    <?php }?>

                    </tbody>
                </table>

            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>

