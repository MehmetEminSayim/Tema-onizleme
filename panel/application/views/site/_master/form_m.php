
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
    <div class="modal-content col-md-12" style="width: 400px; height: 200px; margin-left: 500px;">
        <span class="close">&times;</span>




    <div class="col-md-12">
        <legend style="text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bold;">
            Ödeme Seçenekleri
        </legend>


        <?php $this->load->view("site/_master/son_form",array('tema' => $current_theme_uniq)); ?>
        <?php $this->load->view("site/_master/model_in_model",array('tema' => $current_theme_uniq)); ?>


    </div>

    </div>

</div>




