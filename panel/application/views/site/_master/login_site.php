


<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 style="font-weight: bold; color: #0b0b0b;" class="modal-title w-100 font-weight-bold"> Giriş Yap Yada Kaydol  </h4>
                <button id="loginmodal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('userop/do_login')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body mx-3">
                <div class="md-form mb-5 form-group">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" name="user_email" id="defaultForm-email" class="form-control validate" placeholder="Mail">
                </div>

                <div class="md-form mb-4 form-group">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" name="user_pasword" id="defaultForm-pass" class="form-control validate" placeholder="Şifre">
                </div>

            </div>
                <button  class="btn btn-default">Giriş</button>
                <button  type="button" data-toggle="modal" data-target="#ModalKayitForm" class="btn btn-default pull-right">Sifremi Unuttum</button>


            </form>






        </div>



    </div>



</div>





