<?php

error_reporting(0);
function is_firefox() {
    $agent = '';
    // old php user agent can be found here
    if (!empty($HTTP_USER_AGENT))
        $agent = $HTTP_USER_AGENT;
    // newer versions of php do have useragent here.
    if (empty($agent) && !empty($_SERVER["HTTP_USER_AGENT"]))
        $agent = $_SERVER["HTTP_USER_AGENT"];
    if (!empty($agent) && preg_match("/firefox/si", $agent))
        return true;
    return false;
}

function is_windows() {
    $agent = '';
    // old php user agent can be found here
    if (!empty($HTTP_USER_AGENT))
        $agent = $HTTP_USER_AGENT;
    // newer versions of php do have useragent here.
    if (empty($agent) && !empty($_SERVER["HTTP_USER_AGENT"]))
        $agent = $_SERVER["HTTP_USER_AGENT"];
    if (!empty($agent) && preg_match("/windows/si", $agent))
        return true;
    return false;
}

## get current theme name


//$current_theme_url= $_GET['url_value'];
$current_theme = $_GET['theme'];
$theme_found = false;



## build theme data array


$i = 0;
foreach ($siteler as $row){
    $theme_array[$i]['id'] = $row->title;
    $theme_array[$i]['url'] = $row->url;
    $theme_array[$i]['preview'] = base_url('uploads/').$this->basic_model->getTable('product_img',['tema_id' => $row->id],true)->img_url;
    $theme_array[$i]['type'] = $this->basic_model->getTable('kategoriler',['id' => $row->tema_kategori],true)->kategori_adi;
    $theme_array[$i]['type_color'] = "ec6334";
    $theme_array[$i]['ddn'] = "http://themeforest.net/user/designingmedia/portfolio?ref=designingmedia";
    $theme_array[$i]['fiyat'] = $row->tema_fiyat;
    $theme_array[$i]['uniq'] = $row->title;
$i++;}


if (!$redirect) :
## get current theme data
    foreach ($theme_array as $i => $theme) :

        if ($theme['id'] == $current_theme) :

            $current_theme_name = ucfirst($theme['id']);
            $current_theme_url = $theme['url'];
            $current_theme_img = $theme['preview'];
            $current_theme_purchase_url = $theme['ddn'];
            $current_theme_fiyat = $theme['fiyat'];
            $current_theme_uniq = $theme['uniq'];

            $theme_found = true;

        endif;
    endforeach;

    if ($theme_found == false) :
        $theme_found = false;
       /** $current_theme_name = $theme_array[0]['id'];
        $current_theme_url = $theme_array[0]['url'];
        $current_theme_purchase_url = $theme_array[0]['ddn'];
        $theme_found = false;*/
    endif;
    ?>

    <!DOCTYPE html>
    <!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
    <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Designing Media Works | Item : <?php if ($theme_found == false) : echo $current_theme_name; else: echo $current_theme_name; endif; ?></title>

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!--Bootstrap entegresi -->
    <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- CSS Style -->
    <link rel="stylesheet" href="<?php echo base_url('assest/site/')?>style.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assest/site/')?>images/favicon.ico">

    <!-- Used Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script >
        var theme_list_open=false;
        $(document).ready(function(){function e(){var e=$("#switcher")
            .height();$("#iframe")
            .attr("height",
                $(window).height()-e+"px")}
            IS_IPAD=navigator.userAgent.match(/iPad/i)!=null;
            $(window).resize(function(){e()}).resize();
            $("#theme_select").click(function(){if(theme_list_open==true){
                $(".center ul li ul").hide();theme_list_open=false}else{
                $(".center ul li ul").show();theme_list_open=true}return false});
            $("#theme_list ul li a").click(function(){var e=$(this).attr("rel").split(",");
                $("li.purchase a").attr("href",e[1]);
                $("li.remove_frame a").attr("href",e[0]);
                $("#iframe").attr("src",e[0]);
                window.location.href = "?theme="+e[2]+""
                $("li.close a").attr("src",e[0]);
                $("#theme_list a#theme_select").text($(this).text());
                $(".center ul li ul").hide();theme_list_open=false;return false});
            $("#header-bar").hide();clicked="desktop";var t={desktop:"100%",tabletlandscape:1040,tabletportrait:788,mobilelandscape:500,mobileportrait:340,placebo:0};jQuery(".responsive a").on("click",function(){var e=jQuery(this);for(device in t){console.log(device);console.log(t[device]);if(e.hasClass(device)){clicked=device;jQuery("#iframe").width(t[device]);if(clicked==device){jQuery(".responsive a").removeClass("active");e.addClass("active")}}}return false});if(IS_IPAD){
                $("#iframe").css("padding-bottom","60px")
            }}
        )
    </script>

