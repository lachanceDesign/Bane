<?php
$url = new cms();
$url->parseUrl();
$tits = array($url->parseUrl());
global $sName;
$siteN = "{$sName}";
$tities = substr(links(),24);
$tities = str_replace('-',' ',$tities);

$metaKey = array(

''.title(2).''=>array(

'name'=>''.$title.'',

'title'=>'
<title>'.$siteN.' - '.$title.'</title>',

'keyWords'=>'<meta name="keywords" content="'.$keywords.'" />',

'script'=>'
<meta name="description" content="'.substr(strip_tags($script),0,120).'" />',

'link'=>'
<link rel="canonical" href="'.links().'">'

)

);

echo $metaKey[title(2)]['keyWords'];
echo $metaKey[title(2)]['script'];
echo $metaKey[title(2)]['link'];
echo $metaKey[title(2)]['title'];

?>