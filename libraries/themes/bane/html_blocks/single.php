<!--Open Body Conetent-->
<div class="cont">
    <div class="container">
        <div class="row">

            <!--Open sideBar Nav-->
            <?php 

                if(links() == ROOT.'choosing-a-nursing-home' || title() == 'testimonials' || title() == 'baneNorth' || title() == 'baneSouth' || title() == 'Alliance' || title() == 'baneMetroBoston' || title() == 'baneWest'){
                 
                        $linked = array(
                        'skilled-nursing-assisted-living-locations-ma'=>'All BaneCare Locations',
                        'skilled-nursing-assisted-living-north-shore-ma'=>'BaneCare North',
                        'skilled-nursing-assisted-living-south-shore-ma'=>'BaneCare South',
                        'skilled-nursing-assisted-living-boston-metro-ma'=>'BaneCare Metro Boston',
                        'skilled-nursing-assisted-living-western-ma'=>'BaneCare West', 
                        );
                    
                    }else{

                        $linked = array(
                            'about-banecare-skilled-nursing-rehabilitation'=>'About Us',
                            'banecare-story-skilled-nursing-rehabilitation'=>'The BaneCare Story',
                            'leadership-team-skilled-nursing-rehabilitation'=>'Meet the Team',
                            'mission-for-skilled-nursing-rehabilitation'=>'Our Mission',
                            'Contact'=>'Contact Us'
                        );

                    };
                
                    tpBlock('sideBar'); 
                    secNav($linked);
                
                    ?>
                <!--Close sideBar Nav-->

                <div class="col-md-9">

                    <?php 

                   if($edit == 'false'){

                       echo $html;

                       }else{

                           include 'libraries/themes/'.theme().'/html_blocks/ee.php';
                           }

                    ?>

                </div>

                <?php ?>

        </div>
    </div>
</div>
<!--Close Body Content-->