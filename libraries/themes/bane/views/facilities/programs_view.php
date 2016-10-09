<?php

if(title(2) == 'Abbott-House' || title(2) == 'Devereux-House' || title(2) == 'Rosewood' || title(2) == 'The-Bostonian'){

                    $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Alliance'=>'Alliance Health',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                    );

                }else if(title(2) == 'The-Bostonian'){

                         $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Alliance'=>'Alliance Health',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
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
                                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                                        ''.title(2).'-leadership-team'=>'Leadership',
                                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                                        //''.title(2).'-virtual-tours'=>'Virtual Tours',
                                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                                        'skilled-nursing-assisted-living-locations-ma'=>'Back to All Locations',
                                        );

                                    };

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
            
                <h1 class="fancy"><?php echo implode(' ', explode('-',title(2))); if(title(2) == 'Sugar-Hill'){ echo ' Assisted Living Community'; }else{ echo ' Skilled Nursing'; }; ?> Programs & Services</h1>
                
            <hr>
                
                <div class="e-ease ee:wwig" id="_<?php echo 'programs_'.title(2).''; ?>">
                    <?php 

                      newEE('programs_'.title(2).'');

                    ?>
                </div>    
                
            </div>
        
        </div>
        
    </div>
    
</div>