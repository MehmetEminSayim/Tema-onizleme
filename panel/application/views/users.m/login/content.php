<div class="simple-page-wrap">
    <div class="simple-page-logo animated swing">
        <a href="index.html">
            <span><i class="fa fa-gg"></i></span>
            <span>Kullanıcı Girişi</span>
        </a>
    </div><!-- logo -->
    <?php if ($this->session->flashdata('login') == 'mail_error'):?>
        <div class="alert alert-danger" role="alert">
            <strong>Hata..! </strong>
            <span>Böyle bir mail yok. Lütfen Mail'inizi Kontrol Ediniz</span>
            <a href="#" class="alert-link"></a>
        </div>
    <?php elseif ($this->session->flashdata('login') == 'pass_error'):?>
        <div class="alert alert-danger" role="alert">
            <strong>Hata..! </strong>
            <span>Şifren yanlış.</span>
            <a href="#" class="alert-link">alert link</a>
        </div>
    <?php elseif ($this->session->flashdata('login') == 'uath_error'):?>
        <div class="alert alert-danger" role="alert">
            <strong>Hata..! </strong>
            <span>Giriş yapmak için oturumunuzu başlatın.</span>
            <a href="#" class="alert-link">alert link</a>
        </div>
    <?php elseif ($this->session->flashdata('login') == 'logout'):?>
        <div class="alert alert-success " role="alert">
            <strong>Başarılı! </strong>
            <span>Oturum sonladırıldı.</span>
            <a href="#" class="alert-link">alert link</a>
        </div>
    <?php endif;?>
    <div class="simple-page-form animated flipInY" id="login-form">
        <h4 class="form-title m-b-xl text-center">Admin Hesabınızla Giriş Yapın</h4>
        <form action="<?php echo  base_url("userop/do_login"); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input id="sign-in-email" type="email" class="form-control" placeholder="Email" name="user_email">
            </div>

            <div class="form-group">
                <input id="sign-in-password" type="password" class="form-control" placeholder="Şifre" name="user_pasword">
            </div>

            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
    </div><!-- #login-form -->

    <div class="simple-page-footer">
        <p><a href="password-forget.html">Şifremi Unuttum?</a></p>

    </div><!-- .simple-page-footer -->