<div style="margin-bottom:20px;" class="bloggy">

    <div>
    
            <div class="col-md-8 col-sm-10 col-xs-9" style="padding-left:0;">  
                 
                <h1 style="text-align:left;"><?php echo $title; ?></h1><br>
                
                <div class="clearfix"></div>
                
                <p style="text-align:left;"><?php if(!empty($update)){echo '<b>Posted</b> - <i>'.$update.'</i>';}else{echo '<b>Posted</b> - <i>'.$date.'</i>';}?></p>
                
                <p style="height:auto;overflow:hidden;text-align:left;"><?php echo strip_tags(substr(strip_tags($script), 0, 255)); ?>...
                
                </p>
            
            </div>
        
        <div class="col-md-4" style="padding-right:0;">

            <div class="imgBox pull-right" style="border:5px solid #e0e5e8;overflow:hidden;width:200px;height:auto;padding:0;text-align:center;">
                <?php
                
                if(substr($img,-3) == 'pdf'){
                    echo '
                    <div class="clearfix">&nbsp;</div>
                    <b style="text-align:center;">View PDF Attachment</b>
                    <br>
                    <a style="text-align:center;" href="'.ROOT.'apps/dropzone/upload/Posts/'.$img.'" target="_blank">Click Here.</a>
                    <div class="clearfix">&nbsp;</div>
                    ';
                }else if(substr($img,-3) == 'docx'){
                    echo '
                    <div class="clearfix">&nbsp;</div>
                    <b style="text-align:center;">View Attachmented Document</b>
                    <br>
                    <a style="text-align:center;" href="'.ROOT.'apps/dropzone/upload/Posts/'.$img.'" target="_blank">Click Here.</a>
                    <div class="clearfix">&nbsp;</div>
                    ';
                }else{
                    
                    echo '<a href="'.ROOT.'apps/dropzone/upload/Posts/'.$img.'" rel="prettyPhoto">
                <img src="'.ROOT.'apps/dropzone/upload/Posts/'; if(!empty($img)){echo $img;}else{ echo '<span class="glyphicon glyphicon-picture"></span>';} echo '" alt="'.$img.'" style="width: 100%;" />
            </a><br>';
                }
                
                ?>

            <?php if($imgCap != 'false'){ 

    echo '<p style="background:#e0e5e8;margin-bottom:0;padding:15px;">';
    echo $imgCap; 
    echo '</p>';

}else{ 

    echo '';} 

            ?>
            </div>
        </div>
        
            <p>&nbsp;</p>
        
        <p class="pull-right">
        
            <a class="btn btn-warning" href="<?php echo ROOT; ?>skilled-nursing-news-<?php echo $id; ?>" role="button">View Post &raquo;</a>
        
        </p>
            <div class="clearfix"></div>
        <hr>
    </div>

</div>

        