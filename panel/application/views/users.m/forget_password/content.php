<div class="simple-page-wrap">
    <div class="simple-page-logo animated swing">
        <a href="index.html">
            <span><i class="fa fa-gg"></i></span>
            <span>Fbar</span>
        </a>
    </div><!-- logo -->
    <div class="simple-page-form animated flipInY" id="reset-password-form">
        <h4 class="form-title m-b-xl text-center">Lütfen mail adresinizi giriniz</h4>

        <form action="<?php echo base_url("sifremi-sifirla") ?>" method="post">
            <div class="form-group">
                <input required name="gelen_mail" type="email" class="form-control" placeholder="E-posta">
            </div>

            <button class="btn btn-outline">Sifremi Sıfırla</button>
        </form>
    </div><!-- #reset-password-form -->

</div><!-- .simple-page-wrap -->