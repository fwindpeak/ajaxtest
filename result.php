<?php

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

function get_dat(){
    $resp = "";
    $MAX_NUM=100;
    $startNum=$_REQUEST['startid'];
    $showNum=$_REQUEST['shownum'];
    

    $maxnum=$MAX_NUM-$startNum;
    
    if($maxnum>$showNum)$maxnum=$showNum;
    else if($maxnum<0)$maxnum=0;
    
    for($i = 1; $i <= $maxnum; $i++)
    {
        
        $num = $startNum+$i -1;
        
        $resp .= "<p><span>".$num.
          "</span> This content is dynamically appended ".
          "to the existing content on scrolling.</p>" ;
        
    }  
        
    
    echo $resp;
    return $resp;
}

get_dat();

?>