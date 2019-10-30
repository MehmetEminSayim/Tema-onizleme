


<!-- Modal HTML Markup -->
<div id="ModalKayitForm" class="modal fade" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" style="text-align: center">Sifremi Unuttum</h1>
            </div>
            <div class="modal-body">


                <div class="simple-page-wrap">
                    <div class="simple-page-logo animated swing">
                        <a href="index.html">
                            <span><i class="fa fa-gg"></i></span>
                            <span>Infinity</span>
                        </a>
                    </div><!-- logo -->
                    <div class="simple-page-form animated flipInY" id="reset-password-form">
                        <h4 class="form-title m-b-xl text-center">Lütfen mail adresinizi giriniz</h4>

                        <form action="<?php echo base_url("sifremi-sifirla") ?>" method="post">
                            <div class="form-group">
                                <input id="reset-password-email" type="email" class="form-control" placeholder="email">
                            </div>

                            <button class="btn btn-outline">Sifremi Sıfırla</button>
                        </form>
                    </div><!-- #reset-password-form -->

                </div><!-- .simple-page-wrap -->



            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->