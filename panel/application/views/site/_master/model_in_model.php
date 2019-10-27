
<style>
    .btn-lg {
        position:absolute;
        left:0;
        background-color: seagreen;
        right:0;
        margin-left:0px;
        margin-right:auto;
        margin-top:px;
    }


</style>

<script>
    //set button id on click to hide first modal
    $("#signin").on( "click", function() {
        $('#myModal1').modal('hide');
    });
    //trigger next modal
    $("#signin").on( "click", function() {
        $('#myModal2').modal('show');
    });
</script>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
    Kartla Ödeme
</button>

<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-body">



            </div>


        </div>
    </div>
</div>

