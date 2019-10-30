
<div class="col-md-12">
    <h4 class="m-b-lg">
        Kullanıcılar
        <a href="<?php echo base_url("users/new_form"); ?>" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($this->basic_model->getTable('users'))){?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır lütfen ürün ekleyiniz</p>
                </div>
            <?php } else {?>

                <table class="table table-hover content-container ">
                    <thead>


                    <th>#id</th>
                    <th>Yetkisi</th>
                    <th>Ad Soyad</th>
                    <th>E-posta</th>


                    </thead>
                    <tbody>

                    <?php foreach ($this->basic_model->getTable('users') as $item){?>
                        <tr>


                            <td><?php echo $item->id; ?></td>
                            <td> <?php echo $item->level; ?></td>
                            <td> <?php echo $item->full_name; ?></td>
                            <td><?php echo $item->email; ?></td>

                            <td>

                                <a href="<?php echo base_url("users/delete/$item->id")?>" class="btn btn-sn btn danger "><i class="fa fa-pencil-square-o"></i> Sil</a>
                                <a href="<?php echo base_url("users/update_form/$item->id")?>" class="btn btn-sn btn warning "><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                <a href="<?php echo base_url("users/update_pasword_form/$item->id")?>" class="btn btn-sn btn purple "><i class="fa fa-key"></i>Şifre Değiştir</a>

                            </td>


                        </tr>
                    <?php }?>

                    </tbody>
                </table>

            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>

