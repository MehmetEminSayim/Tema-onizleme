<script src="<?php echo base_url("assest"); ?>/libs/bower/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url("assest"); ?>/libs/bower/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url("assest"); ?>/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?php echo base_url("assest"); ?>/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="<?php echo base_url("assest"); ?>/libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url("assest"); ?>/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?php echo base_url("assest"); ?>/libs/bower/PACE/pace.min.js"></script>
<!-- endbuild -->

<!-- build:js/assets/js/app.min.js -->
<?php $this->load->view("inculudes/library"); ?>
<script src="<?php echo base_url("assest"); ?>/assets/js/plugins.js"></script>
<script src="<?php echo base_url("assest"); ?>/assets/js/app.js"></script>
<!-- endbuild -->
<script src="<?php echo base_url("assest"); ?>/libs/bower/moment/moment.js"></script>
<script src="<?php echo base_url("assest"); ?>/libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo base_url("assest"); ?>/assets/js/fullcalendar.js"></script>


<?php if (isset($jsSet)) {
    echo $jsSet;
}?>

<?php $this->load->view("inculudes/alert"); ?>




