<?php
// В данный файл не вносите изменения
// Папка ABOLink должна быть расположена в корне сайта
// ABOLink - Руководство https://bit.ly/ABOLink

function ABOLink($param, $charset=false) {
    
    $url = urlencode($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $dir = 'http://cdn.abo.ua/?url=';
    
    if(function_exists('curl_init')){
        $ch = curl_init($dir.$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);
        
        if($res){
            $res = ($res)?json_decode($res, true):false;
            $param  = ($param)?$param:'ANCOR';
            $result = ($res)?$res[$param]:'No json data.';
        }
        else {
            $result = 'No data.';
        }
        
    }
    else {
        $result = 'Not exist curl_init.';
    }

    echo ($charset) ? iconv('UTF-8', $charset, $result) : $result;
}

?>
