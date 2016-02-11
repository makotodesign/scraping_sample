<?php
function h($v){
return htmlspecialchars($v,ENT_QUOTES,'UTF-8');
}

require_once(__DIR__.'/../lib/simple_html_dom.php');

spl_autoload_register(function($val){
    require_once(__DIR__.'/../lib/'.$val.'.php');
}); 


