<div class="simple-page-wrap">
    <div class="simple-page-logo animated swing">
        <a href="index.html">
            <span><i class="fa fa-gg"></i></span>
            <span>Fbar</span>
        </a>
    </div><!-- logo -->
    <div class="simple-page-form animated flipInY" id="reset-password-form">
        <h4 class="form-title m-b-xl text-center">Yeni Şifrenizi Oluşturunuz</h4>

        <form action="<?php echo base_url("userop/re_pw_post") ?>" method="post">
            <div class="form-group">
                <input required name="pw1" type="password" class="form-control" >
            </div>
            <div class="form-group">
                <input required name="pw2" type="password" class="form-control" >
            </div>
            <input type="hidden" name="uid" value="<?php echo $user->id?> ">
            <button type="submit" class="btn btn-outline">Sifremi Değiştir</button>
        </form>
    </div><!-- #reset-password-form -->

</div><!-- .simple-page-wrap -->