</head>

<body>

<div id="switcher">
    <div class="center">
        <div class="logo">
            <a href="<?php echo $this->basic_model->getTable('logo',['id' => 4],true)->image;?>" title="Designing Media Works"><img src="<?php echo base_url('uploads/').$this->basic_model->getTable('logo',['id' => 4],true)->image?>" width="60" height="40" style="margin-top: 5px; border-radius: 2px;" alt="Designing Media Themes" /></a>
        </div>

        <div style=" min-width: 30px">
            <select style="background-color: #;
		                border: none;
		                float: left;
		                margin-top: 3px;
		                opacity:1;
		                margin-left: 20px;
	                    color: white;
	                    padding: 8px 20px;
	                    border-radius: 3px;
	                    text-align: center;
	                    text-decoration: none;
	                    display: inline-block;
	                    "
                    class="toprak" onchange="temegetir(this.value)" >
                <option>Kategori seçiniz...</option>
                <?php foreach ($this->basic_model->getTable('kategoriler') as $item){?>
                    <option value="<?php echo $item->id; ?>"> <?php echo $item->kategori_adi; ?></option>
                <?php }?>
            </select>
        </div>


<div style="min-width: 10px">
        <ul style="" class="col-md-2">
            <li  id="theme_list"><a id="theme_select" href="#">
                    <?php
                    if ($theme_found == false) : echo "Tema Seçiniz..."; else: echo $current_theme_name; endif; ?></a>
                <ul class="temayazdir">
                    <?php ?>
                    <?php
                    foreach ($theme_array as $i => $theme) :
                        echo '<li class="button_a">
					<a href="#" rel="' . $theme['url'] . ',' . $theme['ddn'] . ','.$theme['id'].'">' .
                            $_SESSION['currentthemename']= ucfirst($theme['id']) .' <span style="background:#'.$theme['type_color'].'">'.$theme['type'].'</span></a>';
                        if(isset($theme['preview'])){
                            echo '<img width="500px;" height="300px"  alt="" class="preview" src="';
                            if(strpos($theme['preview'], 'http://') === false){
                                echo 'product_previews/'.$theme['preview'];
                            }
                            else echo $theme['preview'];
                            echo '">';
                            $_SESSION['currentthemename'] =$theme['url'];
                            $current_theme=$_SESSION['currentthemename'];
                        }
                        echo '</li>';
                    endforeach;
                    ?>
                </ul>
            </li>
        </ul>
