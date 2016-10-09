<?php

$location = 'careers';

//deletes records
$delete = new delete();
$delete->del($location);

?>

<a  href="<?php echo ROOT.'Employment-Opportunities-'.$id; ?>"><h3><?php echo $job; ?></h3></a>

  <div class="clearfix"></div>

    <p style="padding-left:0;" class="col-md-8"><?php echo substr($script, 0, 255).'...'; ?><br><br>
    
    </p>

<a href="<?php echo ROOT.'Employment-Opportunities-'.$id; ?>" class="col-md-2 btn btn-new">Apply</a>
<div class="clearfix">&nbsp;</div>

        