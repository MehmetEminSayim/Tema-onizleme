<?php
    function convertToSeo($text){

        $turkce  = array("ğ", "Ğ", "ç", "Ç", "ş", "Ş", "ü", "Ü", "ö", "Ö", "ı", "İ",",",".","!","''"," ","?","_","=" );
        $convert = array("g", "g", "c", "c", "s", "s", "u", "u", "o", "o", "i", "i","-","-","-","-","-","-","-","-",);

        return strtolower(str_replace($turkce,$convert,$text));

    }

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

function get_readable_date($date){

        setlocale(LC_TIME,"Turkish");
        return strftime('%e %B %Y' , strtotime($date));
}

function debug_preview($arr){
        echo "<pre>";
        print_r($arr);
        return "</pre>";
}

function emin(){
        return '
  __  __      _                    _     ______           _          _____                       
 |  \/  |    | |                  | |   |  ____|         (_)        / ____|                      
 | \  / | ___| |__  _ __ ___   ___| |_  | |__   _ __ ___  _ _ __   | (___   __ _ _   _ _ __ ___  
 | |\/| |/ _ \ \'_ \| \'_ ` _ \ / _ \ __| |  __| | \'_ ` _ \| | \'_ \   \___ \ / _` | | | | \'_ ` _ \ 
 | |  | |  __/ | | | | | | | |  __/ |_  | |____| | | | | | | | | |  ____) | (_| | |_| | | | | | |
 |_|  |_|\___|_| |_|_| |_| |_|\___|\__| |______|_| |_| |_|_|_| |_| |_____/ \__,_|\__, |_| |_| |_|
                                                                                  __/ |          
                                                                                 |___/           
';
}