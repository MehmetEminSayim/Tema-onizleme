


<div class="modal fade" id="modalOrderForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 style="font-weight: bold; color: #0b0b0b;" class="modal-title w-100 font-weight-bold">Siparişlerim</h4>
                <button id="loginmodal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

                <div class="modal-body mx-3">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Telefon</th><th>Tema adı:</th><th>Ödeme</th>
                        </tr>

                            <?php foreach ($this->basic_model->getTable('kullanici_bilgileri',['satin_alan' => $this->session->userdata('id')]) as $row ):?>
                                <tr>
                                    <td><?php echo $row->telefon_no ?></td>
                                    <td><?php echo $row->tema ?></td>
                                    <td><?php echo $row->odeme_tipi ?></td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>



        </div>
    </div>
</div>



