




<!--<?if($this->session->flashdata('save2')):?>
    <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('save2')?> </p>
    <label for="">İşleminiz Başarılı </label>
<?endif?>
 -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>


            <form class="form-horizontal" action="<?php echo base_url("home/save"); ?>" method="post" enctype="multipart/form-data">
            <fieldset>


                <legend style="text-align: center">Sipariş Formu</legend>
                <!-- Text input-->
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="textinput" name="adi_soyadi" type="text" placeholder="Ad Soyad" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="textinput" name="e_posta" type="text" placeholder="Eposta" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="textinput" name="telefon_no" type="text" placeholder="Telefon numarası" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="textinput" name="domain" type="text" placeholder="Domain " class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input id="textinput" name="ns_alanı" type="text" placeholder="Ns alanı" class="form-control input-md">
                    </div>
                </div>



                <!-- Select Basic -->
                <div class="form-group">

                    <div class="col-md-4">
                        <select id="selectbasic" name="banka_bilgileri" class="form-control">
                            <option value="Havale">Havale </option>
                            <option value="eft">Kartla Ödeme</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4">
                        <input type="checkbox" id=""/> Üyelik Sözleşmesi şartlarını okudum ve kabul ediyorum.
                    </div>
                </div>


                <input type="hidden" name="tema" value="<?php  echo $tema?>">



                <!-- Button -->
                <div class="form-group">

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    </div>
                </div>


            </fieldset>
        </form>


    </div>

</div>

