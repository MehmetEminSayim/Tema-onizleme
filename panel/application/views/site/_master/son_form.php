
<style>
    .btn_mod {
        position:absolute;
        left:0;
        background-color: seagreen;
        right:0;
        margin-left:200px;
        margin-right:auto;
        margin-bottom:50px;
        padding: 12px;
    }


</style>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn_mod" data-toggle="modal" data-target="#exampleModalCenter">
    Havale İle Ödeme
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="margin-right: 800px;">
        <div class="modal-content" style="width: 1100px; height:500px; margin-right: 1200px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Havale Ödeme Bilgileri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="col-md-12">
                <legend style="text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bold;">

                </legend>


                <div id="ortala" class="col-md-6">

                    <form class="form-horizontal" style="position: center;" action="<?php echo base_url("home/save"); ?>" method="post" enctype="multipart/form-data">
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input required id="textinput" name="adi_soyadi" type="text" placeholder="Ad Soyad" class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input required id="textinput" name="e_posta" type="email" placeholder="Eposta" class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input required id="textinput" name="telefon_no" maxlength="10" type="text" placeholder="Telefon numarası" class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input required id="textinput" name="domain" type="text" placeholder="Domain " class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input required id="textinput" name="ns_alanı" type="text" placeholder="Ns alanı" class="form-control input-md">
                                </div>
                            </div>



                            <!-- Select Basic -->
                            <div class="form-group">

                                <div class="col-md-12">
                                    <select required id="selectbasic" name="banka_bilgileri" class="form-control">
                                        <option required value="Havale">Havale </option>
                                        <option value="eft" disabled>Kartla Ödeme</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input required type="checkbox" id="" name="sozlesme_kabul"/> Hizmet Sözleşmesi şartlarını okudum ve kabul ediyorum.
                                </div>
                            </div>


                            <input type="hidden" name="tema" value="<?php  echo $tema?>">



                            <!-- Button -->
                            <div class="form-group">

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                                </div>
                            </div>


                        </fieldset>

                    </form>

                </div>
                <div id="ortala" class="col-md-6">
                    <h5 style="text-align: center; font-size: 24px; font-family: sans-serif, Verdana;">Havale İle Ödeme</h5>
                    <p style="text-align: center; padding: 20px; line-height: 25px; font-weight: bold;">Havale İle Ödeme
                        Banka havalesi ile ödemek için açıklama kısmına ürünün adını yazarak aşağıda belirtilen hesap numarasına tutarı ödeyiniz.
                        Ödeme dekontunu ve sipariş bilgilerinizi (adres, isim, telefon) aşağıda belirtilen e-posta adresine iletiniz.
                        Ödeme teyidi alındıktan sonra temanız web sitenizde aktif olacaktır.<br>
                        ENGİN TUTAR / FINANSBANK / TR75 0011 1000 0000 0038 5585 01<br>
                        ENGİN TUTAR / ZİRAATBANK / TR75 0011 1000 0000 0038 5585 01<br>
                        ENGİN TUTAR / İŞBANK /     TR75 0011 1000 0000 0038 5585 01<br>
                        ENGİN TUTAR / CEPBANK /    TR75 0011 1000 0000 0038 5585 01<br>
                        E-POSTA ADRESİ : engintutar@gmail.com</p>




                </div>


            </div>

        </div>
    </div>
</div>