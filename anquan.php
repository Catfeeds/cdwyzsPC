<?php

function send_post($url, $post_data) {  
  
  $postdata = http_build_query($post_data);  
  $options = array(  
    'http' => array(  
      'method' => 'POST',  
      'header' => 'Content-type:application/x-www-form-urlencoded',  
      'content' => $postdata,  
      'timeout' => 15 * 60  
    )  
  );  
  $context = stream_context_create($options);  
  $result = file_get_contents($url, false, $context);  
  
  return $result;  
}  
  
//post访问参数 
$post_data = array(  
  'm' => 'wap',  
  'c' => 'index',
'a'=>'init',  
'siteid'=>1
);  
send_post('http://www.cdwyzs.cn/index.php', $post_data);  

?>