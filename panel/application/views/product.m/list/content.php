
<div class="col-md-12">
    <h4 class="m-b-lg">
        Temalar
        <a href="<?php echo base_url("new_product/new_form"); ?>" class="btn pull-right btn-primary btn-sm"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($this->basic_model->getTable('products'))){?>

            <div class="alert alert-info text-center">
                  <p>Burada herhangi bir veri bulunmamaktadır lütfen ürün ekleyiniz</p>
            </div>
            <?php } else {?>

            <table class="table table-hover content-container ">
             <thead>

                <th><i class="fa fa-reorder"></i></th>
                <th>#id</th>
                <th>Başlık</th>
                <th>Tema Linki</th>
                <th>Fiyat</th>
                <th>Kategori</th>



             </thead>
                <tbody class="sortable">

                <?php foreach ($this->basic_model->getTable('products') as $item){?>
                    <tr id="ord-<?php echo $item->id; ?>">

                        <td><i class="fa fa-reorder"></i></td>
                        <td><?php echo $item->id; ?></td>
                        <td> <?php echo $item->title; ?></td>
                        <td> <?php echo limit_text($item->url,5); ?></td>
                        <td><?php echo $item->tema_fiyat; ?></td>
                        <td><?php echo $this->basic_model->getTable('kategoriler',['id' => $item->tema_kategori],true)->kategori_adi; ?></td>


                        <td>

                            <a href="<?php echo base_url("new_product/delete/$item->id")?>" class="btn btn-sn btn warning "><i class="fa fa-pencil-square-o"></i> Sil</a>
                            <a href="<?php echo base_url("new_product/update_form/$item->id")?>" class="btn btn-sn btn warning "><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                            <a href="<?php echo base_url("new_product/image_form/$item->id")?>" class="btn btn-sn btn dark "><i class="fa fa-image"></i> Resimler</a>

                        </td>


                    </tr>
                <?php }?>

                </tbody>
            </table>

            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>

