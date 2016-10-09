
<?php

$url = new cms();
$url->parseUrl();
$tits = array($url->parseUrl());
global $sName;
$siteN = "{$sName}";
if(links() == ''.ROOT.$title.'-skilled-nursing-home-rehabilitation' || links() == ''.ROOT.$title.'-skilled-programs-services' || links() == ''.ROOT.$title.'-leadership-team' || links() == ''.ROOT.$title.'-skilled-nursing-photo-gallery' || links() == ''.ROOT.'Abbott-House-Alliance' || links() == ''.ROOT.'Devereux-House-Alliance' || links() == ''.ROOT.'Rosewood-Alliance' || links() == ''.ROOT.$title.'-contact-referrals' || links() == ''.ROOT.$title.'-Assisted-Living-Residence'){
    $tities = substr(links(),24);
    $tities = ucwords(str_replace('-',' ',$tities));
}else{
    $tities = $heading;
}

$loca = '';

if(links() == 'http://www.banecare.com/John-Scott-House-skilled-nursing-home-rehabilitation'){
    $loca = ' Braintree';
};

$metaKey = array(

''.title(2).''=>array(

'name'=>''.$title.'',

'title'=>'
<title>'.$siteN.' - '.$tities.$loca.'</title>',

'keyWords'=>'<meta name="keywords" content="'.$keywords.'" />',

'script'=>'
<meta name="description" content="'.$script.'" />',

'link'=>'
<link rel="canonical" href="'.links().'">'
	
)

);

if($script == 'false'){
	
	echo '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
	echo $metaKey[title()]['title'];
	
	}else if(isset($tits[0][3])){
			
    echo '
    <meta name="keywords" content="BaneCare, Posts, Blog Posts, Skilled Nursing, Rehab, '.bloggy($tits[0][2]).'" />
    <meta name="description" content="BaneCare News & Media '.bloggy($tits[0][2]).'" />
    <link rel="canonical" href="'.links().'">
    <title>'.$siteN.' - News Post - '.bloggy($tits[0][2]).'</title>
    ';
			
			}else if(title(2) === $metaKey[title(2)]['name']){
    
		echo $metaKey[title(2)]['keyWords'];
		echo $metaKey[title(2)]['script'];
		echo $metaKey[title(2)]['link'];
		echo $metaKey[title(2)]['title'];
		
		};

?>

        