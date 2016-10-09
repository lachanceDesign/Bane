<?php

global $dbName;
$site = "{$dbName}";

$query = 'SELECT * FROM careers WHERE Id LIKE '.title(2).'';
$block = 'jobUped';
$edit = new admin_model();
$edit->query($query,$block);


$method = 'updated';
$location = 'careers';

//updates the record
if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

        $id = addslashes($_POST['id']);
        $job = addslashes($_POST['job']);
        $facility = addslashes($_POST['facility']);
        $script = addslashes($_POST['script']);
        $date = addslashes($_POST['date']);
        $reg = addslashes($_POST['reg']);

        $query = 'UPDATE  `banecare_main`.`careers` SET `Id` =  \''.$id.'\',`Job` =  \''.$job.'\',`Facility` =  \''.$facility.'\',`Region` =  \''.$reg.'\',`Description` =  \''.$script.'\',`Date` =  \''.$date.'\' WHERE  `careers`.`Id` = \''.$id.'\'';

    }

};

$update = new update();
$update->uped($location,$query,$method);

?>