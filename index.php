<?php
require_once(__DIR__.'/config/config.php');
//スクレイピング文字化け対策
mb_language('Japanese');
$source=file_get_html('http://www.find-job.net/fj/search.cgi?shokushu=205&kinmuchi=9&keitai=2&from=23&category=0&ky_kind=0&ky_from=0&do_search=1&keyword=%CC%A4%B7%D0%B8%B3');
$source=mb_convert_encoding($source, 'utf8', 'auto');
$dom=str_get_html($source);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>jobserch_test</title>
</head>
<body>
<div class="container">
    <?php
    foreach($dom->find('div[class=fj-search-contents-box]') as $box):
    echo $box;
    
   
    endforeach; 
    ?>
</div>   
    
</body>
</html>