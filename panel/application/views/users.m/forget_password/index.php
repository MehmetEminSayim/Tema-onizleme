<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view("inculudes/header"); ?>
    <?php $this->load->view("users.m/login/page_style"); ?>
</head>

<body class="simple-page">

    <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?>

</body>
</html>
