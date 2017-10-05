<?php

// Inicial existente: http://www.zara.com/es/es/-c436065p3938531.html
$inicial=3938525;

$j=0;
for ($i=0;$i<5;++$i)
{
    $url="http://www.zara.com/es/es/-c436065p".($inicial + $i).".html";
    $handler = curl_init($url);
    curl_setopt($handler, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handler,CURLOPT_MAXREDIRS, 2);
    

    // No devolver el cuerpo, solo la respuesta
    curl_setopt($handler,CURLOPT_NOBODY, true);
    curl_exec ($handler);

    $info = curl_getinfo($handler);


    curl_close($handler);  
    //echo $response;
    echo "<pre>";
    print_r($info); 
    echo "</pre>";

    sleep(5);

    if (strpos($info["url"],"/es/es/-") > 0)
    {
        $res[$j]['url'] = $url;
        $res[$j]['url_redirect']= $info["url"];
        ++$j;
        
    }

}
echo "<pre>";
print_r($res);
echo "</pre>";


foreach($res as $fila)
{
    echo '<a href="'.$fila["url_redirect"].'" target="_blank">'.$fila["url_redirect"].'</a><br>';
}




?>