</div>





       <div class="responsive">
            <a href="#" class="desktop active" title="View Desktop Version"></a>
            <a href="#" class="tabletlandscape" title="View Tablet Landscape (1024x768)"></a>
            <a href="#" class="tabletportrait" title="View Tablet Portrait (768x1024)"></a>
            <a href="#" class="mobilelandscape" title="View Mobile Landscape (480x320)"></a>
            <a href="#" class="mobileportrait" title="View Mobile Portrait (320x480)"></a>
        </div>

        <!-- Modal çekimi -->
        <?php $this->load->view("site/_master/form_m",array('tema' => $current_theme_uniq)); ?>



        <?php if ($this->session->flashdata('success')=='yes'):?>
            <div class="alert alert-success col-md-6" role="alert" style="text-align: center;" >
                <strong style="font-size: 22px; font-weight: ; font-family:sans-serif, Verdana;">Tebriklerr! </strong></br>
                <span style="font-size: 18px; font-weight: ;">
                    Siparişiniz Başarılı Bir Şekilde Ulaşmıştır.Bizi seçtiğiniz için teşekkür ederiz...
                </span>
                <a href="#" class="alert-link"></a>
            </div>
        <?php endif;?>

        <?php if ($this->session->flashdata('error')=='no'):?>
            <div class="alert alert-success" role="alert" style="text-align: center;">
                <strong style="font-size: 22px; font-weight: bold; font-family:Arial, Helvetica, sans-serif;">Tebriklerr! </strong></br>
                <span style="font-size: 18px; font-weight: bold;">Siparişiniz Başarılı Bir Şekilde Ulaşmıştır.Bizi seçtiğiniz için teşekkür ederiz...</span>
                <a href="#" class="alert-link"></a>
            </div>
    <?php endif;?>

        <ul class="links">
            <?php if ($current_theme_url || $current_theme_img ):?>
            <li class="purchase" rel="<?php echo $current_theme_purchase_url; ?>">

               <a id="myBtn"><img src="<?php echo base_url('assest/site/')?>images/purchase.png" alt="Web Design Tunes Themes" > Satın Al <?php echo '₺', $current_theme_fiyat?></a>

            </li>


        </ul>
        <button  style="background-color: #4CAF50;
		                border: none;
		                float: right;
		                margin-top: 3px;
		                margin-right: 20px;
	                    color: white;
	                    padding: 8px 20px;
	                    border-radius: 3px;
	                    text-align: center;
	                    text-decoration: none;
	                    display: inline-block;
	                    font-size: 16px;">
            <a href="https://api.whatsapp.com/send?phone=905555555555">
                <img src="<?php echo base_url('assest/site/')?>images/11111.png" > Whatsapp Sipariş
            </a>
        </button>
<?php endif;?>
    </div>
</div>

    <?php if ($current_theme_url):?>
<iframe id="iframe" src="<?php echo $current_theme_url; ?>" frameborder="0" width="100%"></iframe>
    <?php elseif ($current_theme_img):?>
    <iframe id="iframe" src="<?php echo $current_theme_img; ?>" frameborder="0" width="100%;"></iframe>
    <?php endif;?>



<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>


</body>


<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 7%;
        background-color: grey;
        opacity: 0.5;
        color: white;
        text-align: -webkit-center;
    }
</style>

<div class="footer">

    <p>Copyright <?php echo date("Y");?> Editör: Mehmet Emin SAYIM  | Tüm haklar saklıdır.</p>
    <span><?php $this->load->view("site/_master/modal_footer"); ?></span>
</div>


<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<style>
    .toprak {

        min-width: 40px;
        padding: 8px 15px;
        opacity:1;
        margin-top: 1px;
        font-family: sans-serif, Verdana;
        font-weight: bold;
        background-color: #2b2b2b;
        color: #dfdfdf;

    }

</style>


<!--#2b2b2b -->

<script type="text/javascript">
var baseuri = '<?php echo base_url('uploads/')?>';
var baseuri2 = '<?php echo base_url('')?>';
    function temegetir(temaid) {
        $.ajax({
            url: "<?php echo base_url('home/urun_tema')?>",
            type: "post",
            data: {temaid:temaid} ,
            dataType: 'json',
            success: function (data) {
                $('.temayazdir').empty();
                $.each(data, function( i ){
                    $('.temayazdir').append('<li class="button_a">\n' +
                        '\t\t\t\t\t<a  href="'+baseuri2+'?theme='+data[i].title+'" >'+data[i].title+' <span style="background:#ec6334">'+data[i].kategori_adi+'</span></a><img width="500px;" height="300px" alt="" class="preview" src="'+baseuri+data[i].img_url+'"></li>')
                });
            }
        });
    }


</script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

</html>
<?php
endif;
?>