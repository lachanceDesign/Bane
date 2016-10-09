<?php
$back = --$id;
?>

<div style="margin-bottom:20px;" class="bloggy">

    <div>
    
            <div class="col-md-8" style="padding-left:0;">  
                     <h2 class="fancy"> <?php echo $title; ?></h2>
                
                <p style="text-align:left;"><?php if(!empty($update)){echo '<b>Posted</b> - <i>'.$update.'</i>';}else{echo '<b>Posted</b> - <i>'.$date.'</i>';} ?></p>
                
                <p style="height:auto;overflow:hidden;text-align:left;"><?php echo $script; ?></p>
            
            </div>
        
                <div class="col-md-4 imgBox" style="border:5px solid #e0e5e8;overflow:hidden;height:auto;padding:0;text-align:center;">
                
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
                        
                                echo '
                                <p style="background:#e0e5e8;margin-bottom:0;padding:15px;">';
                                echo $imgCap; 
                                echo '</p>';
    
                            }else{ 
    
                                echo '';} 
                        
                        ?>
                
                </div>
        
            <p>&nbsp;</p>
        
        <p style="text-align:right;">
        
            <p style="text-align:right;">
                <a class="btn btn-warning" href="<?php echo ROOT.'Skilled-Nursing-News'; ?>" role="button">&laquo; Back to All Posts</a>
            </p>
        
        </p>
    
    </div>

</div>

        