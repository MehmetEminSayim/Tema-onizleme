<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view("inculudes/header"); ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->



<!-- APP NAVBAR ==========-->
<?php $this->load->view("inculudes/nav_bar"); ?>
<!--========== END app navbar -->



<!-- APP ASIDE ==========-->
<?php $this->load->view("inculudes/aside"); ?>
<!--========== END app aside -->



<!-- navbar search -->
<?php $this->load->view("inculudes/navbar_search"); ?>
<!-- .navbar-search -->



<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">

            <?php $this->load->view("dasbordum.v/content"); ?>
        </section><!-- #dash-content -->
    </div><!-- .wrap -->




    <!-- APP FOOTER -->
    <?php $this->load->view("inculudes/main_footer"); ?>
    <!-- /#app-footer -->
</main>
<!--========== END app main -->



<!-- build:js ../assets/js/core.min.js -->
<?php $this->load->view("inculudes/inculude_script"); ?>
</body>
</html>
