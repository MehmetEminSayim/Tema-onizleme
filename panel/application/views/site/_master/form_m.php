
<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin-left: 150px;
        margin-right: 150px;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content col-md-12">
        <span class="close">&times;</span>




    <div class="col-md-12">
        <legend style="text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bold;">
           Sipariş Formu
        </legend>


        <div id="ortala" class="col-md-6">

            <form class="form-horizontal" style="position: center;" action="<?php echo base_url("home/save"); ?>" method="post" enctype="multipart/form-data">
                <fieldset>


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
                            <select required id="selectbasic" name="odeme_tipi" class="form-control">
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
            <span style="text-align: center; padding: 20px; line-height: 25px; font-weight: bold;">
                <?php echo $this->basic_model->getRow('site_ayarlari',['id' => 0])->banka_bilgi ?>
            </span>




        </div>


    </div>

    </div>

</div>




