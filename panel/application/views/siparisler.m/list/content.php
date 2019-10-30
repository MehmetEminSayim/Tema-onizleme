
<div class="col-md-12">
    <h4 class="m-b-lg">
        Gelen Siparişler

    </h4>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if (empty($this->basic_model->getTable('kullanici_bilgileri'))){?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır lütfen ürün ekleyiniz</p>
                </div>
            <?php } else {?>

                <table class="table table-hover content-container ">
                    <thead>

                    <th>#id</th>
                    <th>Adı Soyadı</th>
                    <th>E-posta</th>
                    <th>Telefon</th>
                    <th>Domain</th>
                    <th>Ns Alanı</th>
                    <th>Ödeme Bilgisi</th>
                    <th>Tema Adı</th>
                    <th>Sözleşme Kabul</th>

                    </thead>
                    <tbody>

                    <?php foreach ($this->basic_model->getTable('kullanici_bilgileri') as $item){?>
                        <tr>


                            <td><?php echo $item->id; ?></td>
                            <td> <?php echo $item->adi_soyadi; ?></td>
                            <td> <?php echo $item->e_posta; ?></td>
                            <td> <?php echo $item->telefon_no ; ?></td>
                            <td> <?php echo $item->domain ; ?></td>
                            <td> <?php echo $item->ns_alanı ; ?></td>
                            <td> <?php echo $item->odeme_tipi ; ?></td>
                            <td> <?php echo $item->tema ; ?></td>
                            <td> <?php echo $item->sozlesme_kabul ; ?></td>


                            <td><a href="<?php echo base_url("siparis/delete/$item->id")?>" class="btn btn-sn btn danger "><i class="fa fa-pencil-square-o"></i> Sil</a></td>
                            <td><a href="<?php echo base_url("siparis/detail/$item->id")?>" class="btn btn-sn btn success "><i class="fa fa-eye"></i> Sipariş Detayı</a></td>



                        </tr>
                    <?php }?>

                    </tbody>
                </table>

            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>

