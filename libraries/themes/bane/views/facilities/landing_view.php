<?php

if(title(2) == 'Abbott-House' || title(2) == 'Devereux-House' || title(2) == 'Rosewood'){
                
                 $page = array(
                ''.title().'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title())).'',
                ''.title().'-skilled-programs-services'=>'Programs/Services',
                ''.title().'-leadership-team'=>'Leadership',
                ''.title().'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                ''.title().'-virtual-tours'=>'Virtual Tours',
                ''.title().'-Alliance'=>'Alliance Health',
                ''.title().'-contact-referrals'=>'Contact and Referrals',
                'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                );
                
                }else if(title(2) == 'The-Bostonian'){
     
                 $page = array(
                 ''.title().'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title())).'',
                 ''.title().'-skilled-programs-services'=>'Programs/Services',
                 ''.title().'-leadership-team'=>'Leadership',
                 ''.title().'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                 ''.title().'-virtual-tours'=>'Virtual Tours',
                 ''.title().'-Alliance'=>'Alliance Health',
                 ''.title().'-contact-referrals'=>'Contact and Referrals',
                 'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                 );
     
                }else if(title(2) == 'Sugar-Hill'){
                    
                     $page = array(
                        ''.title(2).'-assisted-living-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-assisted-living-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-assisted-living-photo-gallery'=>'Photo Gallery',
                        //''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                        );
                    
                }else if(title(2) == 'Hancock-Park'){

                         $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        //''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Assisted-Living-Residence'=>'Assisted Living Residence',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                        );
                    
                }else if(title(2) == 'John-Scott-House' || title(2) == 'Park-Place'){

                    $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                    );

                }else{

                                $page = array(
                                ''.title().'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title())).'',
                                ''.title().'-skilled-programs-services'=>'Programs/Services',
                                ''.title().'-leadership-team'=>'Leadership',
                                ''.title().'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                                //''.title().'-virtual-tours'=>'Virtual Tours',
                                ''.title().'-contact-referrals'=>'Contact and Referrals',
                                'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                                );

                            }

?>

<div class="cont">

    <div class="container">
    
        <div class="row mobBtn">
            
            <div class="col-md-12 dropdown">
                  <button class="btn btn-blue" style="width:100%;" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Navigation
                    <span class="caret"></span>
                  </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                  <?php
                  
                      foreach($page as $link => $title){

                         if(ROOT.$link == links()){
                             $active = 'active';
                         }else{
                             $active = 'inactive';
                         }

                         echo '<li class="'.$active.'"><a style="color:white;" href="'.ROOT.$link.'">'.$title.'</a></li>';

                     }
                  
                  ?>
              </ul>
            </div>
            
            <div class="clearfix">&nbsp;</div>
        </div>
        
       <div class="row">
            <?php 
            
            tpBlock('sideBar');
            secNav($page);
            
            ?>
            
            <div class="col-md-9">
            
                <?php
                  
                    $title = title(2);
                    global $pages;
                
                    $add = $pages[$title]['add'];
                    $phone = $pages[$title]['phone'];              
           
                    $trail = array(''.$add.'',''.$phone.'');
                    breadcrumbs($trail);
                
                ?>
                
                <?php 
                
                if(title() == 'Abbott-House' || title() == 'Devereux-House' || title() == 'Rosewood' ){
                        
                    echo '<p style="color:#0980b0;">Owned by Alliance Health of MA, Inc. and managed by BaneCare Management.</p>';

                    };
                
                
                ?>
                
                <img src="images/welcome.jpg" />
                
                <hr>
                
                <?php 
                
                    $title = title();
                    $query = 'SELECT * FROM page WHERE `Title` LIKE "'.title().'"';
                    $block = 'ee';
                    $heading = new model();
                    $heading->query($query,$block);
               
                ?>
                
            </div>
        
        </div>
        
    </div>
    
</div>