<?php

$alert = $this->session->userdata("alert");

if ($alert){

    if($alert["type"] === "success"){ ?>
        <script>
            iziToast.success({
                title: 'Heyyy',
                message: '<?php echo $alert["text"]; ?>',
                position : "topCenter"
            })
        </script>

   <?php } else { ?>

        <script>
            iziToast.error({
                title: 'Heyyy',
                message: '<?php echo $alert["text"]; ?>',
                position : "topCenter"
            })
        </script>

    <?php }
} ?>


