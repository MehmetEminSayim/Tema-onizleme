<!-- Button trigger modal -->
<span  data-toggle="modal" data-target="#exampleModal">
    <?php echo $this->basic_model->getRow('site_ayarlari',['id' => 0])->sozlesme_adi3 ?>
</span>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="color: #0b0b0b;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">  Müşteri Sözleşmesi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <legend style="text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bold;">
                    Hizmet Sözleşmesi
                </legend>
                <?php echo $this->basic_model->getRow('site_ayarlari',['id' => 0])->sozlesme_aciklama3 ?>

            </div>
        </div>
    </div>
</div>



